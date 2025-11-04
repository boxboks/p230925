document.addEventListener('DOMContentLoaded', function () {
    const cells = Array.from(document.querySelectorAll('.cell'));
    const statusEl = document.getElementById('status');
    const restartBtn = document.getElementById('restartBtn');

    let board = Array(9).fill('');
    let currentPlayer = 'X';
    let gameActive = true;

    const winCombos = [
        [0,1,2],[3,4,5],[6,7,8],
        [0,3,6],[1,4,7],[2,5,8],
        [0,4,8],[2,4,6]
    ];

    function updateStatus() {
        if (!gameActive) return;
        statusEl.textContent = `Turn: ${currentPlayer}`;
    }

    function handleCellClick(e) {
        const idx = Number(e.target.dataset.index);
        if (!gameActive || board[idx]) return;

        board[idx] = currentPlayer;
        e.target.textContent = currentPlayer;

        if (checkWin()) {
            statusEl.textContent = `${currentPlayer} wins!`;
            gameActive = false;
            highlightWinningCells();
            return;
        }

        if (board.every(cell => cell)) {
            statusEl.textContent = 'Draw!';
            gameActive = false;
            return;
        }

        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        updateStatus();
    }

    function checkWin() {
        return winCombos.some(combo =>
            combo.every(i => board[i] === currentPlayer)
        );
    }

    function highlightWinningCells() {
        for (const combo of winCombos) {
            if (combo.every(i => board[i] === currentPlayer)) {
                combo.forEach(i => cells[i].classList.add('win'));
                break;
            }
        }
    }

    function restartGame() {
        board.fill('');
        cells.forEach(c => {
            c.textContent = '';
            c.classList.remove('win');
        });
        currentPlayer = 'X';
        gameActive = true;
        updateStatus();
    }

    cells.forEach(cell => cell.addEventListener('click', handleCellClick));
    restartBtn.addEventListener('click', restartGame);

    // initial status
    updateStatus();
});

// Optional: small CSS injection for board layout in case page CSS doesn't define it.
(function injectStyles(){
    const css = `
    #board{ display: grid; grid-template-columns: repeat(3, 120px); grid-template-rows: repeat(3, 120px); gap: 6px; margin:12px 0; }
    .cell{ display:flex; align-items:center; justify-content:center; font-size:48px; background:rgba(255,255,255,0.03); cursor:pointer; user-select:none; }
    .cell.win{ background: rgba(40,200,40,0.2); }
    #status{ font-weight:600; }
    @media (max-width:600px){ #board{ grid-template-columns: repeat(3, 80px); grid-template-rows: repeat(3, 80px);} .cell{ font-size:36px;} }
    `;
    const s = document.createElement('style');
    s.textContent = css;
    document.head.appendChild(s);
})();
