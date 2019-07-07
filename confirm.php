<?php
    $username = $_POST["names"];
    $userid = $_POST["userid"];
    $userpw = $_POST["userpw"];
    $mail1 = $_POST["mails1"];
    $mail2 = $_POST["mails2"];
    $to = $mail1."@".$mail2;

    $mr = $_POST["mailreceive"];
    if($mr == "예")
        $mrresult = "Y";
    else
        $mrresult = "N";

    $btemp = $_POST["brand"];
    $brands = implode(',',$btemp);

    $p1 = $_POST["phones"];
    $p2 = $_POST["p1"];
    $p3 = $_POST["p2"];
    $pnumber = $p1.$p2.$p3;

    $birth = $_POST["birth"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $sql = "INSERT INTO applytab values ('$username', '$userid', '$userpw', '$to', 
                        '$mrresult', '$brands', '$pnumber', '$birth')";
    $ret = mysqli_query($con, $sql);
    mysqli_close($con);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BOUTIQUE</title>
        <link rel="stylesheet" href="css/confirm.css">
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
                            <li id="actpart"><a href="apply.html">회원가입</a></li>
                            <li><a href="find.html">아이디/비밀번호 찾기</a></li>
                        </ul>
                    </div>
                    <div id="mainmenu">
                        <div id="midheader">
                            <h3><img src="img/loginimg1.PNG"> 회원가입</h3>
                        </div>
                        <div id="midcenter">
                            <div id="desccenter">
                                <div id="firstdesc">
                                    <img src="img/apply2img1.PNG">
                                    <h2>입력하신 이메일로 <span style="color:red">인증메일</span>이 발송되었습니다.</h2><br><br><br>
                                </div>
                                <p id="seconddesc">
                                    회원님께서 <?= $result ?><br>
                                    이메일 인증 과정이 완료되어야만 회원가입이 완료됩니다. 이메일을 확인해주세요.
                                </p>
                                <button id="btntype1">인증 메일 재전송</button>
                            </div>
                            <div id="warn">
                                <p>
                                    -수신하신 인증메일에서 <span style="color:red">[본인 확인]</span> 버튼을 클릭하시면, 회원가입이 완료됩니다.<br>
                                    -인증메일이 수신되지 않았다면, 스팸메일을 확인해주세요.
                                </p>
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