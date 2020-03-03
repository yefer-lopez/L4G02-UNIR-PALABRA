<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar y unir palabra</title>
</head>
<body>
<h1>UNIR LA PALABRA </h1>
</body>
</html>
<?php

$Pingresada=["peru", "per,per,pr,pe,ru,rr,dd"];
print_r($Pingresada);
echo "<br><br>";
$array=explode(",",$Pingresada[1]);

for($s=0;$s<count($array);$s++)
{
    echo($array[$s]);
    echo("<br><br>");
}

$salid="";
for($h=0; $h<count($array); $h++){
    for($i=0; $i<count($array); $i++){
        
        if($h!=$i){

            $salid=$array[$h].$array[$i];
            if($Pingresada[0]==$salid){

                echo ("LA PALABRA UNIDA ES =".$array[$h].",".$array[$i]);
                echo "<br><br>";
            }
            
        }
    }
}

?>