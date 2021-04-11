<!DOCTYPE html>
<html>
<head>
<title>Mi mini pagina en php</title>
</head>
<body>
    <h1>Practicando PHP</h1>
    <?php
    //te imprime un monton de tablas con informacion y versiones
    //phpinfo();


    //creacion de una variable en php
    $minombre="Jonathan";
    $miapellido="Calderón";

    //Declaracion de booleanos en php 
    $cierto=true;
    $falso=false;

    //echo es nuestro System.out.print de Java
    echo "<h1>Hola " .$minombre. "</h1>";

    //Creando una constante en php: las constantes en php se crean con el metodo define()
    define("Const_1","Soy una constante");
    echo Const_1;

    //condicionales en PHP
    $edad=19;
    if($edad<18){
        echo "<br>SOY IF";
    }elseif($edad==19){
        echo "<br>SOY ELSEIF";    
    }else{
        echo "SOY ELSE";  
    
    }


    //Bucles en PHP
    echo "<br>SOMOS UN WHILE<br>";
    $freno=1;
    while(true){
        if($freno==9){
            echo "The number is: $freno <br>";
            break;
        }
        echo "The number is: $freno <br>";
        $freno++;
    }

    echo "<br>ESTO ES UN FOR <br>";
    for($i=0;$i<10;$i++){
        echo "$i";
    }

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=Jonathan", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }



    ?>
</body>
</html>