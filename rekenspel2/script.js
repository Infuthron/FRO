function makeSum() {
let a = Math.floor(Math.random() * 9 + 1);
let b = Math.floor(Math.random() * 9 + 1);
mySum = a + " * " + b;
task.innerHTML = mySum;
mySums.push(mySum);
answer.focus();
}

function keyPressed(evt) {
  if (evt.keyCode == 13) {
    myAnswers.push(answer.value);
    rightAnswers.push(eval(mySum));
    if (eval(mySum) == answer.value) {
      points++
    } else {
    }
    round++;
    rounds.innerHTML = ("Round: " + round);
    window.setTimeout(waiting, 250);
    if (round == 10) {
      console.log("HELLO");
      table.innerHTML = table.innerHTML + "<tr>"  + "<th>" + "Assingment" + "</th>" + "<th>" + "My Answer" + "</th>" + "<th>" + "Right Answer" + "</th>" + "</tr>"

      makeTable();
    }
  }
}

function waiting() {
  answer.value = "";
  makeSum();
}

function animate() {
      head.style.color = "rgb(" + rndNumber() + "," + rndNumber() + "," + rndNumber() + ")";

}

function rndNumber() {
  return Math.floor(Math.random() * 255);
}

function makeTable() {
    innerHTMLtable(mySums, myAnswers, rightAnswers);

}

function innerHTMLtable(array1, array2, array3) {
  for (i = 0; i < 10; i++) {
  table.innerHTML = table.innerHTML + "<tr>"  + "<th>" + array1[i] + "</th>" + "<th>" + array2[i] + "</th>" + "<th>" + array3[i] + "</th>" + "</tr>";
  answer.disabled = true;
  document.getElementById("reset").style.visibility = "visible";
  }
}

reset.addEventListener('click',()=> {
document.getElementById("reset").style.visibility = "hidden";
document.getElementById("table").remove();
rounds.innerHTML = ("Round: 0");
answer.disabled = false;
round = 0;

var x = document.createElement("TABLE");
x.setAttribute("id", "table");
document.body.appendChild(x);
})

var mySums = [];
var myAnswers = [];
var rightAnswers = [];

var mySum;
var round = 0;
var points = 0;

setInterval(animate, 600);

makeSum();
answer.addEventListener("keydown", keyPressed, false);
