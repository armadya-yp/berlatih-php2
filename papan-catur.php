<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Papan Catur</h1>
    <?php 
        
        function papan_catur($angka){
            for($i=0; $i< $angka; $i++){
                for($j=0; $j< $angka; $j++){
                    if($i%2==0){
                        echo "#_";
                    }else{
                        echo "_#";
                    }
                }
                echo "<br>";
            }
        }
        
        echo papan_catur(4) . "<br>"; 
        echo papan_catur(8) . "<br>"; 
        echo papan_catur(5) . "<br>"; 
    ?>
</body>
</html>
