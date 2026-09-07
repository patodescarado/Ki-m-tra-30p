<?php
$DiemGiuaKy = 8.0;
$DiemCuoiKy = 7.5;

$DiemTrungBinh = ($DiemGiuaKy * 0.3) + ($DiemCuoiKy * 0.7);

echo "Điểm trung bình: " . $DiemTrungBinh . "<br>";

if ($DiemTrungBinh >= 9.0) {
    echo "Xếp hạng: Xuất sắc";
} elseif ($DiemTrungBinh >= 7.0) {
    echo "Xếp hạng: Giỏi";
} elseif ($DiemTrungBinh >= 5.0) {
    echo "Xếp hạng: Khá";
} else {
    echo "Xếp hạng: Trung bình - Yếu";
}
?>
