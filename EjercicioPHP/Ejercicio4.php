<html>
<head>
    <title>Ejercicio 4</title>
    <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
              <link rel="stylesheet" href="css/ejercicio1.css">
</head>
<body bgcolor="#257">
   
   EDIT ON
 <header>
    <div class="contenedor">
        <h1> PHP </h1>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="Ejercicio1.php">Ejercicio1</a>
                    <a href="Ejercicio2.php">Ejercicio2</a>
                    <a href="Ejercicio3.php">Ejercicio3</a>
                    <a href="Ejercicio4.php">Ejercicio4</a>
                    <a href="Ejercicio5.php">Ejercicio5</a>
                </nav>
            </div>
</header>
        
        <main>
            <section id="banner">
                <img src="img/intro.jpg">
                <div class="contenedor">
                   <br>
                    <br>
                    <h2> PROGRAMACION DE APLICACIONES WEB</h2>
                    <br>
                    <br>
                    
                    <br>
                    <h4>Mostrar en pantalla cual es mayor de dos numeros</h4>

                    <br>
                    <br>
<?php
    $n1=54;
    $n2=10;
	 echo "1.-(".$n1.")<br>";
	 echo "2.-(".$n2.")<br><br>";
	 
    
    if($n1>$n2){
        echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.")";
    }
    else if ($n1==$n2){
        echo "El primer numero (".$n1.") es igual al segundo (".$n2.")";
    }
    else {
        echo "El primer numero (".$n1.") es menor que el segundo (".$n2.")";
    }
?>
                    
<br>
    <br>
    <br>
  <br>
    <br>
    <br>  
    
     <right><a href="index.php">Regresar al menu</a></h2></right>
      <br>
    <br>
    <br>  <br>
    <br>
    <br>  <br>
    <br>
    <br>  <br>
  
    <P>Martin Pacheco</P>
   
    
                
                
                </div>
            </section>
   
   
   

    </body>
</html>    