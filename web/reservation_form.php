<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
    session_start();
    $book_num = $_GET["book_num"];
    $userid = $_SESSION['userid'];

    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select check_book from books where num='$book_num'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
 
    $sql = "update books set check_book=1 where num='$book_num'";
    mysqli_query($con, $sql);


    $sql = "select reservation from books where num='$book_num'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $sql = "update books set reservation='$userid' where num='$book_num'";
    mysqli_query($con, $sql);

    mysqli_close($con);                // DB 연결 끊기

    
    echo "
       <script>
        alert('예약이 완료되었습니다.');
        location.href = 'index.php';
       </script>
    ";
    
?>
</body>
</html>
