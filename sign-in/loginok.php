<?php
session_start();

echo "세션테스트";

//echo "아이디: ".$_POST["userid"];
//echo "비밀번호: ".$_POST["userpwd"];

include("connect.php");

$uid = $upwd = "";
$uid = $_POST["userid"];
$upwd = $_POST["userpwd"];

$sql = "SELECT * FROM member where userid='" . $uid . "' and userpwd='" . $upwd . "'";

//echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["suserid"] = $row["userid"];
    $_SESSION["susername"] = $row["username"];

    header('location: /sign-in');
    // output data of each row
//    while ($row = $result->fetch_assoc()) {
//        //echo "아이디: " . $row["userid"]. " - 비밀번호: " . $row["userpwd"]. " - 이름: ". $row["username"]. "<br>";
//        //로그인 페이지
    } else {
    //echo "0 results";
    //로그인이 잘못된 페이지
    ?>
        <script>
            alert("로그인 정보가 없습니다.")
            window.location.href = '/sign-in';
        </script>
    <?php
}
$conn->close();

?>
<br>
<a href="./index.html">홈으로</a>
