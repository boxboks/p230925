const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
canvas.width = 700;
canvas.height = 400;

let player, bullets, enemies, score, gameOver, enemyInterval;
let gameStarted = false;

function resetGame() {
    player = {
        x: canvas.width / 2,
        y: canvas.height - 30,
        width: 50,
        height: 50,
        speed: 15,
    };
    bullets = [];
    enemies = [];
    score = 0;
    gameOver = false;
    if (enemyInterval) clearInterval(enemyInterval);
}

function init() {
    resetGame();
    if (!gameStarted) {
        document.addEventListener('keydown', handleKeyDown);
        gameStarted = true;
    }
    spawnEnemies();
    gameLoop();
}

function handleKeyDown(event) {
    if (["ArrowLeft", "ArrowRight", "Space"].includes(event.code)) {
        event.preventDefault();
    }
    if (event.code === 'ArrowLeft') {
        player.x -= player.speed;
    } else if (event.code === 'ArrowRight') {
        player.x += player.speed;
    } else if (event.code === 'Space') {
        shoot();
    }
}

function shoot() {
    bullets.push({ x: player.x + player.width / 2, y: player.y, width: 5, height: 10 });
}

function spawnEnemies() {
    enemyInterval = setInterval(() => {
        const enemyX = Math.random() * (canvas.width - 50);
        enemies.push({ x: enemyX, y: 0, width: 50, height: 50 });
    }, 1000);
}

function update() {
    bullets.forEach((bullet, index) => {
        bullet.y -= 7;
        if (bullet.y < 0) {
            bullets.splice(index, 1);
        }
    });

    enemies.forEach((enemy, index) => {
        enemy.y += 2;
        if (enemy.y > canvas.height) {
            gameOver = true;
        }

        bullets.forEach((bullet, bulletIndex) => {
            if (bullet.x < enemy.x + enemy.width &&
                bullet.x + bullet.width > enemy.x &&
                bullet.y < enemy.y + enemy.height &&
                bullet.y + bullet.height > enemy.y) {
                bullets.splice(bulletIndex, 1);
                enemies.splice(index, 1);
                score += 10;
            }
        });
    });
}

function render() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = 'blue';
    ctx.fillRect(player.x, player.y, player.width, player.height);

    bullets.forEach(bullet => {
        ctx.fillStyle = 'yellow';
        ctx.fillRect(bullet.x, bullet.y, bullet.width, bullet.height);
    });

    enemies.forEach(enemy => {
        ctx.fillStyle = 'red';
        ctx.fillRect(enemy.x, enemy.y, enemy.width, enemy.height);
    });

    ctx.fillStyle = 'red';
    ctx.font = '40px Arial';
    ctx.fillText(`Score: ${score}`, 10, 20);

    if (gameOver) {
        ctx.fillText('Game Over', canvas.width / 2 - 100, canvas.height / 2);
    }
}

function gameLoop() {
    if (!gameOver) {
        update();
        render();
        requestAnimationFrame(gameLoop);
    } else {
        clearInterval(enemyInterval);
    }
}

const startButton = document.getElementById('startButton');
if (startButton) {
    startButton.addEventListener('click', () => {
        init();
    });
}