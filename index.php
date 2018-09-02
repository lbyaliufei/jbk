<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/jbk/includes/magicquotes.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jbk/includes/access.inc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/jbk/includes/connect.inc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/jbk/includes/main.php';
if (! userIsLoggedIn()) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jbk/includes/login.html.php';
exit();
}
if (userHasRole('teacher')) {
    header("Location:/jbk/admin/index.php");
    exit();
}
if (userHasRole('student')) {
    header("Location:/jbk/student/index.php");
    exit();
}
