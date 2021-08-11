<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        //Operadores condicionais/comparação
        //==
        //===
        // != ou <>
        //!==
        //<
        //>
        //<=
        //>=

        //operadores lógicos
        // e: && ou and -> retorna verdadeiro se todos os resultados forem verdadeiros.
        // ou: || ou OR -> retorna verdadeiro se pelo menos um resultado for verdadeiro.
        // XOR: XOR -> retorna verdadeiro se uma das expressoes for verdadeira e a outra for falsa
        //! -> inverte o resukltado retornado pela expressão


        if ((22 == 22 && 3 == 3) || 5 != 5) {
            echo 'Verdadeiro';
        } else{
            echo 'Falso';
        }

        
    ?>
</body>
</html>