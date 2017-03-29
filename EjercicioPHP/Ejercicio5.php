<html>
<head>
    <title>Ejercicio 5</title>
    <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
              <link rel="stylesheet" href="css/ejercicio1.css">
</head>
<body bgcolor="#260">
   
   EDIT ON
 <header>
    <div class="contenedor">
        <h1 class="icon-cloud1"> PHP </h1>
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
                    <h4>Mostrar en pantalla cual  es el mayor de TRES numeros</h4>
					 <br>
					  <br>
					   <br>
    <?php
    $n1=54;
    $n2=10;
    $n3=36;
     echo "1.-(".$n1.")<br>";
	 echo "2.-(".$n2.")<br>";
	 echo "3.-(".$n3.")<br>";
	
    if(($n1>$n2) and ($n1>$n3)) {
        echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.") y el tercero (".$n3.")" ;
    }
    
        elseif(($n2>$n1) and ($n2>$n3)) {
        echo "El segundo numero (".$n2.") es mayor que el primero (".$n1.") y el tercero (".$n3.")" ;
    }
        elseif(($n3>$n1) and ($n3>$n2)) {
        echo "El tercer numero (".$n3.") es mayor que el segundo (".$n1.") y el primero (".$n2.")" ;
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