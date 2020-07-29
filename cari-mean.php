<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Mean</title>
</head>
<body>
    <h1>Cari Mean</h1>
    <?php 
        
        function cari_mean($arr){
            $p=count($arr);
            $jum=0;
            for($i=0; $i<$p; $i++){
                $jum+=$arr[$i];
            }
            $mean=floor($jum / $p);
            return $mean;
        }
            
            //TEST CASE 
            echo "Mean dari [1, 2, 3, 4, 5] => " . cari_mean([1, 2, 3, 4, 5]) . "<br>"; // 3
            echo "Mean dari [3, 5, 7, 5, 3] => " . cari_mean([3, 5, 7, 5, 3]) . "<br>"; // 5
            echo "Mean dari [6, 5, 4, 7, 3] => " . cari_mean([6, 5, 4, 7, 3]) . "<br>"; // 5
            echo "Mean dari [1, 3, 3] => " . cari_mean([1, 3, 3]) . "<br>"; // 2
            echo "Mean dari [7, 7, 7, 7, 7] => " . cari_mean([7, 7, 7, 7, 7]) . "<br>"; // 7
    ?>
</body>
</html>