<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 8. Viết function giải phương trình bậc 2.
    function PTbac2($a, $b, $c) {
        if ($a == 0) {
            return "Đây không phải là phương trình bậc hai.";
        }
        $delta = $b * $b - 4 * $a * $c;

        if ($delta < 0) {
            return "Phương trình vô nghiệm.";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép: x = " . $x;
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có hai nghiệm phân biệt: x1 = " . $x1 . ", x2 = " . $x2;
        }
    }

    //vd
    echo PTbac2(1, -3, 2);
echo '<br>';

    //9. Viết function in ra màn hình chữ nhật rỗng có kích thước 5x7 sử dụng dấu sao (dùng vòng lặp).
    function Ve_hcn($a, $b) {
        $i = 0;
        while ($i < $b) {
            $j = 0;
            while ($j < $a) {
                if ($i == 0 or $i == $b - 1  or $j == 0 or $j == $a - 1 ) {
                    echo " * ";
                } else {
                    echo " ";
                }
                $j++;
            }
            echo "<br>"; 
            $i++;
        }
    }
    echo Ve_hcn(5, 7);
echo '<br>';

    //10. Viết function tính trung bình cộng của mảng.
    function TrungBinh($array) {
        if (empty($array)) {
            return "Mảng không có giá trị nào.";
        }
        $sum = array_sum($array);
        $count = count($array);
        $average = $sum / $count;
        return $average;
    }
    //vd
    $array = [2, 4, 6, 8, 10];
    echo "Trung bình cộng của mảng là: " . TrungBinh($array);
    ?>
</body>
</html>