<!DOCTYPE>
<html>
<head>
    <title>Exercice 2 :</title>
</head>
<body>
<?php
  $file=fopen("commandes.txt",'r+');
     while (($tomp = fgets($file)) !== false) {
        $af=explode('|',$tomp);
    for($i=0;$i<count($af);$i++){
    echo $af[$i]."|"  ;}
     }
?>
</body>
</html>