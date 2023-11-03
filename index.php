<?php
include "./layers/header.php";


if(isset($_GET["page"])){
    include "./layers/" . $_GET["page"] .".php";
}
else{
    include "./layers/home.php";
}



include "./layers/footer.php";