<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BOUTIQUE</title>
        <link rel="stylesheet" href="css/apply.css">
        <script type="text/javascript">
            function Chkid(){
                var val = document.getElementById("userid").value;
                var res = {"ids" : val};

                $.ajax({
                    url: 'chkid.php',
                    type: 'POST',
                    data: res,
                    datatype: 'json',
                    success:function(json){
                        var obj = JSON.parse(json);
                        alert(obj);
                    }
                })
            }
        </script>
    </head>
    <body>
        <div id="container">
            <div id="headerpart">
                <div id="header">
                    <div id="loginlist">
                        <ul>
                            <li><a href="login.html">로그인</a></li>
                            <li><a href="apply.html">회원가입</a></li>
                            <li><a href="faq.html">고객센터</a></li>
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
                    <div id="midform">
                        <form action="" method="post" name="login" id="formtable">
                            <table cellspacing="0">
                                <tr>
                                    <th align="left"><span class="startype">*</span>이름</th>
                                    <td colspan="4"><input name="names" type="text" autofocus autocomplete="off"></td>
                                </tr>
                                <tr>
                                    <th align="left"><span class="startype">*</span>아이디</th>
                                    <td><input name="userid" id="userid" type="text" autocomplete="off"></td>
                                    <td><button id="checkidbtn" onclick="Chkid();">중복확인</button><span style="font-size:8px">  4 ~ 12자 이하의 영문 또는 숫자로 설정하세요.</span></td>
                                </tr>
                                <tr>
                                    <th align="left"><span class="startype">*</span>비밀번호</th>
                                    <td><input name="userpw" type="password"></td>
                                    <td colspan="2">입력하신 비밀번호를 다시 한번 입력하세요.</td>
                                </tr>
                                <tr>
                                    <th align="left"><span class="startype">*</span>비밀번호 확인</th>
                                    <td><input name="userpw1" type="password"></td>
                                    <td colspan="2">비밀번호는 영문 대소문자를 구분하며 4 ~ 16자 이하로 설정하세요.</td>
                                </tr>
                                <tr>
                                    <th align="left"><span class="startype">*</span>이메일 주소</th>
                                    <td colspan="3">
                                        <input type="text" autocomplete="off">@
                                        <select name="mails" id="mailselect">
                                            <option value="0">선택하세요.</option>
                                            <option value="naver.com">naver.com</option>
                                            <option value="gmail.com">gmail.com</option>
                                            <option value="daum.net">daum.net</option>
                                        </select>
                                        <span class="startype">*</span>이메일 수신 여부
                                        <label><input type="radio" name="mailreceive">예</label>
                                        <label><input type="radio" name="mailreceive">아니오</label>
                                        <br>
                                        *입력하신 이메일로 인증메일이 발송됩니다. 
                                        <span class="startype">인증메일 수신 후 회원가입이 완료</span>
                                        되므로 정확하게 입력해주세요.
                                        <br>
                                        *이메일 수신 동의시, 부티끄에서 보내드리는 
                                        정기적인 쿠폰 안내를 받으실 수 있습니다.
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left"><span class="startype">*</span>선호브랜드</th>
                                    <td colspan="4">
                                        <label><input type="checkbox">전체</label>
                                        <label><input type="checkbox">캐슬부티끄</label>
                                        <label><input type="checkbox">보헤미안비스트로부티끄</label>
                                        <label><input type="checkbox">펍앤그릴부티끄</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left">연락처</th>
                                    <td colspan="4">
                                        <select name="phones" id="phoneselect">
                                            <option value="">선택하세요.</option>
                                            <option value="010">010</option>
                                            <option value="011">011</option>
                                            <option value="016">016</option>
                                            <option value="017">017</option>
                                            <option value="018">018</option>
                                            <option value="019">019</option>
                                        </select>
                                        - <input type="text" class="phonetype" autocomplete="off"> - <input type="text" autocomplete="off">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left">생년월일</th>
                                    <td colspan="4">
                                        <label><input type="radio" name="birth">양력</label>
                                        <label><input type="radio" name="birth">음력</label>
                                        <input type="date">
                                        입력하신 생일 일주일 전 생일쿠폰이 발행됩니다.
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left"><span class="startype">*</span>이용약관</th>
                                    <td colspan="4">
                                        <label><input type="checkbox">네. 이용약관에 동의합니다.</label>
                                        <a href="access terms.html" target="_blank">[이용약관 보기]</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left"><span class="startype">*</span>개인정보취급방침</th>
                                    <td colspan="4">
                                        <label><input type="checkbox">네, 개인정보취급방침에 동의합니다.</label>
                                        <a href="privacy.html" target="_blank">[개인정보취급방침 보기]</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right" colspan="5" id="lastrow">
                                        <input type="submit" value="확인" id="applybtn1"><input type="reset" value="취소" id="applybtn2">
                                    </td>
                                </tr>
                            </table>
                        </form>
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