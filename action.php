<?php

if (isset($_GET['page'])){

    if ($_GET['page'] == 'home'){
        include "view/home.php";
    }
    elseif ($_GET['page'] == 'login'){
        include "view/login.php";
    }elseif ($_GET['page'] == 'registration'){
        echo "registration text";
    }
}