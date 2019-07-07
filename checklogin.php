<?php
    $userID = $_POST["userID"];
    $userPW = $_POST["userPassword"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $sql = "SELECT * from applytab where id = '".$userID."' and pw = '".$userPW."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($ret);

    if(!$row)
    {
        ?>
        <script>
            alert("아이디 또는 비밀번호가 다릅니다.");
            location.href = "login.html";
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("로그인에 성공하였습니다.");
            location.href = "index.html";
        </script>
        <?php
    }
?>