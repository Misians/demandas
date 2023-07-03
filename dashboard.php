<?php 

?>
<head>
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <h2>DEMANDAS - UERN</h2>
    <div class="dashboard">
        <?php for($i = 0; $i < 10; $i++){
            ?>
        <a href="">
        <div class="quadrado">
            <p class="tittle">Artemísia Kimberlly aa aaa aaa aa aaaaa</p>
            <p class="duvida">Computador quebrou na educa, por favor vir olhar, testando pra ver se o texto quebra</p>
            <label class="check">Concluido
                <input type="checkbox" id="mycheck">
                </label>
                <div class="infos">
                    <div class="setor">
                        <p>Setor Eventos</p>
                        
                    </div>
                    <div class="responsavel">
                            <p>AK</p>
                        </div>
                </div>
                
            
            
        </div>
    </a>
        <?php } ?>
    </div>
</body>