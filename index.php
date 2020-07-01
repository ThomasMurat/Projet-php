<?php include 'source.php'; 
include 'indexController.php'; 
$source = new SimpleXMLElement($content);?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet-PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body class="contenair-fluid">
<header class="row w-100">
    <nav class="navbar navbar-expand-lg float-left col-12 justify-content-center" id="mainMenu">
        <h1 id="menuTitle"><a href="#" data-toggle="collapse" data-target="#mainMenuContent" class="navbar-toggler row float-left text-white text-center w-100">Menu</a></h1>
        <div class="collapse navbar-collapse" id="mainMenuContent">
            <ul id="mainMenuList" class="navbar-nav row"><?php
                foreach ($source as  $page) { ?>
                    <li class="nav-item col-lg-3 d-flex"><a class="text-black text-center w-100" href="index.php?pageId=<?= $page['id'] - 1 ?>"><?= $page->menu ?></a></li><?php
                } ?>
            </ul>
        </div> 
    </nav>
</header>
    <div id=content>
            <?= $source->page[$selectedPage]->content ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

