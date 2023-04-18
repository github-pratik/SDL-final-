const alertBtn = document.getElementById("alert-btn");
alertBtn.addEventListener("click", () => {
  alert("You clicked the alert button!");
});

const toggleBtn = document.getElementById("toggle-btn");
const counter = document.getElementById("counter");
toggleBtn.addEventListener("click", () => {
  if (counter.style.display === "none") {
    counter.style.display = "block";
  } else {
    counter.style.display = "none";
  }
});

let count = 0;
const incrementBtn = document.getElementById("increment-btn");
incrementBtn.addEventListener("click", () => {
  count++;
  counter.textContent = count;
});

const form = document.getElementById("form");
form.addEventListener("submit", (event) => {
  event.preventDefault();
  const nameInput = event.target.elements.name;
  const name = nameInput.value;
  alert(`Hello, ${name}!`);
  nameInput.value = "";
});
