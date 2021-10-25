<?php

if (isset($_GET["route"])) {
    if ($_GET["route"] == "create" || $_GET["route"] == "delete" || $_GET["route"] == "update"){
        include "views/" . $_GET["route"] . ".php";
    }
}