const canvas = document.querySelector('canvas');
const ctx = canvas.getContext('2d');

ctx.fillStyle = "green";
ctx.fillRect(50, 100, 80, 120); // fill with colour

ctx.strokeStyle = "purple";
ctx.lineWidth = "4";
ctx.strokeRect(70, 120, 120, 120); // only outline

ctx.clearRect(40, 40, 80, 80); // turn to transparent

ctx.font = "20px Arial";
ctx.lineWidth = "1";
ctx.fillText("Hello", 20, 20);
ctx.strokeText("Stroke", 50, 50);

const img = new Image();
img.src = "fox.png";
img.addEventListener("load", function() { // you have to wait for images to load before drawing them
    ctx.drawImage(img, 100, 100); // original size
    ctx.drawImage(img, 100, 100, 200, 200); // resize to 200x200
})

// everything else needs to be created in memory first

ctx.beginPath(); // always start with this
ctx.moveTo(80, 80); // go to coordinate
ctx.lineTo(120, 80); // draw line to point
ctx.lineTo(150, 140); // side b
ctx.lineTo(80, 80); // side c - triangle
ctx.stroke(); // draw the outline of the path from memory
ctx.fill(); // fill in the shape

ctx.beginPath();
ctx.arc(100, 300, 30, 0, 2 * Math.PI); // circle
ctx.fill();