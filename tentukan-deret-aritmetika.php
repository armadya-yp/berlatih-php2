<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentukan Deret Aritmetika</title>
</head>
<body>
    <h1>Cari Mean</h1>
    <?php 
        
        function tentukan_deret_aritmatika($arr) {
            $p=count($arr);
            $deretAr="False";
            for($i=0; $i<$p-2; $i++){
                if($arr[$i+1]-$arr[$i]==$arr[$i+2]-$arr[$i+1]){
                    $deretAr="True";
                } else {
                    $deretAr="False";
                }
            }
            return $deretAr;
        }
            
        // TEST CASES
            echo "<br> Array ([1, 2, 3, 4, 5, 6]) adalah Deret Aritmetika ? " . tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
            echo "<br> Array ([2, 4, 6, 12, 24]) adalah Deret Aritmetika ? " . tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
            echo "<br> Array ([2, 4, 6, 8]) adalah Deret Aritmetika ? " . tentukan_deret_aritmatika([2, 4, 6, 8]); //true
            echo "<br> Array ([2, 6, 18, 54]) adalah Deret Aritmetika ? " . tentukan_deret_aritmatika([2, 6, 18, 54]);// false
            echo "<br> Array ([1, 2, 3, 4, 7, 9]) adalah Deret Aritmetika ? " . tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
    ?>
</body>
</html>
