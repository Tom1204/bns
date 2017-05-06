<?php
require_once "../router.php";

function url($url, $params = null)
{
    if (!$params) {
        $url .= $params;
    }
    Urls::check($url);
}