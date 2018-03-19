var bleep = new Audio();
bleep.src = "sounds/Rollthedicesound.wav";

function playBtnSound() {
  bleep.play();
}

function rolldice() {
    var die1 = document.getElementById("die1");
    var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var d1 = Math.floor(Math.random() * 55) + 1;
    var d2 = Math.floor(Math.random() * 45) + 1;
    var diceTotal = d1 + d2;
    die1.innerHTML = d1;
    die2.innerHTML = d2;
    status.innerHTML = " You rolled "+diceTotal+".";
    if(diceTotal > 50){
      status.innerHTML += "Congratulations! You won 0.01$ deposit 5000$ to withdraw";

  
  
    }
}
