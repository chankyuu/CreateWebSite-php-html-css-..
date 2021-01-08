<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>검색결과</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/search_result.css">
<link rel="stylesheet" type="text/css" href="./css/books.css">
</head>
<body>
<header>
     <?php include "header.php";?>
</header>
<?php
  $db = new mysqli("localhost","user1","12345","sample"); 
  $db->set_charset("utf8");

  function mq($sql)
  {
    global $db;
    return $db->query($sql);
  }
?>
<div id="search_area"> 
<?php
  /* 검색 변수 */
  $search_con = $_GET['search'];
?>
  <h1><?php echo 'BooKBooK'?>에서 '<?php echo $search_con; ?>'검색결과</h1>
  <h4 style="margin-top:50px; font-size: 25px;"><a href="./index.php">홈으로</a></h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
              <th width="500">제목</th>
              <th width="120">저자</th>
              <th width="120">출판사</th>
              <th width="100">발행년도</th>
          </tr>
      </thead>
        <?php
          $sql2 = mq("select * from books where book_name like '%$search_con%' order by num desc");
      
          while($sql2 != '' and $board = $sql2->fetch_array()){
          $title=$board["book_name"]; 
            if(strlen($title)>30)
              { 
                $title=str_replace($board["book_name"],mb_substr($board["book_name"],0,30,"utf-8")."...",$board["book_name"]);
              }
            $sql3 = mq("select * from reply where con_num='".$board['num']."'");
            
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['num']; ?></td>
          <td width="500"><?php echo $board['book_name']?></td>
          <td width="120"><?php echo $board['author']?></td>
          <td width="120"><?php echo $board['publisher']?></td>
          <td width="100"><?php echo $board['year']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>

    <div id="search_box2">
      <form action="./search_result.php" method="get">
      <select name="catgo">
        <option value="title">제목</option>
        <option value="name">글쓴이</option>
        <option value="content">발행년도</option>
      </select>
      <input type="text" name="search" size="40" required="required"/> <button>검색</button>
    </form>
  </div>
</div>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>