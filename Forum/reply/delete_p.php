<?php
    session_start();
    include_once("../conn/conn.php");
    $sql="delete  from f_post where id=$_SESSION[d_post_id]";
    $query=mysqli_query($conn,$sql);
    if ($query) {
        echo "<script>alert('删除成功');window.location.href='..Home_page/Home_page.php';</script>";
    }else {
        
       echo "<script>alert('删除失败');window.location.href='..Home_page/Home_page.php;</script>";
    }

?>