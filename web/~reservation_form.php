<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>다산정보관 온라인 대출실</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/reservation.css">
<script type="text/javascript" src="./js/reservation.js"></script>
</head>
<body> 
    <header>
        <?php include "header.php";?>
    </header>
    <section>
        <div id="main_img_bar">
            <img src="./img/main_img.jpg">
        </div>
        <div id="main_content">
            <div id="reservation_box">
                <div id="reservation_title">
                    <span>예약하기</span>
                </div>
                <div id="reservation_form">
                <form  name="reservation_form" method="post" action="reservation.php">              
                    <ul>
                    <li>이름 : <input type="text" name="id"></li>
                    <li>학번 : <input type="password" id="pass" name="pass"></li> <!-- pass -->
                    </ul>
                    <div id="reservation_btn">
                        <a href="#"><img src="./img/reservation.png" onclick="check_input()"></a>
                    </div>              
                </form>
                </div> <!-- login_form -->
            </div> <!-- login_box -->
        </div> <!-- main_content -->
    </section> 
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>

