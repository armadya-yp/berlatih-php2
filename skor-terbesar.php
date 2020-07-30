<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skor Terbesar</title>
</head>
<body>
    <h1>Skor Terbesar</h1>
    <?php 
        
        function skor_terbesar($arr){
            $pa=count($arr);
            $ArLa=[];
            $ArRN=[];
            $ArRJ=[];        
            $ArALL=[];
            $nilaiLa=0;
            $nilaiRN=0;
            $nilaiRJ=0;
            foreach($arr as $a ){
                echo "<br> " . $a["nama"] . "--" . $a["kelas"] . "--" . $a["nilai"];
                if($a["kelas"]=="Laravel"){
                    if((int)($a["nilai"]) > $nilaiLa){    
                        $nilaiLa=(int)($a["nilai"]);
                        $ArLa["nama"]=$a["nama"];
                        $ArLa["kelas"]=$a["kelas"];
                        $ArLa["nilai"]=$a["nilai"];
                    };
                } elseif($a["kelas"]=="React Native")
                {
                    echo "<br> RN " . $a["nama"] . "--" . $a["kelas"] . "--" . $a["nilai"];
                    if((int)($a["nilai"]) > $nilaiRN){
                        $nilaiRN=(int)($a["nilai"]);
                        $ArRN["nama"]=$a["nama"];
                        $ArRN["kelas"]=$a["kelas"];
                        $ArRN["nilai"]=$a["nilai"];
                    };
                } elseif($a["kelas"]=="React JS")
                {
                    if((int)($a["nilai"]) > $nilaiRJ){
                        $nilaiRJ=(int)($a["nilai"]);
                        $ArRJ["nama"]=$a["nama"];
                        $ArRJ["kelas"]=$a["kelas"];
                        $ArRJ["nilai"]=$a["nilai"];
                   };
                }
            }
            echo "<br>";
            $ArALL["Laravel"]= $ArLa;
            $ArALL["React Native"]= $ArRN;
            $ArALL["React JS"]= $ArRJ;
            return $ArALL;
        }
            
        // TEST CASES
        $skor = [
            [
                "nama" => "Bobby",
                "kelas" => "Laravel",
                "nilai" => "78"
            ],
            [
                "nama" => "Regi",
                "kelas" => "React Native",
                "nilai" => "86"
            ],
            [
                "nama" => "Aghnat",
                "kelas" => "Laravel",
                "nilai" => "90"
            ],
            [
                "nama" => "Indra",
                "kelas" => "React JS",
                "nilai" => "85"
            ],
            [
                "nama" => "Yoga",
                "kelas" => "React Native",
                "nilai" => "77"
            ]
        ];
            
            print_r(skor_terbesar($skor));
            /* OUTPUT
              Array (
                [Laravel] => Array
                          (
                            [nama] => Aghnat
                            [kelas] => Laravel
                            [nilai] => 90
                          )
                [React Native] => Array
                              (
                                [nama] => Regi
                                [kelas] => React Native
                                [nilai] => 86
                              )
                [React JS] => Array
                            (
                              [nama] => Indra
                              [kelas] => React JS
                              [nilai] => 85
                            )
              )
            */
    ?>
</body>
</html>