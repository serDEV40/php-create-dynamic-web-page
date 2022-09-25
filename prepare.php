<?php
    require_once("conn.php");

    if(isset($_POST['sbmt'])){
        $add = $db->prepare("INSERT INTO webb SET blog_title=:blog_title, blog_label=:blog_label, blog_slug=:blog_slug");
        $daa = $add->execute([
            'blog_title'=>$_POST['blog_title'],
            'blog_label'=>$_POST['blog_label'],
            'blog_slug'=>$_POST['blog_slug']
        ]);

        if($daa){
            header("Location:Index.php?true");
        }else{
            header("Location:Index.php?false");
        }
    }

?>