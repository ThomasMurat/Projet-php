<?php include 'source.php'; 
$source = new SimpleXMLElement($sourceXml);
if(isset($_GET['pageId'])) {
    switch($_GET['pageId']) {
        case 2:
            $selectedPage = 1;
            $title = $source->page[1]->title;
        break;
        case 3:
            $selectedPage = 2;
            $title = $source->page[2]->title;
        break;
        case 4:
            $selectedPage = 3;
            $title = $source->page[3]->title;
        break;
        default:
            $selectedPage = 0;
            $title = $source->page[0]->title;
    }
}else {
    $selectedPage = 0;
    $title = $source->page[0]->title;
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body class="container-fluid bg-muted">
    <header class="row">
        <nav class="navbar navbar-expand-lg float-left bg-secondary col-12 justify-content-center" id="mainMenu">
            <h1 id="menuTitle"><a href="#" data-toggle="collapse" data-target="#mainMenuContent" class="navbar-toggler float-left text-white text-center w-100">Menu</a></h1>
            <div class="collapse navbar-collapse row w-100" id="mainMenuContent">
                <div class="col-12">
                    <ul id="mainMenuList" class="navbar-nav row"><?php
                        foreach ($source as  $page) { ?>
                            <li class="nav-item col-lg-3 d-flex"><a class="text-white h4 text-center w-100" href="<?= $page['id'] ?>.html"><?= $page->menu ?></a></li><?php
                        } ?>
                    </ul>
                </div>
            </div> 
        </nav>
    </header>
    <div class="row" id="band"></div>
    <div class="row" id="content">
        <?= $source->page[$selectedPage]->content ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

