function showAlert() {
    alert('Hello, world!');
}

let age = prompt('What is your age?');

let weeks = age * 52;
document.getElementById('age').textContent = age;
document.getElementById('weeks').textContent = weeks;

let time = new Date();
let hours = time.getHours();
let minutes = time.getMinutes();
let seconds = time.getSeconds();

let greeting;

if (hours >= 5 && hours < 12) {
    greeting = 'Good morning!';
} else if (hours >= 12 && hours < 18) {
    greeting = 'Good afternoon!';
} else {
    greeting = 'Good evening!';
}

document.getElementById('greeting').textContent = greeting + ' The time is ' + hours + ':' + minutes + ':' + seconds;
