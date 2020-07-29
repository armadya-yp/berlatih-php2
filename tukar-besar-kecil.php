<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tukar Besar Kecil</title>
</head>
<body>
    <h1>Tukar Besar Kecil</h1>
    <?php 
        
        function tukar_besar_kecil($string){
            $alfabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
            $pa=count($alfabet);
            $kapital=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
            $pk=count($kapital);
            $ps=strlen($string);
            $hasil="";
            for($i=0; $i<$ps; $i++){
                for($j=0; $j<$pa; $j++)
                if($string[$i] == $alfabet[$j]){
                    $string[$i]=$kapital[$j];
                } elseif($string[$i] == $kapital[$j]){
                    $string[$i]=$alfabet[$j];
                }
            }
            return $string;
        }
            
            // TEST CASES
            echo "<br> Tukar Besar kecil ('Hello World') => " . tukar_besar_kecil('Hello World'); // "hELLO wORLD"
            echo "<br> Tukar Besar kecil ('I aM aLAY') => " . tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
            echo "<br> Tukar Besar kecil ('My Name is Bond!!') => " . tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
            echo "<br> Tukar Besar kecil ('IT sHOULD bE me') => " . tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
            echo "<br> Tukar Besar kecil ('001-A-3-5TrdYW') => " . tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
            
    ?>
</body>
</html>
