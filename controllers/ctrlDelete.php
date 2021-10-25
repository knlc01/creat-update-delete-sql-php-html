<?php
 if (isset($_POST["id"])) {

    require_once("../models/query.php");
    $new = new QueryClass;
    $new->deletePerson($_POST["id"]);

} else {
    echo "ERROR inser id";
}