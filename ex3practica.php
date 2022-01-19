<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucrare3 practica</title>
</head>
<body>
<h3>ex 1</h3>
<?php
 $arr = array(1, 2, 6, 14, 9, 21);
 print_r($arr);

 echo "<p>a) Elementul minim: ".min($arr)."</p>";

 echo "<p>b) Elementul minim: ".min(array(9, 11))."</p>";
 echo "<p> Elementul maxim: ".max(array(9, 11))."</p>";

 $arrsort = array_values($arr);
 sort($arrsort);
 echo "<p>c) Tabelul este sortat crescător: ",($arrsort == $arr) ? 'Adevarat' : 'False'," </p>";

 $suma = 0;
 $nrmeadia = 0;
 for($i = 1; $i < sizeof($arr); $i+=2){
     $suma += $arr[$i];
     $nrmeadia++;
 }
 echo "<p>d) Media aritmetica a elementelor pozitive pe pozitii impare: ".$suma/$nrmeadia." </p>";

 echo "<p>e) Ordonarea crescatoare a tabloului utilizand metoda BubbleSort </p>";
 echo "Lista pina sortare: ";
 print_r($arr);
 $test;
 do{
     $test = false;
     for($i = 0; $i < sizeof($arr)-1; $i++){
         if($arr[$i] > $arr[$i+1]){
             [$arr[$i], $arr[$i+1]] = [$arr[$i+1], $arr[$i]];
             $test = true;
         }
     }
 }while($test != false);
 echo "<br/>Lista dupa sortare: ";
 print_r($arr);

 echo "<p>f) Ordonarea descendenta a tabloului utilizand metoda insertiei</p>";
 echo "Lista pina sortare: ";
 print_r($arr);

 for($i = 1; $i < sizeof($arr); $i++){
     $p = $i;
     while($p > 0 && $arr[$p] > $arr[$p-1]){
         $aux = $arr[$p];
         $arr[$p] = $arr[$p-1];
         $arr[$p-1] = $aux;
         $p--;
     }
 }
 echo "<br/>Lista dupa sortare: ";
 print_r($arr);

 echo "<p>g) Ordonarea ascendent a tabloului utilizand metoda de numarare</p>";
 echo "Lista pina sortare: ";
 print_r($arr);
 
 $b = array();
 for($i = 0; $i < 99; $i++)
     $b[] = 0;
     

 foreach($arr as $val)
     $b[$val]++;

 $arrsort = array();
 for($i = 0; $i < 99; $i++){
     if($b[$i] > 0){
         $arrsort[] = $i;
     }
 }
 echo "<br/>Lista dupa sortare: ";
 print_r($arrsort);

 $value = 2;
 echo "<p>h) Tabloul contine valoarea ",$value,": ",(in_array($value, $arr))?"Da":"Nu"," </p>";

 echo "<p>i) Tabloul poate fi considerat o multime: ",(sizeof($arr) == sizeof(array_unique($arr)))?"Da":"Nu","</p>";

 $value = 9;

 sort($arr);

 function cautarea_binara($value, $arr, $start, $finish){
     if($start > $finish)
         return false;
     else{
         $mid = intval(($start+$finish) / 2);
         if($value == $arr[$mid]){
             return true;
         }else if($value > $arr[$mid]){
             return cautarea_binara($value, $arr, $mid+1, $finish);
         }else if($value < $arr[$mid]){
             return cautarea_binara($value, $arr, $start, $mid-1);
         }
     }
 }
 echo "<p>j)Tabloul contine valoarea ",$value,"(cautarea binara): ",(cautarea_binara($value, $arr, 0, sizeof($arr)-1))?"Da":"Nu","</p>";
?>
<h3>ex 2</h3>
<?php
$x = array(6, 5);
$y = array(3, 9, 6, 2);
echo "<p>X: ";
print_r($x);
echo "</p>";
echo "<p>Y: ";
print_r($y);
echo "</p>";

if(sizeof($x) == sizeof($y)){
    $s = 0;
    for($i = 0; $i < sizeof($x); $i++){
        $s+=($x[$i] * $y[$i]);
    }
    echo "<p>a) S = ",$s,"</p>";
}else{
    echo "<p>a)Tabelele nu au aceeași lungime!</p>";
}

