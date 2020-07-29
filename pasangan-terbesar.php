<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasangan Terbesar</title>
</head>
<body>
    <h1>Pasangan Terbesar</h1>
    <?php 
        
        function pasangan_terbesar($angka){
            $besar=0;
            $masuk=strval($angka);
            $p=strlen($masuk);
            for($i=0; $i< $p-1; $i++){
                $a=substr($masuk, $i, 2);
                /*$b=substr($masuk, $i+1, 2);*/
                if(intval($a)>$besar){
                    $besar=$a;
                }
            }
            return $besar;
        }
        
        // TEST CASES
        echo "Pasangan Terbesar dari 641573     => " . pasangan_terbesar(641573) . "<br>"; // 73
        echo "Pasangan Terbesar dari 12783456   => " . pasangan_terbesar(12783456) . "<br>"; // 83
        echo "Pasangan Terbesar dari 910233     => " . pasangan_terbesar(910233) . "<br>"; // 91
        echo "Pasangan Terbesar dari 71856421   => " . pasangan_terbesar(71856421) . "<br>"; // 85
        echo "Pasangan Terbesar dari 79918293   => " . pasangan_terbesar(79918293) . "<br>"; // 99
    ?>
</body>
</html>
