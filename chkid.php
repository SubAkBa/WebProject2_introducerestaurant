<?php
    $id = $_POST["userid"];

    header("Content-Type: text/html; charset=utf-8");
    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $sql = "SELECT * from applytab where id = '".$id."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($ret);

    if($row)
        $result = "중복된 아이디입니다.";
    else
        $result = "사용 가능한 아이디입니다.";
    
    mysqli_close($con);

    alert($result);
?>