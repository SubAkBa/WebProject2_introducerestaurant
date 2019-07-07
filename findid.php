<?php
    $mail = $_POST["mails1"];

    header("Content-Type: text/html; charset=utf-8");
    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $sql = "SELECT * from applytab where mails = '".$mail."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($ret);

    if(!$row)
    {
        ?>
        <script>
            alert("입력하신 정보로 가입된 아이디가 없습니다.");
            location.href = "find.html";
        </script>
        <?php
    }
    mysqli_close($con);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BOUTIQUE</title>
        <link rel="stylesheet" href="css/find.css">
    </head>
    <body>
        <div id="container">
            <div id="headerpart">
                <div id="header">
                    <div id="loginlist">
                        <ul>
                            <li><a href="login.html">로그인</a></li>
                            <li><a href="apply.html">회원가입</a></li>
                            <li><a href="faq.php">고객센터</a></li>
                        </ul>
                    </div>
                    <p id="logo"><a href="index.html">BOUTIQUE</a></p>
                    <div id="menulist">
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="castle boutique.html">CASTLE BOUTIQUE</a></li>
                            <li><a href="bohemian bistro boutique.html">Bohemian Bistro BOUTIQUE</a></li>
                            <li><a href="pub & grill boutique.html">PUB & GRILL BOUTIQUE</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="midpart">
                <div id="midcontent">
                    <div id="sidemenu">
                        <ul>
                            <li id="applyfont">회원가입</li>
                            <li><a href="login.html">로그인</a></li>
                            <li><a href="apply.html">회원가입</a></li>
                            <li id="actpart"><a href="find.html">아이디/비밀번호 찾기</a></li>
                        </ul>
                    </div>
                    <div id="mainmenu">
                        <div id="midheader">
                            <h3><img src="img/loginimg1.PNG"> 아이디/비밀번호 찾기</h3>
                        </div>
                        <div id="midcenter">
                            <div id="finddata">
                                <p style="font-size:19px">아이디</p>
                                <h1><?= $row['id'] ?></h1>
                            </div>
                            <div id="describezone">
                                <h3>고객님의 아이디 찾기가 완료 되었습니다.</h3>
                                <p style="color:rgb(92, 92, 92)">
                                    고객님의 아이디 찾기가 성공적으로 이루어졌습니다.<br>
                                    항상 고객님의 즐겁고 편리한 서비스를 위해 최선의 노력을 다하는 부티끄가 되겠습니다.
                                </p>
                                <p id="texttype1">BOUTIQUE</p>
                                <a id="logbtn3" href="login.html">로그인</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footerpart">
                <p>
                    서울특별시 도봉구 도봉1동 615-11 | 사업자 등록번호 123-45-67891<br>
                    Copyright ⓒ 부티끄 Research Institute. ALL RIGHTS RESERVED
                </p>
            </div>
        </div>
    </body>
</html>