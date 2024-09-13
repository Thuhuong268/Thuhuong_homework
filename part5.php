<?php
//Kết nối database
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'cosodulieu1';

$conn = new mysqLi($server, $user, $pass, $database);

if($conn)
{
    mysqLi_query($conn, "SET NAMES 'utf8' ");
    echo 'Đã kết nối thành công';
}
else{
    echo 'Kết nối thất bại';
};

///Tạo database

$sql = " CREATE DATABASE cosodulieu ";
//Thực thi truy vấn
    if( mysqLi_query( $conn , $sql ) ){
        echo "Tạo database thành công";
    }
    else{
        echo "Tạo database thất bại";
    }


echo '<br>';


//Tạo bảng 
    $sql1 = "CREATE TABLE Bang1 ( 
        ID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        FullNames VARCHAR(30) NOT NULL,
        Gender VARCHAR(10) NOT NULL,
        ContactNo INT(10) NOT NULL,
        Email VARCHAR(50) NOT NULL,
        City VARCHAR(30) NOT NULL,
        Country VARCHAR(30) NOT NULL
    )" ;

//Thực thi truy vấn
    if( $conn->query($sql1) ==TRUE ) {
        echo "Tạo bảng thành công";
    }
    else {
        echo "Tạo bảng không thành công";
    }

//Thêm dữ liệu

    $sql2 = "INSERT INTO Bang1 (FullNames, Gender, ContactNo, Email, City, Country) VALUES
    ('Zeus', 'Male', 111, 'zeus@olympus.mt.co', 'Agos', 'Greece'),
    ('Athena', 'Female', 123, 'anthena@olympus.mt.co', 'Athens', 'Greece'),
    ('Jupiter', 'Male', 783, 'jupiter@planet.pt.co', 'Rome', 'Italy'),
    ('Venus', 'Female', 987, 'venu@planet.pt.co', 'Mars', 'Italy')";


    mysqLi_query($conn , $sql1);

//Sử dụng mysqli để hiển thị dữ liệu
    $sql3 = " SELECT * Bang1 ";

    $result = mysqLi_query( $conn , $sql3);
// đếm xem trong bảng có bao nhiêu dòng dlieu mysqli_num_rows($result)
    if (mysqli_num_rows($result) >0 )
    {
        white( $row = mysqli_fetch_array($result) )
        {
            echo $row['ID'] . "|" . $row['FullNames'] . "|" . $row['Gender'] . "|" . $row['ContactNo'] . "|" . $row['Email'] . "|" . $row['City'] . "|" . $row['Country'] ;
            echo '<br>';
        }
    }

//Xóa dlieu
    $sql4 = " DELETE FROM Bang1 WHERE ID='1' ";
    mysqLi_query( $conn, $sql4 );

// POD
$dbh = mysqli_connect('localhost', 'root', '', 'melodyj');
// Kết nối tới MySQL server

if (!$dbh)
    die("Unable to connect to MySQL: " . mysqli_connect_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi
// Thêm dữ liệu
$sql_pod = "INSERT INTO your_table (column1, column2) VALUES (:value1, :value2)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':value1', $value1);
$stmt->bindParam(':value2', $value2);

$value1 = "John Doe";
$value2 = "johndoe@example.com";

$stmt->execute();
echo "Thêm dữ liệu thành công";

//Cập nhật dữ liệu
$sql_pod = "UPDATE your_table SET column1 = :new_value WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':new_value', $new_value);
$stmt->bindParam(':id', $id);

$new_value = "New Value";
$id = 1;

$stmt->execute();
echo "Cập nhật dữ liệu thành công";

// Xóa dữ liệu
$sql_pod = "DELETE FROM your_table WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$id = 1;

$stmt->execute();
echo "Xóa dữ liệu thành công";

// Hiển thị dữ liệu 
$sql_pod = "SELECT * FROM your_table";
$stmt = $conn->prepare($sql);
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>"
}
?>