<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //PART1
    echo "Hello, This is PHP script!";
    echo '<h1 style="color: blue; text-align: center;">Xin chào TMU</h1>';
    echo "Bài 1: Giới thiệu xampp";
    echo '<br>';

    //PART2
//cau1
    echo 'đếm số kí tự:' ; echo strlen('dem so ki tu');
    echo "<br>";
//cau2
    echo 'đếm số từ:'; echo str_word_count("dem so tu");
    echo "<br>";
//cau3
    echo 'đảo ngược: ';echo strrev("daonguoc");
    echo "<br>";
//cau4
    echo strpos('tim kiem chuoi con', 'tim');
    echo "<br>";
//cau5
    echo str_replace('truong','dai hoc','truong TMU');
    echo "<br>";
//cau6
    function startsWith($string, $substring) {
        $length = strlen($substring);
        return substr($string, 0, $length) === $substring;
    }

    $string = "Hello, world!";
    $substring = "Hello";

    if (startsWith($string, $substring)) {
        echo "Chuỗi \"$string\" bắt đầu bằng \"$substring\"";
    } else {
        echo "Chuỗi \"$string\" không bắt đầu bằng \"$substring\"";
    }
    echo '<br>';
//cau7
    echo strtoupper('truong dai hoc thuong mai');
    echo '<br>';

//cau8
    echo strtolower('TRUONG DAI HOC THUONG MAI');
    echo '<br>';

//cau9
    $string9 = "in hoa chữ cái đầu tiên của mỗi từ";

    echo "Chuyển đổi chữ cái đầu tiên thành chữ hoa: '" .ucwords($string9). "'";
    echo '<br>';

//cau10
    $string10 = "     Bỏ khoảng trắng     ";
    $trimmedString = trim($string10);
    echo "Chuỗi sau khi loại bỏ khoảng trắng: '" .trim($string10). "'";
    echo '<br>';

//cau11
    $string11="loại bỏ kí tự đầu";
        echo "Loại bỏ ký tự đầu : '" .ltrim($string11,"l"). "'<br>";

//cau12
    $string11="loại bỏ kí tự cuối";
    echo "Loại bỏ ký tự cuối : '" .rtrim($string11,"i"). "'<br>";

//cau13
    $string13 = "a b c d x y z";
    $array13 = explode(" ", $string13);
    echo "Tách chuỗi:" ;
    print_r($array13);
    echo '<br>';

//cau14
    $array14 = ["a", "b", "c", "d", "x", "y", "z"];
    $string14 = implode(" ", $array14);
    echo "Chuỗi sau khi nối: '" . $string14 . "'";
    echo "<br>";

//cau15
    $string15 = "TMU";
    $addString = "-K58SN1";
    $StringPadRight = str_pad($string15, strlen($string15) + strlen($addString), $addString, STR_PAD_RIGHT);
    echo "Chuỗi sau khi thêm vào cuối: " . $StringPadRight;
    echo '<br>';

//cau16
    function endsWith($string, $substring) {
        $length = strlen($substring);
        if ($length == 0) {
            return true; 
        }

        return substr($string, -$length) === $substring;
    }

    $string = "hello world";
    $substring = "world";

    if (endsWith($string, $substring)) {
        echo "Chuỗi '$string' kết thúc bằng '$substring'";
    } else {
        echo "Chuỗi '$string' không kết thúc bằng '$substring'";
    }
        echo'<br>';

//cau17
    function containsSubstring($string, $substring) {
        return strstr($string, $substring) !== false;
    }

    // Chuỗi cần kiểm tra
    $string = "Đây là một chuỗi ví dụ";
    $substring = "chuỗi";

    // Kiểm tra và hiển thị kết quả
    if (containsSubstring($string, $substring)) {
        echo "Chuỗi '" . $string . "' có chứa '" . $substring . "'.";
    } else {
        echo "Chuỗi '" . $string . "' không chứa '" . $substring . "'.";
    }
    echo'<br>';

//cau18 
    $string18 = "Hello, World! 123.";
    $replacementChar = "*";
    $resultString = preg_replace('/[^a-zA-Z0-9]/', $replacementChar, $string18);
    echo $resultString;
    echo '<br>';

//cau19
    $string19_1 = "    Thuongmai University      ";
    $string19_2 = "    Thuongmai University      ";
    $strtrimleft = ltrim($string19_1);
    $strtrimright = rtrim($string19_2);
    echo "Chuỗi khi đã xóa khoảng trắng trái :'".$strtrimleft.  "'<br>";
    echo "Chuỗi khi đã xóa khoảng trắng phải: '".$strtrimright. "'";
    echo '<br>';
    
//cau20
    $email = "thuhuong@gmail.com";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("$email là địa chỉ email hơp lệ");
        } else {
            echo("$email không là địa chỉ email hơp lệ");
	}

    ?>

</body>
</html>
