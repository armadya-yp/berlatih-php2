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
            $skor=[
                    ["Laravel" => ["nama" => "", "kelas" => "", "nilai" => "0"]],
                    ["React Native" => ["nama" => "", "kelas" => "", "nilai" => "0"]],
                    ["React JS" => ["nama" => "", "kelas" => "", "nilai" => "0"]]
            ];
            echo $pa;
            foreach($arr as $a => $a_value){
                echo $a[0];
                foreach($a as $b => $b_value){
                    print_r($b);
                };
                /*if($a_value[1]="Laravel"){
                    $nilaiSkor=(int)($skor[0] );
                    if((int)($a_value) > $nilaiSkor){    
                        $skor[0][0]=$arr["nama"];
                        $skor["Laravel"]["kelas"]=$arr["kelas"];
                        $skor["Laravel"]["nilai"]=$arr["nilai"];
                    }
                } elseif($a[1]="React Native"){
                    if((int)($a_value["nilai"]) > (int)($skor["React Native"]["nilai"])){
                        $skor["React Native"]["nama"]=$arr["nama"];
                        $skor["React Native"]["kelas"]=$arr["kelas"];
                        $skor["React Native"]["nilai"]=$arr["nilai"];
                    }
                } else {
                    if((int)($a_value["nilai"]) > (int)($skor["React JS"]["nilai"])){
                        $skor["React JS"]["nama"]=$arr["nama"];
                        $skor["React JS"]["kelas"]=$arr["kelas"];
                        $skor["React JS"]["nilai"]=$arr["nilai"];
                    }
                };*/
            };
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
            
           // print_r(skor_terbesar($skor));
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