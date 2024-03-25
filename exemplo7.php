<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <?php

                echo "<h1>Texto e variáveis em PHP</h1>";
                echo "Mesclando textos e valores de variáveis....<br><br>";

                $variavel_1 = 1000;  //Tipo inteiro
                $variavel_2 = 10.5;  //Tipo real
                $variavel_3 = true;  //Tipo booleano
                $variavel_4 = "Olá"; //Tipo String
                $variavel_5 = 'blz'; //Tipo char
                $variavel_6 = 1000+900;
                $variavel_7 = $variavel_1 + 9000;
                $variavel_8 = $variavel_1 + $variavel_2;

                echo "a variável 1 é igual a $variavel_1<br>";
                echo "a variável 2 é igual a $variavel_2<br>";
                echo "a variável 3 é igual a $variavel_3<br>";
                echo "a variável 4 é igual a $variavel_4<br>";
                echo "a variável 5 é igual a $variavel_5<br>";
                echo "a variável 6 é 1000+900 = $variavel_6<br>";
                echo "a variável 7 é a soma da \"\$variável 1\" com 9000 = $variavel_7<br>";
                echo "a variável 8 é a soma da variável 1 e 2 = $variavel_8<br>";

        ?>
        </div>
    </body>
</html>