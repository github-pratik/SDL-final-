function generateFibonacci(num) {
    let output = "";
    let num1 = 0, num2 = 1;
    for (let i = 1; i <= num; i++) {
      output += num1 + ", ";
      let nextNum = num1 + num2;
      num1 = num2;
      num2 = nextNum;
    }
    return output.slice(0, -2);
  }
  
  const form = document.querySelector('form');
  const outputDiv = document.getElementById('output');
  
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const num = parseInt(document.getElementById('num').value);
    if (isNaN(num)) {
      outputDiv.innerText = "Please enter a valid number!";
    } else if (num < 1) {
      outputDiv.innerText = "Please enter a positive number!";
    } else {
      const result = generateFibonacci(num);
      outputDiv.innerText = result;
    }
  });
  