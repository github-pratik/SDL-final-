function insert(num) {
	document.getElementById("result").value += num;
}

function clearResult() {
	document.getElementById("result").value = "";
}

function calculate() {
	var result = document.getElementById("result").value;
	var answer = eval(result);
	document.getElementById("result").value = answer;
}
