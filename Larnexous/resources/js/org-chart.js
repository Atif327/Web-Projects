// Dynamic Org Chart SVG connector drawing and progressive reveal
(function(){
  function $(sel, ctx=document){ return ctx.querySelector(sel); }
  function $all(sel, ctx=document){ return Array.from(ctx.querySelectorAll(sel)); }

  const easeMs = 600;
  const levelDelay = 700; // delay between levels

  function wait(ms){ return new Promise(r=>setTimeout(r, ms)); }

  function containerRect(container){ return container.getBoundingClientRect(); }

  function pointForElement(el, containerRect){
    const r = el.getBoundingClientRect();
    return {
      centerX: (r.left + r.right) / 2 - containerRect.left,
      topY: r.top - containerRect.top,
      bottomY: r.bottom - containerRect.top
    };
  }

  function makePathD(startX, startY, endX, endY){
    const gap = Math.max(32, Math.abs(endY - startY) / 2);
    // cubic bezier from bottom-center to top-center with smooth curve
    return `M ${startX} ${startY} C ${startX} ${startY + gap} ${endX} ${endY - gap} ${endX} ${endY}`;
  }

  function drawPath(svg, d){
    const ns = 'http://www.w3.org/2000/svg';
    const path = document.createElementNS(ns, 'path');
    path.setAttribute('d', d);
    path.setAttribute('stroke', '#D1D5DB');
    path.setAttribute('stroke-width', '2');
    path.setAttribute('fill', 'none');
    path.setAttribute('stroke-linecap', 'round');
    path.setAttribute('stroke-linejoin', 'round');
    svg.appendChild(path);
    // animate
    const len = path.getTotalLength();
    path.style.transition = `stroke-dashoffset ${easeMs}ms ease-in-out`;
    path.style.strokeDasharray = len;
    path.style.strokeDashoffset = len;
    // trigger
    requestAnimationFrame(()=>{ path.style.strokeDashoffset = '0'; });
    return new Promise(res => setTimeout(()=>res(path), easeMs + 30));
  }

  function clearPaths(svg){ while(svg.firstChild) svg.removeChild(svg.firstChild); }

  async function drawConnectorForIds(container, svg, parentId, childId){
    const parent = container.querySelector(`[data-node="${parentId}"]`);
    const child = container.querySelector(`[data-node="${childId}"]`);
    if(!parent || !child) return null;
    const cRect = container.getBoundingClientRect();
    const p = pointForElement(parent, cRect);
    const ch = pointForElement(child, cRect);
    const startX = p.centerX; const startY = p.bottomY;
    const endX = ch.centerX; const endY = ch.topY;
    const d = makePathD(startX, startY, endX, endY);
    return await drawPath(svg, d);
  }

  function revealNode(container, nodeId){
    const el = container.querySelector(`[data-node="${nodeId}"]`);
    if(!el) return;
    el.setAttribute('data-visible', 'true');
  }

  async function sequenceDraw(){
    const container = $('.org-chart');
    if(!container) return;
    const svg = $('#org-svg');
    if(!svg) return;

    // ensure svg size covers container
    function resizeSvg(){
      const r = container.getBoundingClientRect();
      svg.setAttribute('width', r.width);
      svg.setAttribute('height', r.height);
      svg.style.width = r.width + 'px';
      svg.style.height = r.height + 'px';
    }
    resizeSvg();

    // initial state: only CEO visible (already set in markup); hide others
    const nodes = $all('.org-node', container);
    nodes.forEach(n => { if(n.dataset.node !== 'ceo') n.setAttribute('data-visible','false'); });

    // step 1: reveal ceo (already visible) then draw to operations & project_director
    revealNode(container, 'ceo');
    await wait(300);
    // draw both connectors in parallel
    await Promise.all([
      drawConnectorForIds(container, svg, 'ceo', 'operations').then(()=> revealNode(container, 'operations')),
      drawConnectorForIds(container, svg, 'ceo', 'project_director').then(()=> revealNode(container, 'project_director'))
    ]);

    await wait(levelDelay);
    // draw project_director -> project_manager
    await drawConnectorForIds(container, svg, 'project_director', 'project_manager');
    revealNode(container, 'project_manager');

    await wait(levelDelay);
    // draw project_manager -> members sequentially
    const members = nodes.filter(n => n.dataset.node && n.dataset.node.startsWith('member-')).sort((a,b)=> a.dataset.node.localeCompare(b.dataset.node));
    for(const m of members){
      await drawConnectorForIds(container, svg, 'project_manager', m.dataset.node);
      revealNode(container, m.dataset.node);
      await wait(180);
    }
  }

  function redrawAll(){
    const container = $('.org-chart'); if(!container) return;
    const svg = $('#org-svg'); if(!svg) return;
    clearPaths(svg);
    // find visible nodes and re-draw connectors between visible parent-child pairs
    const visible = $all('.org-node[data-visible="true"]', container).map(n=>n.dataset.node);
    // simple approach: re-run sequence but only draw connectors for visible nodes
    // For simplicity, re-run full sequence non-destructively: hide all non-ceo, then sequence
    nodesRecalc();
  }

  function nodesRecalc(){
    // remove existing paths and start sequence again based on current visibility
    const svg = $('#org-svg'); const container = $('.org-chart'); if(!svg || !container) return;
    clearPaths(svg);
    // re-run sequence but respect nodes already visible: quick implementation: call sequenceDraw which will draw fresh
    sequenceDraw();
  }

  // debounce resize
  let resizeTimeout = null;
  function onResize(){ if(resizeTimeout) clearTimeout(resizeTimeout); resizeTimeout = setTimeout(()=>{ const svg=$('#org-svg'); const container=$('.org-chart'); if(container && svg){ const r=container.getBoundingClientRect(); svg.setAttribute('width', r.width); svg.setAttribute('height', r.height); clearPaths(svg); sequenceDraw(); } }, 200); }

  // init
  document.addEventListener('DOMContentLoaded', ()=>{
    // run after small delay so fonts/images settle
    setTimeout(()=>{
      try{ sequenceDraw(); }catch(e){console.error('org-chart draw error',e);}    
    }, 200);
    window.addEventListener('resize', onResize);
  });

})();
