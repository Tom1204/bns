<?php
/**
 * Created by PhpStorm.
 * User: Sherzodbek
 * Date: 07-May-17
 * Time: 20:07
 */

    require_once "../Controllers/Buy.php";

    if(isset($_GET["id"])){
        Buy::render($_GET["id"]);
    }

?>