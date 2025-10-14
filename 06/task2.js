const canvas = document.querySelector('canvas');
const ctx = canvas.getContext('2d');

const balls = [
    {
        x: 200,
        y: 50,
        r: 20,
        c: "red",
        vy: 0
    }  
];

function render(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (const ball of balls){
        ctx.beginPath();
        ctx.arc(ball.x, ball.y, ball.r, 0, 2 * Math.PI);
        ctx.fillStyle = ball.c;
        ctx.fill();
    }
}

function update(dt){
    for (const ball of balls){
        ball.vy += 0.0001 * dt;
        ball.y += ball.vy * dt;
        if (ball.y + ball.r >= canvas.height){
            ball.vy *= -0.5;
        }
    }
}
let last = performance.now();
function gameLoop(){
    const now = performance.now();
    const dt = now - last;
    update(dt);
    render();
    last = now;
    requestAnimationFrame(gameLoop);
}
gameLoop();

canvas.addEventListener("click", function(e){
    balls.push({
        x: e.clientX,
        y: e.clientY,
        r: Math.floor(10 + Math.random() * 10),
        c: `rgb(${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)})`,
        vy: 0
    });
})