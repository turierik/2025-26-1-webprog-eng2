const inputN = document.querySelector('input');
const button = document.querySelector('button');
const table  = document.querySelector('table');

function generateTable(){
    const n = inputN.valueAsNumber; // only for input type=number
    table.innerHTML = "";
    /*for (let i = 1; i <= n; i++){
        const tr = document.createElement('tr');
        for (let j = 1; j <= n; j++){
            const td = document.createElement('td');
            td.innerText = i * j;
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }*/
    table.innerHTML = [...Array(n).keys()].map(x => `<tr>${
        [...Array(n).keys()].map(y => `<td>${(x+1)*(y+1)}</td>`).join('')
    }</tr>`).join('');
}

function changeInputStyle(){
    const n = inputN.valueAsNumber;
    //if (n > 200){
    //    inputN.classList.add('bignumber');
    //} else {
    //    inputN.classList.remove('bignumber');
    //}
    inputN.classList.toggle('bignumber', n > 200);
}

button.addEventListener('click', generateTable);
inputN.addEventListener('input', changeInputStyle);