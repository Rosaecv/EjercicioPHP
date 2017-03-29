<html>
<head>
    <title>Ejercicio 3</title>
    <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
              <link rel="stylesheet" href="css/ejercicio1.css">
</head>
<body bgcolor="#255">
   
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
					 <br>
					  <br>
					   <br>
                    <h2> PROGRAMACION DE APLICACIONES WEB</h2>
                    
                   
<div align=left><h4>Mostrar en pantalla una tabla de 1 por 10</h4></div>
    <?php
      
    echo "<h2>BUCLE WHILE </h2><br>";
    echo "<table border=1>";
    
        for($i=0;$i<10;$i++)
        {
              
            echo "<tr>"."<td>"."<font color=red>"."Linea".$i."</tr>"."</td>";
        }
    	echo "</font>";
     echo "</table>";
    echo "</br>"; 
    ?>
                    
     <right><a href="index.php">Regresar al menu</a></h2></right>
      <br>
    <br>
    

    <P>Martin Pacheco</P>
   
    
                
                
                </div>
            </section>
   
   
   

    </body>
</html>    