if(sizeof($x) == sizeof(array_unique($x)) && sizeof($y) == sizeof(array_unique($y))){
    echo "<p>b)Intersecția dintre mulțimi: ";
    $intersect = array_intersect($x, $y);
    print_r($intersect);
    if(sizeof($intersect) == 0){
        echo " nu sunt elemente comune";
    }
    echo "</p>";

    
    $reuniune = array_unique(array_merge($x, $y));
    echo "<p>c)Reuniunea dintre mulțimi: ";
    print_r($reuniune);
    echo "</p>";
}else{
    echo "<p>b)Taloul X si/sau Y nu sunt mulțimi!</p>";
    echo "<p>c)Taloul X si/sau Y nu sunt mulțimi!</p>";
}

$intersect = array_intersect($x, $y);
echo "<p>d)Nr elementelor din Y ce apar măcar o dată în X: ",sizeof($intersect),"</p>";

$i = 0;
$aux = false;

foreach($y as $valy){
    if($x[$i] == $valy){
        $i++;
    }else{
        $i = 0;
    }
    if($i == sizeof($x)){
        $aux = true;
        break;
    }
}
echo "<p>e)Tabloul X reprezinta un subsir al lui Y: ",($aux)?"Da":"Nu","</p>";


echo "<p>f)Sortarea tablourilor și aplicand algoritmul de interclasare:</p>";
sort($x);
sort($y);
echo "<p>X sortat:";
print_r($x);
echo "</p>";
echo "<p>Y sortat:";
print_r($y);
echo "</p>";

$i = 0;
$j = 0;
$interclass = array();
while($i < sizeof($x) && $j < sizeof($y)){
    if($x[$i] >= $y[$j]){
        $interclass[] = $y[$j];
        $j++;
    }else{
        $interclass[] = $x[$i];
        $i++;
    }
}
echo "<p>Rezultatul interclasării:";
print_r($interclass);
echo "</p>";
?>
<h3>ex 3</h3>
<?php
$a = array(2, 4, 5, 8);
$b = array(3, 6);
echo "<p> Primul array: ";
print_r($a);
echo "</p>";
echo "<p> Al doilea array: ";
print_r($b);
echo "</p>";
 
for ($i = 0; $i < sizeof($b); $i++){
    if ($i < sizeof($a)) {
        $a[$i] = $b[$i];
    } else {
        $a[] = $b[$i];
    }
}
echo "<p> Array-ul dupa modificare: ";
print_r($a);
echo "</p>";
?>
<h3>ex 4</h3>
<?php
        $note = array(
            "Albot Igor" =>10,
            "Begu Alexandru" =>10,
            "Buga Dumitru" =>8,
            "Bulbas Georgeta" =>9,
            "Bulgari Tudor" =>9,
            "Cazacu Catalin" =>6,
            "Chetraru Eugen" =>5,
            "Ciobanu Dan" =>9,
            "Cioroi Marius" =>4,
            "Cojuhari Alexandru" =>10,
            "Cornievschi Bogdan" =>10,
            "Gaidim Ina" =>7,
            "Gheata Corina" =>9,
            "Goncearu Vlad" =>6,
            "Grosu Dumitrita" =>8,
            "Gubic Stanislav" =>6,           
            "Gurduza Cristina" =>7,
            "Iacob Constantin" =>8,
            "Jardan Daniel" =>8,
            "Josan Victor" =>10,
            "Malairau Andreea" =>7,
            "Marcu Cristian" =>5,
            "Moisa Victor" =>9,
            "Muntean Alexandru" =>5,
            "Palvanov Evelin" =>6,
            "Ribalca Mihail" =>7,
            "Stascu Ana" =>9,   
            "Seremet Mihail" =>6
);
$i = 1;
foreach($note as $k=>$v){
    echo "<p>", $i, ". ".$k.": ",$v,"</p>";
    $i++;
}
echo "<p>Frecventa de aparitie a notelor:</p>";
$cout_note = array_count_values($note);
ksort($cout_note);
foreach($cout_note as $k=>$v){
    echo "<p>Nota ".$k.": ",$v, "</p>";
}
echo "<p>Media aritmetica:" ,array_sum($note)/sizeof($note), "</p>";
?>
<h3>ex 5</h3>
<?php
$n = 15;
$aruncari = array ();
for ($i = 0; $i < $n; $i++) {
    $aruncari[] = rand (1, 3);
}
$cout_rezultat = array_count_values($aruncari);
ksort ($cout_rezultat);
echo "<table><tbody>";
echo "<tr><th><fata></th><th>Aparitii</th></tr>";
foreach ($cout_rezultat as $k => $v) {
echo "<tr><td>", $k, "</td><td>",$v, "</td><tr>";
}
echo "<tbody></table>";
?>
</body>
</html>