<!DOCTYPE>
<html>
<head>
    <title>Exercice 1 :</title>
</head>
<body style="background: #ff7a00;">
    <h2 align ="center">Délice des Fruits & Légumes </h2>
    </br>
    </br>
<?php
    
    $tab = array('images/m1.png','images/m2.png','images/m3.png','images/m4.png','images/m5.png','images/m6.png','images/m7.png','images/m8.png','images/m9.png');

 shuffle($tab);   
?>
   <ul align ="center">
   <?php
      for($i=0;$i<3;$i++)
        echo "<li style=\"display :inline; padding: 15px;\"><img src=\"$tab[$i]\" width=\"150\" height=\"150\" ></li>" ;
    ?>  
   </ul> 
    
</body>
</html>