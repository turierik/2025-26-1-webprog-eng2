const matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

// 1. generate a table from the matrix
// (using map + join)

const table = document.querySelector('table');

table.innerHTML = matrix.map(row => `<tr>${
    row.map(cell => `<td>${cell}</td>`).join('')
}</tr>`).join('');

table.innerHTML = "";

for (const row of matrix){
    const tr = document.createElement('tr');
    for (const cell of row){
        const td = document.createElement('td');
        td.innerText = cell;
        tr.appendChild(td)
    }
    table.appendChild(tr);
}

// 2. when i click a cell, multiply the value
// in that cell by 2 (using delation)

function double(e){
    if (e.target.matches('td')){
        e.target.innerText = parseInt(e.target.innerText) * 2;
    }
}

table.addEventListener("click", double);

// 3. (must use the delegate function)
// when i move my mouse over the table's rows
// change the row's bg color

function delegate(parent, type, selector, handler) {
    parent.addEventListener(type, function (event) {
        const targetElement = event.target.closest(selector);
        if (this.contains(targetElement)) {
          handler.call(targetElement, event);
        }
    });
}

delegate(table, "mouseover", "tr", function(){
    this.style.backgroundColor = "yellow";
})

delegate(table, "mouseout", "tr", function(){
    this.style.backgroundColor = "";
})