window.onload = function(){
    var f = document.login;
    var isID = /^[a-z0-9]{4, 12}$/;

    f.onsubmit = function(){
        if(f.names.value == "")
        {
            alert("이름을 입력 하세요.");
            f.names.focus();
            return false;
        }
        if(f.userid.value == "")
        {
            alert("아이디를 입력 하세요.");
            f.userid.focus();
            return false;
        }
        /*if(!isID.test(f.userid.value))
        {
            alert("ID는 4 ~ 12자의 영문 소문자와 숫자만 사용할 수 있습니다.");
            f.userid.focus();
            return false;
        }*/

        if(f.userpw.value == "")
        {
            alert("비밀번호를 입력 하세요.");
            f.userpw.focus();
            return false;
        }
        if(f.userpw1.value == "")
        {
            alert("비밀번호를 입력 하세요.");
            f.userpw1.focus();
            return false;
        }
        if(f.userpw.value != f.userpw1.value)
        {
            alert("비밀번호가 서로 다릅니다.");
            f.userpw1.value = "";
            f.userpw1.focus();
            return false;
        }
        if(f.mails1.value == "")
        {
            alert("이메일을 입력 하세요.");
            f.mail.focus();
            return false;
        }
        if(f.mails2.options[0].selected)
        {
            alert("이메일주소를 선택 하세요.");
            f.mails.focus();
            return false;
        }
        if(!document.getElementById("br2").checked && !document.getElementById("br3").checked
                && !document.getElementById("br4").checked)
        {
            alert("브랜드를 한개 이상 골라주세요.");
            document.getElementById("br1").focus();
            return false;
        }
        if(!f.chk1.checked)
        {
            alert("이용약관에 동의해 주세요.");
            f.chk1.focus();
            return false;
        }
        if(!f.chk2.checked)
        {
            alert("개인정보취급방침에 동의해 주세요.");
            f.chk2.focus();
            return false;
        }
    }
    
    /*document.getElementById("checkidbtn").onclick = function(){
        var val = document.getElementById("userid").value;
        var res = {"ids" : val};
    
        $.ajax({
            url: 'chkid.php',
            type: 'POST',
            data: res,
            datatype: 'json',
            success:function(json){
                var obj = JSON.parse(json);
                alert(obj[0]);
            }
        })
    }*/
}

function all_chk(){
    var all = document.getElementById("br1");
    if(all.checked)
    {
         document.getElementById("br2").checked = true;
         document.getElementById("br3").checked = true;
         document.getElementById("br4").checked = true;
    }
    else
    {
        document.getElementById("br2").checked = false;
        document.getElementById("br3").checked = false;
        document.getElementById("br4").checked = false;
    }
}