<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual 1</title>
</head>
<body>
    <h2>Individual 1 </h2>
    <br>
    <h4>DATA LIVRĂRII</h4>
        
    <?php
        $today  = date("Y-m-d");

        $livday = $today;
        $time   =  date("h") + 1;

        if(date("a") == "pm")
            $time += 12;
        
        $sarbatori = array(
            "12-25",
            "01-01",
            "01-07",
            "03-08",
            "05-09",
            "06-01",
            "08-27",
            "08-31"
            
        );

        // 1 - weekend si 0 - zi de lucru
        function isWeekend($date) {
            $weekDay = date('w', strtotime($date));
            return ($weekDay == 0 || $weekDay == 6);
        }

        //verificarea dupa ora
        if($time > 12)
            $livday = date('Y-m-d', strtotime($livday. ' + 1 days'));

        //verificarea dupa zile lucratoare si sarbatori
        $test  = false;
        while(!$test){
            $test = true;
            while(isweekend($livday)){
                $livday = date('Y-m-d', strtotime($livday. ' + 1 days'));
                $test  = false;
            }
            if(in_array(substr($today,5), $sarbatori)){
                $livday = date('Y-m-d', strtotime($livday. ' + 1 days'));
                $test  = false;
            }
        }

        echo "<p>Data de azi: ",$today,"</p>";
        echo "<p>Ora: ".$time."</p>";
        echo "<p>Data livrării: ".$livday."</p>";
    ?>
    </div>
    <br>
    <h4>LA MULTI ANI</h4>
        
    <?php
        //zi de nastere si zi curenta
        $birthday = date("Y-m-d",strtotime("June 01 2022"));
        $today = date("Y-n-j");  

        //aflarea diferentei în zile
        $diff = strtotime($birthday) - strtotime($today);

        //transferarea în zile
        $days = floor($diff / (60*60*24));
        if($days < 0){
            $days += 365;
        }

        echo "<p>Ziua mea de naștere: $birthday</p>\n";
        echo "<p>Data de azi: $today</p>\n";
        if($days == 0){
            echo "<p>La mulți ani!!!</p>\n";
        }else{
            echo "<p>Zile ramase pină la ziua mea de naștere: $days zile</p>\n";
        }
    ?>
    </div>
    <br>
    <h4>SALUTUL</h4>

    <?php
 
        $time  =  date('H:i', strtotime('+8 hour'));
        $hour  =  intval(date('H', strtotime('+8 hour')));

        echo"<p>Ora curenta: $time</p>\n";
        if($hour < 7){
            echo"<p>Mesaj: De ce nu dormi, mâine ai Programarea Web</p>";
        }else if($hour >= 22){
            echo"<p>Mesaj: Noapte buna</p>";
        }else if($hour >= 18){
            echo"<p>Mesaj: Buna seara</p>";
        }else if($hour >= 11){
            echo"<p>Mesaj: Buna ziua</p>";
        }else{
            echo"<p>Mesaj: Buna dimineața</p>";
        }
    ?>
    </div>
</body>
</html>