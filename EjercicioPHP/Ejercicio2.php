<html>
<head>
    <title>Ejercicio 2</title>
    <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
              <link rel="stylesheet" href="css/ejercicio1.css">
</head>
<body bgcolor="#254">
   
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
   <div align=left><h4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</h4></div>
   <br>
     <br>
<?php

    echo "<table border=1 >";
    $n=1;
	
    for($n1=1; $n1<=10;$n1++)
    {
		
        echo "<tr>";
        for($n2=1;$n2<=10;$n2++)
        {
			
            echo "<td>","<font color=red>",$n,"</td></font>";
            $n=$n+1;
				
        }
        echo "</tr>";
	echo "</font>";
	
    }
    echo "</table>";

?>

                    
<br>
    <br>
    <br>
  <br>
    <br>
    <br>  
    
     <a href="index.php">Regresar al menu</a></h2>
	 <br>
      <br>
    <br>
 
   
    <P>Martin Pacheco</P>
   
    
                
                
                </div>
            </section>
   
   
   

    </body>
</html>    