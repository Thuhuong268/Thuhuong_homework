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

    echo '<br>';
    //PART3
//1.Viết chương trình in ra màn hình số chẵn <21
    for ($a=2; $a<21; $a+=2){
        echo $a. "<br>";
    }
//2.Viết chương trình kiểm tra số nguyên tố
    //Bai 2
    $a = 4;
    $check = 1;
    if($a<=1){
        echo "khong la so nguyen to";
        $check = -1;
    }
    if ($a == 2)
    {
        echo "La so nguyen to";
        $check = -1;
    }
    else
    {
        for ($i=2; $i<$a;$i++)
        {
            if ($a% $i == 0)
            {
                $check = 0;
            }
        }
    }
    if ($check==1){
        echo "la so nguyen to";
    }
    else if($check==0){
        echo "Khong la so nguyen to";
    }

//3.
    echo"<br>";
//4. Viết Function(hàm) để tính trung bình cộng của một mảng số nguyên
    function trungbinhcong($mang){
        if(count($mang)== 0){
            $tong = array_sum($mang);
            $trungbinhcong = $tong / count($mang);
            return $trungbinhcong;
        }
    }
        $a= array(1,2,3,4,5,6,7,8,9,10);
        echo "Trung binh cong cua mang la: ".trungbinhcong($a);
    echo'<br>';
//5. Khởi tạo mảng kết hợp danh sách lớp 1, sau đó dùng hàm random in ra STT kèm tên
    $students = [
        500 => 'Nguyen Van A',
        501 => 'Nguyen Van B',
        3 => 'Nguyen Van C',
        4 => 'Nguyen Van D',
        5 => 'Nguyen Van E'
    ];

    $STT = array_rand($students);
    echo "STT: " . $STT . " Ho và tên: " . $students[$STT];
    echo "<br>";

    //PART 5
   
$dbh = mysqli_connect('localhost', 'root', '', 'melodyj');
// Kết nối tới MySQL server

if (!$dbh)
    die("Unable to connect to MySQL: " . mysqli_connect_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

$sql_stmt = "SELECT * FROM my_contacts";
// Câu lệnh select

$result = mysqli_query($dbh, $sql_stmt);
// Thực thi câu lệnh SQL

if (!$result)
    die("Database access failed: " . mysqli_connect_error());
// Thông báo lỗi nếu thực thi thất bại

$rows = mysqli_num_rows($result);
// Lấy số hàng trả về

if ($rows) {
    while ($row = mysqli_fetch_array($result)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
}

mysqli_close($dbh); // Đóng kết nối CSDL
    
 /*$ID = "";
    $FullNames = 'Zeus';
    $Gender = 'Male';
    $ContactNo = 111;
    $Email = 'zeus@olympus.mt.co';
    $City = 'Agos';
    $Country = 'Greece';

    $sql2 = " INSERT INTO Bang1 ( ID, FullNames, Gender, ContactNo, Email, City, Country )
    VALUES('$ID' , '$FullNames' , '$Gender' , '$ContactNo' , '$Email' , '$City' , '$Country') ";
*/
    ?>

</body>
</html>
