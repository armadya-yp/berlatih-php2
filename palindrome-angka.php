<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Palindrome Angka</h1>
    <?php 
        
        function cekpalindrome($tulisan){
            $q = strval($tulisan);
            $p = strlen($q);
            $kata="";
            $stat="";
            for($i=0; $i< $p; $i++){
                $kata=$kata . $q[$p-$i-1];
            }
            $hasil="";
            if ($kata==$tulisan){
                $stat="1" ;
            }else{
                $stat="0" ;
            }
            return $stat;
        }
        
        function palindrome_angka($masuk){
            $tampilkan=0;
            if(cekpalindrome($masuk)==1){
                for($i=$masuk+1; $i<10000; $i++){
                    if(cekpalindrome($i)==1){
                        $tampilkan=$i;
                        break;
                    }    
                }
            }else{
                for($i=$masuk+1; $i<10000; $i++){
                    if(cekpalindrome($i)==1){
                        $tampilkan=$i;
                        break;
                    }    
                }
            }
            return $tampilkan;
        }
       
        echo "Palindrome 8 => " . palindrome_angka(8) . "<br>"; // 9
        echo "Palindrome 10 => " . palindrome_angka(10) . "<br>" ; // 11
        echo "Palindrome 117 => " . palindrome_angka(117) . "<br>"; // 121
        echo "Palindrome 175 => " . palindrome_angka(175) . "<br>"; // 181
        echo "Palindrome 1000 => " . palindrome_angka(1000) . "<br>"; // 1001
    ?>
</body>
</html>
