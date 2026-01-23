const board = document.querySelector('.board');
const startButton = document.querySelector('.start-btn');
const modal = document.querySelector('.modal');
const startGameModal = document.querySelector('.startGame');
const gameOverModal = document.querySelector('.restartGame');
const restartButton = document.querySelector('.restart-btn');


const HighScoreElement = document.querySelector('#high-score');
const ScoreElement = document.querySelector('#score');
const TimeElement = document.querySelector('#time');

const blockHeight = 30;
const blockWidth = 30;

let HighScoore = parseInt(localStorage.getItem('highScore')) || 0;
let Score = 0;
let time = "00:00";
HighScoreElement.textContent = HighScoore;
const cols = Math.floor(board.clientWidth / blockWidth);
const rows = Math.floor(board.clientHeight / blockHeight);

let intervalId =  null;
let timeIntervalId = null;

const blocks = [];

let snake = [ {x:1,y:7},{x:1,y:8},{x:1,y:9}];

let food = {x: Math.floor(Math.random()*rows), y: Math.floor(Math.random()*cols)};

let directions = 'left';

// Create grid
for(let row = 0; row < rows; row++) {
  for(let col = 0; col < cols; col++) {
    const block = document.createElement('div');
    block.classList.add('block');
    board.appendChild(block);

    
    blocks[`${row}-${col}`] = block;
    
  }
}

function drawSnake() {
  let head = null; 

  // draw food
  blocks[`${food.x}-${food.y}`].classList.add('food');

  // move snake
  if(directions === 'left') {head = {x: snake[0].x,y: snake[0].y - 1};}
  else if(directions === 'right') {head = {x: snake[0].x,y: snake[0].y + 1} }
  else if(directions === 'up') {head = {x: snake[0].x - 1,y: snake[0].y}}
  else if(directions === 'down') {head = {x: snake[0].x + 1,y: snake[0].y}}

  // collision detection

  if(head.x < 0 || head.x >= rows || head.y < 0 || head.y >= cols) {
    
    clearInterval(intervalId);
    modal.style.display = 'flex';
    startGameModal.style.display = 'none';
    gameOverModal.style.display = 'flex';

    return;
  }

  // food consumption logic

  if (head.x === food.x && head.y === food.y) {
     blocks[`${food.x}-${food.y}`].classList.remove('food');
     food = {x: Math.floor(Math.random()*rows), y: Math.floor(Math.random()*cols)};
     blocks[`${food.x}-${food.y}`].classList.add('food');
     snake.unshift(head);
      Score += 1;
      ScoreElement.textContent = Score;

      if (Score > HighScoore) {
        HighScoore = Score;
        localStorage.setItem('highScore', HighScoore.toString());
        HighScoreElement.textContent = HighScoore; 
      }
  }

  snake.forEach(segment => {
    blocks[`${segment.x}-${segment.y}`].classList.remove('fill');
  }); 
    snake.unshift(head);
    snake.pop();
  snake.forEach(segment => {
    blocks[`${segment.x}-${segment.y}`].classList.add('fill');

  });
}

// start game
startButton.addEventListener("click", () => {
  modal.style.display = 'none';
  intervalId = setInterval(() => {drawSnake();}, 400);

  
  timeIntervalId = setInterval(() => {
    let [ min, sec] = time.split(':').map(Number);

    if(sec === 59) {
      min += 1;
      sec = 0;
    }
    else
    {
      sec += 1;
    }

    time = `${min}:${sec}`;
    TimeElement.textContent = time;
  }, 1000); 

});

//restart game
restartButton.addEventListener('click', restartGame);
function restartGame() {

  blocks[`${food.x}-${food.y}`].classList.remove('food');
  snake.forEach(segment => {blocks[`${segment.x}-${segment.y}`].classList.remove('fill');});

  Score = 0;
  time = "00:00";  

  ScoreElement.textContent = Score;
  TimeElement.textContent = time;
  

  modal.style.display = 'none';
  snake = [ {x:1,y:7},{x:1,y:8},{x:1,y:9}];
  food = {x: Math.floor(Math.random()*rows), y: Math.floor(Math.random()*cols)};
  intervalId = setInterval(() => {drawSnake();}, 400);
}

// Key to move snake
addEventListener('keydown', (event) => {
  if (event.key === 'a' || event.key === 'A' || event.key === 'ArrowLeft') {directions = 'left';} 
  else if (event.key === 'd' || event.key === 'D' || event.key === 'ArrowRight') {directions='right';} 
  else if (event.key === 'w' || event.key === 'W' || event.key === 'ArrowUp') {directions = 'up';} 
  else if (event.key === 's' || event.key === 'S' || event.key === 'ArrowDown') {directions='down';}
});

