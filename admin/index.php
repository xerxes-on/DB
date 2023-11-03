<?php 

include "layouts/header.php";


if(isset($_GET["page"])){
    include  "./" . $_GET["page"] . ".php";
}
else{

    include "./layouts/home.php";
}


include "layouts/footer.php";


?>