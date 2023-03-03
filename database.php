<?php

$hostName = "sql112.epizy.com";
$dbUser = "epiz_33712236";
$dbPassword = "lq1FtXsipm7a";
$dbName = "epiz_33712236_project_db";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>