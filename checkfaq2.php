<?php
    $bnum = $_POST["bnum"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $sql = "SELECT * FROM faq WHERE boardnum = '".$bnum."'";
    $sql1 = "UPDATE faq SET counting = counting + 1 where boardnum = '".$bnum."'";
    mysqli_query($con, $sql1);
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($ret);
    $contents = nl2br($row['content']);

    echo (json_encode(array($row['faqtitle'], $row['writedate'], $contents)));
?>