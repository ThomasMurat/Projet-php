<?php 
if(isset($_GET['pageId'])) {
    switch($_GET['pageId']) {
        case 0:
            $selectedPage = 0;
        break;
        case 1:
            $selectedPage = 1;
        break;
        case 2:
            $selectedPage = 2;
        break;
        case 3:
            $selectedPage = 3;
        break;
        default:
            $selectedPage = 0;
    }
}else {
    $selectedPage = 0;
}