<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>BooKBooK reservation</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/reservation_book.css">
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
	<div id="main_img_bar">
    </div>
   	<div id="reservation_box">
	    <h3 id="reservation_title">
	    		예약내역
		</h3>
	    	 
	    	 	<?php
	    	 		$count = 0;

    				if (isset($_SSESION["userid"])) $userid = $_SESSION["userid"];
    				else $usernum = 0;

	    	 		$con = mysqli_connect("localhost", "user1", "12345", "sample");
  					$sql = "SELECT * FROM books";
  					$result = mysqli_query($con, $sql);

    				while ($row = mysqli_fetch_array($result)){
    					if($row['reservation'] == $userid){
    						$count += 1;
    						$bookNum = $row['num'];
    					?>
    					<ul id="reservation_form">
    					<li>
							<span class="col1">책이름 : </span>
							<span class="col2"><?=$row['book_name']?> </span> 
						</li>		
	    				<li>
	    					<span class="col1">저자 : </span>
	    					<span class="col2"><?=$row['author']?> </span>
	    				</li>	    	
	    				<li>	
	    					<span class="col1">출판사 : </span>
	    					<span class="col2"><?=$row['publisher']?> </span>
	    					</span>
	    				</li>
	    				<li>
			       			<span class="col1">출판 년도 : </span>
			        		<span class="col2"><?=$row['year']?> </span>
			    		</li>
			    		<li>
			    			<button type="button" onclick="location.href='reservation_delete.php?book_num=<?=$bookNum?>'">반납</button>
			    		</li>	
	    	    		</ul>
	    	    		<?php
    					}
    				}
    				if($count == 0){
    					echo "예약내용이 없습니다.";
    				}
    			?>
	    	<ul class="buttons">
				<li><button type="button" onclick="location.href='index.php'">확인</button></li>
			</ul>
	    </form>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
