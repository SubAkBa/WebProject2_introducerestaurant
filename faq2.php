<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BOUTIQUE</title>
        <link rel="stylesheet" href="css/faq.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function(){
                var val = location.href.substr(
                    location.href.lastIndexOf('=') + 1
                );
                var res = {"bnum" : val};

                $.ajax({
                    url:'checkfaq2.php',
                    type: 'POST',
                    data: res,
                    datatype: 'json',
                    success:function(json){
                        var obj = JSON.parse(json);
                        $("#title1").text(obj[0]);
                        $("#date1").text(obj[1]);
                        $("#content1").text(obj[2]);
                    }
                })
            });
        </script>
        <div id="container">
            <div id="headerpart">
                <div id="header">
                    <div id="loginlist">
                        <ul>
                            <li><a href="login.html">로그인</a></li>
                            <li><a href="apply.php">회원가입</a></li>
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
                            <li id="applyfont">고객센터</li>
                            <li id="actpart"><a href="faq.php">FAQ</a></li>
                            <li><a href="login.html">1:1문의</a></li>
                        </ul>
                    </div>
                    <div id="mainmenu">
                        <div id="midheader">
                            <h3><img src="img/loginimg1.PNG"> FAQ</h3>
                        </div>
                        <div id="midcenter">
                            <table cellspacing="0">
                                <colgroup>
                                    <col width="80px">
                                    <col width="40%">
                                    <col width="10%">
                                    <col width="40%">
                                </colgroup>
                                <tr>
                                    <th>제목</th>
                                    <td id="title1"></td>
                                    <th>작성일</th>
                                    <td id="date1"></td>
                                </tr>
                                <tr>
                                    <td id="content1" colspan="4"></td>
                                </tr>
                            </table>
                            <div id="search">
                                <select>
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                </select>
                                <input type="text">
                                <button id="searchbtn">검색</button>
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