<?php

function dd()
{
    echo "<pre>";
    $args = func_get_args();
    var_dump($args);
    die;
}


const BASE_URL = "http://localhost:8080/duan1/";


const SITE_URL = BASE_URL . "site/index.php";
const ADMIN_BASE = BASE_URL . 'admin/';
const AUTH_BASE = BASE_URL . 'auth/index.php';

const UPLOAD_BASE= BASE_URL. "upload/";


