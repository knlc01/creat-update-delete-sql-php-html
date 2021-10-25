<?php
 if (isset($_POST["id"])) {

    require_once("../models/query.php");
    $new = new QueryClass;
    $new->updatePerson($_POST["id"],$_POST["name"],$_POST["lastName"],$_POST["age"]);

} else {
    echo "ERROR inser id";
}