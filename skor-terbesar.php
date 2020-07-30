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
            $tampung=[
                    ["Laravel" => ["nama" => "", "kelas" => "", "nilai" => "0"]],
                    ["React Native" => ["nama" => "", "kelas" => "", "nilai" => "0"]],
                    ["React JS" => ["nama" => "", "kelas" => "", "nilai" => "0"]]
                    ]; 
            $ArLa=[];
            $ArRN=[];
            $ArRJ=[];        
            $ArALL=[];
            $nilaiLa=0;
            $nilaiRN=0;
            $nilaiRJ=0;
            foreach($arr as $a => $a_value){
                if($a_value["kelas"]="Laravel")
                {
                    if((int)($a_value["nilai"]) > $nilaiLa){    
                        $nilaiLa=(int)($a_value["nilai"]);
                        $ArLa["nama"] =$a_value["nama"];
                        $ArLa["kelas"]=$a_value["kelas"];
                        $ArLa["nilai"]=$a_value["nilai"];
                    };
                    echo "<br>LAV " . $a_value["kelas"];
                } elseif($a_value["kelas"]="React Native")
                {
                    if((int)($a_value["nilai"]) > $nilaiRN){
                        $nilaiRN=(int)($a_value["nilai"]);
                        $ArRN["nama"] =$a_value["nama"];
                        $ArRN["kelas"]=$a_value["kelas"];
                        $ArRN["nilai"]=$a_value["nilai"];
                    };
                    echo "<br>ReN " . $a_value["kelas"];
                } elseif($a_value["kelas"]="React JS")
                {
                    if((int)($a_value["nilai"]) > $nilaiRJ){
                        $nilaiRJ=(int)($a_value["nilai"]);
                        $ArRJ["nama"] =$a_value["nama"];
                        $ArRJ["kelas"]=$a_value["kelas"];
                        $ArRJ["nilai"]=$a_value["nilai"];
                    };
                    echo "<br>RJ  " . $a_value["kelas"];
                };
            };
            $ArALL=$ArALL+$ArLa+$ArRN+$ArRJ;
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