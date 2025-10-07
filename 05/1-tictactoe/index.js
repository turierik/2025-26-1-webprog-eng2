const task1 = document.querySelector('#task1');
const task2 = document.querySelector('#task2');
const task3 = document.querySelector('#task3');
const task4 = document.querySelector('#task4');

const game = [
  "XXOO",
  "O OX",
  "OOO ",
];

task1.innerHTML = game.every(row => row.length === game[0].length);
task2.innerHTML = game[0].split("").every(char => char === "X" || char === "O");
const xs = game.map(row => row.split("")).flat().filter(char => char === "X").length;
const os = game.map(row => row.split("")).flat().filter(char => char === "O").length;
task3.innerHTML = `X / O = ${xs} / ${os}`;
task4.innerHTML = game.findIndex(row => row.includes("OOO") || row.includes("XXX"));