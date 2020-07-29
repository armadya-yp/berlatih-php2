<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentukan Deret Geometri</title>
</head>
<body>
    <h1>Tentukan Deret Geometri</h1>
    <?php 
        
        function tentukan_deret_geometri($arr) {
            $p=count($arr);
            $deretGeo="False";
            for($i=0; $i<$p-2; $i++){
                if($arr[$i+1] / $arr[$i]==$arr[$i+2] / $arr[$i+1]){
                    $deretGeo="True";
                } else {
                    $deretGeo="False";
                }
            }
            return $deretGeo;
        }
            
        // TEST CASES
            echo "<br> Array ([1, 3, 9, 27, 81]) adalah Deret geometri ? " . tentukan_deret_geometri([1, 3, 9, 27, 81]);// true
            echo "<br> Array ([2, 4, 8, 16, 32]) adalah Deret geometri ? " . tentukan_deret_geometri([2, 4, 8, 16, 32]);// true
            echo "<br> Array ([2, 4, 6, 8]) adalah Deret geometri ? " . tentukan_deret_geometri([2, 4, 6, 8]); //false
            echo "<br> Array ([2, 6, 18, 54]) adalah Deret geometri ? " . tentukan_deret_geometri([2, 6, 18, 54]);// true
            echo "<br> Array ([1, 2, 3, 4, 7, 9]) adalah Deret geometri ? " . tentukan_deret_geometri([1, 2, 3, 4, 7, 9]);// false
    ?>
</body>
</html>
