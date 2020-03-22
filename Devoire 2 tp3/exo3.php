<!DOCTYPE>
<html>
<head>
    <title>EXO 3:</title>
    <style> 
        body {
            background-color:antiquewhite ;
        }
    table, th, td {
  border: 1px solid black;
}
        th{
            background-color:cornflowerblue;
        }
    
    </style>
</head>
<body>
    <h1>Centrale d'achats</h1>
    <h3>Command clients</h3>
    
     <table style="width:80%">
  <tr >
    <th>Numéro de commande</th>
    <th>Numéro de Client</th> 
    <th>Date de commande</th>
    <th>Désognation artilce</th>
    <th>Quantité(Pal)</th>
    <th>Prix unitaire(Dh)</th>
    <th>Date de livraison</th>
    <th>adresse client</th>
  </tr>
 
   <tr> 
<?php
    error_reporting(E_ERROR|E_PARSE);
   $file=fopen("commandes.txt",'r+');
       
     while (($tomp = fgets($file)) !== false) {
        $af=explode('|',$tomp);
            for($i=0;$i<count($af);$i++){
            if ($i%8==0) {echo "<tr>";}
            echo "<td>". $af[$i] ."</td>" ;}
            }  
?>   
    </tr>     
   </table>      
</body>

</html>