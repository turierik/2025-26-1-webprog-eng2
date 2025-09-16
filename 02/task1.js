const p = document.querySelector("p");
p.innerText = "Tues<i>day</i>"; // not showing up at italic
p.innerHTML = "Wed<b>nes</b>day"; // use innerHTML to use formatting

const h1 = document.querySelector("h1");
h1.innerText = "Changed"; // only the first h1 is changed

const h1s = document.querySelectorAll("h1"); // this is an ARRAY!!!
for (const h of h1s)
    h.innerText = "All of us have changed";

// CSS --> background-color: cyan
// JS  --> backgroundColor = "cyan"

p.style.backgroundColor = "cyan";

// CSS --> color: red
// JS  --> color = "red"
p.style.color = "red";
p.style.border = "3px solid black";

const img = document.querySelector("img");
img.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1GzP4l-gakgqVHveE-DmkMJr-RPDkgj2HFQ&s";
//img.style.height = "150px";
img.height = 150;