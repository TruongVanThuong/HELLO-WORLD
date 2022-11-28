<?php

require_once "pdo.php";

function hagn_hoa_select_all() {
    $mysqli = "SELECT * FROM hang_hoa";
    return pdo_query($mysqli);
}

?>