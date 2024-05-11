<?php
    $nilai = 80;
    if($nilai > 90) {
        $predikat = "A+";
    } else if($nilai > 80 && $nilai <= 90) {
        $predikat = "A";
    } else if($nilai > 70 && $nilai <= 80) {
        $predikat = "B+";
    } else if($nilai > 60&& $nilai <= 70) {
        $predikat = "B";
    } else if($nilai > 50 && $nilai <= 60) {
        $predikat = "C+";
    } else if($nilai > 40 && $nilai <= 50) {
        $predikat = "C";
    } else if($nilai > 30 && $nilai <= 40) {
        $predikat = "D";
    } else {
        $predikat = "E";
    }

    echo "Anda memiliki ".$predikat." Dengan nilai ".$nilai."";
?>