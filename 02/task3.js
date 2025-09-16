const r = document.querySelector("#red");
const g = document.querySelector("#green");
const b = document.querySelector("#blue");
const body = document.body;

function updateBackgroundColor(){
    const rV = r.value;
    const gV = g.value;
    const bV = b.value;
    //body.style.backgroundColor = "rgb(" + rV + " " + gV + " " + bV + ")";
    body.style.backgroundColor = `rgb(${rV} ${gV} ${bV})`;
}

r.addEventListener("input", updateBackgroundColor);
g.addEventListener("input", updateBackgroundColor);
b.addEventListener("input", updateBackgroundColor);