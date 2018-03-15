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
        <div class="container">
            <h1>String & Array Functions</h1>
            <?php
            $csv = "TXL|Berlin Tegel|Berlin.de";

            // CSV zerlegen/trennen
            $airport = explode('|', $csv); // Trennung bei 'Zeichen' !
            // CSV wieder zusammensetzen
            $string = implode(',', $airport);   // Zusammensetzung mit ',' Trennzeichen

            $newCsv = str_replace('|', ':', $csv);   // benötigt neue Variable !


            $transDE = [':', 'Uhr', 'Bushaltestelle', 'Halle'];
            $transEN = ['.', 'h', 'Bus stop', 'Hall'];

            $de = "13:00 Uhr Bushaltestelle Halle A";
            $deArray = explode(' ', $de);
            $deTime = explode(':', $deArray[0]);    // 13:00

            if ($deTime[0] > 12) {
                
                $deTime[0] -= 12;   // $deTime[0] = $deTime[0]-12;
                $deArray[1] = 'pm';
                
            } elseif (intval($deTime[0]) === 0) {
                $deTime[0] = 12;
                $deArray[1] = 'am';
            } elseif (intval($deTime[0]) === 12) {
                $deArray[1] = 'pm';
            } else {
                $deArray[1] = 'am';
            }
                            
            $deArray[0] = implode('.', $deTime);
            
            $tmpString = implode(' ', $deArray);
           
            $en = str_replace($transDE, $transEN, $tmpString);
            
//            echo $en;
            
            $countries = [];
            array_push($countries, 'Deutschland');
            array_push($countries, 'Italien', 'Frankreich');
            $countries[] = 'Griechenland';
            array_pop($countries);
            sort($countries);
            
            $prices = [2,5,3,11,8,1];
            sort($prices,SORT_STRING);
            
            ?>
        </div>

        <hr>

        <pre><?php
//            var_dump($airport);
//            var_dump($string);
//            var_dump($newCsv);
//            var_dump($en);
        
            var_dump($prices);
            print_r($prices);

            ?></pre>
    </body>
</html>