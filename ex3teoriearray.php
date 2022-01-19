<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucrare3 teorie</title>
</head>
<body>
<h3>Ex 1</h3>
<?php
    function bubble_sort1(&$arr)
    {
        $n=sizeof($arr);
        for($i = 0; $i < $n; $i++)
        {
            for($j=0; $j<$n - $i-1; $j++)
            {
                if($arr[$j] > $arr[$j+1])
                {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                }
            }
        }
    }
    function bubble_sort2(&$arr)
    {
        $n=sizeof($arr);
        for($i=0; $i<$n; $i++)
        {
            for($j=0; $j<$n - $i-1; $j++)
            {
                if($arr[$j] < $arr[$j+1])
                {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                }
            }
        }
    }
    $arr = array(2, 0, 6, 5, 7);
    bubble_sort1($arr);
    
    for($i = 0; $i<count($arr); $i++){
        echo $arr[$i], ' ';
    }
    echo "<br>";

    bubble_sort2($arr);

    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i], ' ';
}
echo "<br>";
?>
<h3>Ex 2</h3>
<?php
$arr = array(2,5,3,6, 9);
$sum = 0;
for($i = 0; $i<count($arr); $i++)
    $sum+=$arr[$i];
echo 'Suma elemenentelor:', $sum, '<br>';
 $maxValue = max($arr);
 $minValue = min($arr);
echo 'Cifra minima:', $minValue, '<br>';
echo 'Cifra maxima:', $maxValue, '<br>';
$sumPrime = 0;
for($i = 0; $i<count($arr); $i++){
    $k = 0;
    for($j = 2; $j<floor($arr[$i])/2+1; $j++){
        if($arr[$i]%$j==0)
        $k++;
    }
    if($k==0)
    $sumPrime++;
}
echo'Numarul de elemente prime:', $sumPrime, '<br>';
?>
<h3>Ex 3</h3>
<?php
$arr = array(0, 6, 7, 8, 5);
$k = 0;
$raspuns;
for($i = 0; $i<count($arr); $i++){
    if($arr[$i+1] == $arr[$i]+1)
        $k++;
    else
        $k = 0;
    if($k==2){
    $raspuns = "Trei numere consecutive: {$arr[$i-1]} {$arr[$i]} {$arr[$i+1]} <br>";
    break;
     }
}
    if($raspuns)
        echo $raspuns;
    else
        echo 'In acest array nu sunt 3 numere consecutive';
?>
<h3>Ex 4</h3>
<?php
        function showtable($arr) {
            foreach($arr as $vali){
                echo "<p>";
                foreach($vali as $valj){
                    echo $valj." ";
                }
                echo "</p>";
            }
            $sum = 0;
            for($i = 0; $i < sizeof($arr); $i++)
                $sum += $arr[$i][$i];
            echo "<p>Suma elementelor diagonale: $sum</p>";
        }
        $arr4 = array(
            array(1, 20, 8),
            array(1, 20, 8),
            array(1, 20, 8));
        echo "<p>Tabela bidimensionala initiala: </p>";
        showtable($arr4);
        for($i = 0; $i < sizeof($arr4); $i++){
            for($j = 0; $j < sizeof($arr4[$i]); $j++){
                if($arr4[$i][$i] > $arr4[$i][$j]){
                    [$arr4[$i][$i], $arr4[$i][$j]] = [$arr4[$i][$j], $arr4[$i][$i]];
                }
            }
        }
        showtable($arr4);
?>
</body>
</html>
