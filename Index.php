<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<?php  
    require_once("conn.php");
    $asf = $db->prepare("SELECT * FROM webb");
    $asf->execute([]);
?>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sayfalar
                </a>
                    <ul class="dropdown-menu">
                        <?php while($fas = $asf->fetch(PDO::FETCH_ASSOC)){ ?>
                            <li>
                                <a class="dropdown-item" href="add-page.php?getId=<?php echo $fas['blog_id'] ?>"><?php echo $fas['blog_title'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3 mt-3">
        <form action="prepare.php" class="" method="post">
            <div class="mt-3">
                <div>
                    <label for="title">Add A Title</label>
                </div>
                <div>
                    <input type="text" class="form-control" name="blog_title" id="title">
                </div>

            </div>
            <div class="mt-3">
                <div>
                    <label for="lblc5">Add A Label</label>
                </div>
                <div>
                    <input type="text" class="form-control" name="blog_label" id="lblc5">
                </div>

            </div>
            <div class="mt-3">
                <div>
                    <label for="slug">Add A Slug</label>
                </div>
                <div>
                    <textarea type="text" class="form-control" name="blog_slug" id="slug"></textarea>
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-success" name="sbmt" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>