<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossário de História</title>
    <link rel="stylesheet" href="glossario.css">
</head>
<body>

    <div class="container">
        <h1>Glossário de História</h1>
        <div class="letters">
            <div class="letter" data-letter="A">A</div>
            <div class="letter" data-letter="B">B</div>
            <div class="letter" data-letter="C">C</div>
            <!-- Continue com as outras letras -->
        </div>
    </div>

    <div class="modal" id="modal">
        <span class="close-btn" id="close-btn">&times;</span>
        <h2 id="modal-title"></h2>
        <p id="modal-content"></p>
    </div>

    <div class="overlay" id="overlay"></div>

    <script>
        const letters = document.querySelectorAll('.letter');
        const modal = document.getElementById('modal');
        const overlay = document.getElementById('overlay');
        const closeBtn = document.getElementById('close-btn');
        const modalTitle = document.getElementById('modal-title');
        const modalContent = document.getElementById('modal-content');

        const glossary = {
            A: {
                title: 'A - Palavras',
                content: 'Aqui estão algumas palavras começando com a letra A e seus significados...'
            },
            B: {
                title: 'B - Palavras',
                content: 'Aqui estão algumas palavras começando com a letra B e seus significados...'
            },
            C: {
                title: 'C - Palavras',
                content: 'Aqui estão algumas palavras começando com a letra C e seus significados...'
            }
            // Adicione mais letras e conteúdo conforme necessário
        };

        letters.forEach(letter => {
            letter.addEventListener('click', () => {
                const letterKey = letter.getAttribute('data-letter');
                if (glossary[letterKey]) {
                    modalTitle.textContent = glossary[letterKey].title;
                    modalContent.textContent = glossary[letterKey].content;
                    modal.classList.add('active');
                    overlay.classList.add('active');
                }
            });
        });

        closeBtn.addEventListener('click', () => {
            modal.classList.remove('active');
            overlay.classList.remove('active');
        });

        overlay.addEventListener('click', () => {
            modal.classList.remove('active');
            overlay.classList.remove('active');
        });
    </script>

</body>
</html>
