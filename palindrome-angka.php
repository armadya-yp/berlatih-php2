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
                $kata=$kata . $tulisan[$p-$i-1];
            }
            $hasil="";
            if ($kata==$tulisan){
                $stat="Palindrome" ;
            }else{
                $stat="Bukan Palindrome" ;
            }
            echo "Output: " . $stat . "<br>";
        }
        
        function palindrome_angka()
       
        cekpalindrome(8) ; // 9
        cekpalindrome(10) ; // 11
        cekpalindrome(117); // 121
        cekpalindrome(175); // 181
        cekpalindrome(1000); // 1001

        palindrome_angka(8) ; // 9
        palindrome_angka(10) ; // 11
        palindrome_angka(117); // 121
        palindrome_angka(175); // 181
        palindrome_angka(1000); // 1001
    ?>
</body>
</html>
