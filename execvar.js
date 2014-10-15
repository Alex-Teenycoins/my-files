
function makeTotal () {
	var amount = document.getElementById("inputAmount").value;
	var frequency = document.getElementById("inputFreq").value;
	var duration = document.getElementById("inputDur").value;
	var totalDays = duration*30;
	switch(duration){
		case "2":
		case "3":
			totalDays = totalDays+1;
			break;
		case "4":
		case "5":
			totalDays = totalDays+2;
			break;
		case "6":
			totalDays = totalDays+3;
			break;
		default:
			alert("You're saving only for 1 month... Really?!");
	}
	var total = Math.floor(amount*totalDays/frequency);
	alert("You're total is $" + total);
};

function getVar () {
	var amount = document.getElementById("inputAmount").value;
	var frequency = document.getElementById("inputFreq").value;
	var duration = document.getElementById("inputDur").value;
	alert("You're amount is " + amount + "$\rYou're frequency is every " + frequency
		+ " days\rYou're duration is " + duration + " months");
	makeTotal();
};