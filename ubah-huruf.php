<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Huruf</title>
</head>
<body>
    <h1>Ubah Huruf</h1>
    <?php 
        
        function ubah_huruf($masuk){
            $alfabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
            $pa=count($alfabet);
            $ps=strlen($masuk);
            $hasil="";
            for($i=0; $i<$ps; $i++){
                for($j=0; $j<$pa; $j++){
                    if($masuk[$i]==$alfabet[$j]){
                        $hasil[$i]=$alfabet[$j+1];
                    }
                }
            }
            return $hasil;
        }
            
            // TEST CASES
            echo "<br> Ubah huruf kata 'wow' => " . ubah_huruf("wow"); // xpx
            echo "<br> Ubah huruf kata 'developer' => " . ubah_huruf("developer"); // efwfmpqfs
            echo "<br> Ubah huruf kata 'laravel' => " . ubah_huruf("laravel"); // mbsbwfm
            echo "<br> Ubah huruf kata 'keren' => " . ubah_huruf("keren"); // lfsfo
            echo "<br> Ubah huruf kata 'semangat' => " . ubah_huruf("semangat"); // tfnbohbu
    ?>
</body>
</html>
