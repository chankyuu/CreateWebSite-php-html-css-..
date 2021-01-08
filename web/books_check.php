<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>대출현황</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/book.css">
<script type="text/javascript">
  function reservation_check(book_num)
  {
    alert("책이름 :" + book_num);
    location.href = "reservation_form.php?book_num=book_num";
    return book_num;
  }
</script>
<form>
    <input type = "hidden" name="name" id="name" value="<?= $_GET["$book_name"]?>"/>
</form>
</head>
<body> 
<header>
  	<?php include "header.php";?>
</header>
<div id=books_check>
  <h2>대출 현황</h2>
</div>
<div id=book>
<?php
  $con = mysqli_connect("localhost", "user1", "12345", "sample");
  $sql = "SELECT * FROM books";
  $result = mysqli_query($con, $sql);

  echo '<table id=text-center><thead><tr>'.'<th>번호</th><th>책이름</th><th>저자</th><th>출판사</th><th>발행년도</th><th>대출여부</th>'.'</tr></thead>';
    while ($row = mysqli_fetch_array($result)){
      echo '<tbody><tr><td>'.$row['num'].'</td>'.'<td>'.$row['book_name'].'</td>'.'<td>'.$row['author'].'</td>'.'<td>'.$row['publisher'].'</td>'.'<td>'.$row['year'].'</td>';

      $book_num = $row['num'];
      if($row['check_book'] == 1){
          echo '<td>'.'대출불가'.'</td>'.'</tr>';
      } else{
          echo '<td>'.'<a href="reservation_form.php?book_num='.$book_num.'"><img src="./img/reservation.png")"></a>'.'</td>'.'</tr>';
      }
    }
  echo '</tbody></table>';
?>
</div>
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>