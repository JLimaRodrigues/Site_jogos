<main style="display: flex">
    <nav>
        <ul id="lista-jogos">
            <li><a href="">Aventura</a></li>
            <li><a href="">Tiro</a></li>
            <li><a href="">Ação</a></li>
            <li><a href="">Plataforma</a></li>
        </ul>
    </nav>

    <div id="iniciar_Jogo">
        <form autocomplete="off">
            <input list="usuarios" type="text" placeholder="Digite seu nickname" id="nickname">
            <button type="submit">Jogar</button>
        </form>
    </div>

    <canvas id="meu_canvas"  width="300" height="300"></canvas>

    <script>
        var canvas = document.getElementById('meu_canvas');
        var context = canvas.getContext('2d')

        function desenhaQuadrado(x,y,30,30)
        /*var imagem = new Image();
        imagem.src = 'imagens/jogo/explosao.png';

            // Carregar a imagem
            imagem.onload = function() {
            context.drawImage(
            imagem,
            80, 10, 60, 65, // Área de recorte (clipping)
            20, 20, 60, 65 // Desenho no Canvas
            );
            }
            */

    </script>
</main>
