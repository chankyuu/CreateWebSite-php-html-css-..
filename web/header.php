<?php
    session_start();
    if (isset($_SSESION["usernum"])) $usernum = $_SESSION["usernum"];
    else $usernum = 0;
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>		
        <div id="top">
            <h3>
                <a href="index.php"><img src="./img/logo.png"></a>
            </h3>
            <ul id="top_menu">  
<script type="text/javascript" src="./js/reservation.js"></script>
<form>
    <input type = "hidden" name="name" id="name" value="<?= $_GET["usernum"]?>"/>
</form>
<?php
    if(!$userid) {
?>                
                <li><a href="member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="logout.php">로그아웃</a> </li>
                <li> | </li>
                <li><a href="member_modify_form.php">정보 수정</a></li>
                <li> | </li>
                <li><a href="reservation_book.php">예약내역</a></li>
<?php
    }
?>
<?php
    if($userlevel==1) {
?>
                <li> | </li>
                <li><a href="admin.php">관리자 모드</a></li>
<?php
    }
?>
            </ul>
        </div>
        <div id="menu_bar">
            <ul>  
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">자료 현황</a></li>
                <li><a href="board_form.php">글쓰기</a></li>
                <li><a href="message_form.php">쪽지 만들기</a></li> 
                <li><a href="#" onclick=reservation_input("<?=$userid?>")>대출 현황</a></li>
                <li><a href="introduction.php">도서관 층별안내</a></li>
                <li><a href="maps.php">오시는길</a></li>
            </ul>
        </div>