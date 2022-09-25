<?php 
    require_once('conn.php');
    
    $qs = $_GET['getId'];
    $qPx = $db->query("SELECT * FROM webb WHERE blog_id = $qs");
    $dsa = $qPx->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <span><?php echo $dsa['blog_slug']; ?></span>
</body>
</html>