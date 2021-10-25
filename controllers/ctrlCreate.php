<?php
 if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["lastName"]) && isset($_POST["age"])) {

    require_once("../models/query.php");
    $new = new QueryClass;
    $new->insertPersons($_POST["id"],$_POST["name"],$_POST["lastName"],$_POST["age"]);

} else {
    echo "ERROR";
}