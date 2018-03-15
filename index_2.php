<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - 01 Basics</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>PHP Basics - Wiederholung</h1>
        <div class="container">
            <?php
                $a = 2; // integer
                $b = 'Zeichenkette';    // string
                $c = '3';    // string
                $d = 1.45;    // float
                $e = '1.45';    // string
                $f = "1.45";    // string
                $g = '$d';    // string
                $h = "$d";    // variable $d
                $i = 'Price: ' . $d . ' € ';    // string - bessere Performance
                $j = "Price: $d €";    // string - schwächere Performance
                $k = $f*1;    // float
                $l = $f*2;    // float
                $m = floatval($f);    // float
                $productPrice = 10.5; // integer
                $amount = 5; // integer
                $sum = $productPrice * $amount; // 5 x Product a 10 € = 50 €
                $n = "$amount x Product a $productPrice € = $sum €";
                $o = sprintf("%s x Product a %.2f € = %.2f €", $amount,$productPrice,$sum);
                
                
                // Arrays
                $amounts = [20,50,40];  // oder gleicher Art = array()
                
                $cities = ['Berlin', 'Madrid', 'Rom', 'Barcelona'];
                $cities[5] = 'Oslo';
                
//                $airports = [];
//                $airports['TXL'] = 'Berlin Tegel';
//                $airports['SXF'] = 'Berlin Schönefeld';
                
                // Kurzschreibweise
                $airports =[
                    'TXL' => 'Berlin Tegel',
                    'SXF' => 'Berlin Schönefeld'];
                    $airports['JFK'] = 'New York - JFK';
            ?>
        </div>
        
        <hr>
        
        <pre><?php
                var_dump($a);
                var_dump($b);
                var_dump($c);
                var_dump($d);
                var_dump($e);
                var_dump($f);
                var_dump($g);
                var_dump($h);
                var_dump($i);
                var_dump($j);
                var_dump($k);
                var_dump($l);
                var_dump($m);
                var_dump($sum);
                var_dump($n);
                var_dump($o);

                var_dump($amounts);
                $output = "Der erste Wert im Array: $amounts[0] ";
                // oder > $output = 'Der erste Wert im Array: $amounts[0] ';
                
                var_dump($cities);
                
                echo count($airports);
                
                var_dump($airports);
                
                foreach ($airports as $key => $airport) {
                    printf("%s : %s \n", $key, $airport);
                }
                
            ?></pre>
    </body>
</html>