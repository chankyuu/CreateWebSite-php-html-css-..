<?php
    session_start();
    $book_num = $_GET["book_num"];
    $userid = $_SESSION['userid'];

    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select check_book from books where num='$book_num'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
 
    $sql = "update books set check_book=0 where num='$book_num'";
    mysqli_query($con, $sql);


    $sql = "select reservation from books where num='$book_num'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $sql = "update books set reservation='' where num='$book_num'";
    mysqli_query($con, $sql);

    mysqli_close($con);                // DB 연결 끊기

    
    echo "
       <script>
        alert('반납되었습니다.');
        location.href = 'index.php';
       </script>
    ";
    
?>