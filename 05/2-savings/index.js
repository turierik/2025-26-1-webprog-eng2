const form = document.querySelector("form");
const divContainer = document.querySelector(".container");

const inputs = document.querySelectorAll("input");
// let sum = 0;
// let ci = [];
// for (const input of inputs){
//     sum += Number(input.dataset.consumption);
//     ci.push( input.value / input.max * input.dataset.consumption );
// }
const sum = [...inputs].reduce((sum, input) => sum + Number(input.dataset.consumption), 0);
console.log(`M = ${sum}`);
function updateChart(){
    const ci = [...inputs].map(input => input.value / input.max * input.dataset.consumption);
    console.log(ci);
    inputs.forEach((input, i) => {
        const label = document.querySelector(`label[for="${input.id}"]`);
        label.style.width = `${ci[i] / sum * 100}%`;
    })
}
updateChart();
form.addEventListener("input", updateChart);