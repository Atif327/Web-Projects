let input = document.getElementById("inputbox");
let button = document.querySelectorAll("button");

let string = "";


button.forEach(button => {
  button.addEventListener("click", (e) => {

  if(e.target.innerHTML == "=") {
    string = eval(string);
  }
  else if(e.target.innerHTML == "AC"){
    string = "";
  }
  else if(e.target.innerHTML == "DEL"){
    string = string.substring(0, string.length - 1);
  }
  else{
  string += e.target.innerHTML;
  }
  input.value = string;
});

});