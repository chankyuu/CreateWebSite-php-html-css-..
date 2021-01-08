<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>자료검색</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/book.css">
</head>
<body> 
<header>
  	<?php include "header.php";?>
</header>
<div id=books_check>
    <h2>자료 현황</h2>
</div>
<div id=book>
<?php
  $con = mysqli_connect("localhost", "user1", "12345", "sample");
  $sql = "SELECT * FROM books";
  $result = mysqli_query($con, $sql);
          
  echo '<table id=text-center><thead><tr>'.'<th>번호</th><th>책이름</th><th>저자</th><th>출판사</th><th>발행년도</th>'.'</tr></thead>';
    while ($row = mysqli_fetch_array($result)){
      echo '<tbody><tr><td>'.$row['num'].'</td>'.'<td>'.$row['book_name'].'</td>'.'<td>'.$row['author'].'</td>'.'<td>'.$row['publisher'].'</td>'.'<td>'.$row['year'].'</td></tr></tbody>';
      }
  echo '</table>';
?>
</div>
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>