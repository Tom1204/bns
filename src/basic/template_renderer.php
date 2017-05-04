<?php
require "../router.php";

function url($url, $params = null)
{
    if (!$params) {
        $url .= $params;
    }
    Urls::check($url, $params);
}