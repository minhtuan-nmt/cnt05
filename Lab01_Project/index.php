
<?php
function tinhTienTaxi($soKm) {
    $tien = 0;

    if ($soKm <= 1) {
        $tien = $soKm * 15000;
    } elseif ($soKm <= 5) {
        $tien = 15000 + ($soKm - 1) * 12000;
    } else {
        $tien = 15000 + 4 * 12000 + ($soKm - 5) * 9000;
    }

    // Giảm 12% nếu đi trên 140 km
    if ($soKm > 140) {
        $tien *= 0.88; // giảm 12%
    }

    return $tien;
}

// Nhập số km từ người dùng (giả lập)
$soKm = 150; // Bạn có thể thay đổi giá trị này để kiểm tra

$tienTaxi = tinhTienTaxi($soKm);
echo "Số km: $soKm km<br>";
echo "Tổng tiền cần trả: " . number_format($tienTaxi, 0, ',', '.') . " đ";
?>
