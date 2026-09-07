<?php
/*Câu 1*/
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

<?php
/*Câu 2*/
function SoNguyenTo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$so = 17;
if (SoNguyenTo($so)) {
    echo "$so là số nguyên tố";
} else {
    echo "$so không phải là số nguyên tố";
}
?>

<?php
/*Câu 3*/
function HinhChuNhat($chieurong, $chieucao) {
    for ($i = 0; $i < $chieucao; $i++) {
        for ($j = 0; $j < $chieurong; $j++) {
            echo "*";
        }
        echo "<br>"; // dùng "\n" nếu chạy trên terminal (CLI)
    }
}

HinhChuNhat(5, 3);
?>