<?php

class QueryClass{
    function query(){
        include("setting.php");
        $mysqli = new mysqli($server, $user, $pass, $bd);
    
        $queryPersons = "SELECT * FROM persons";
        echo "<b> <center>Table</center> </b> <br> <br>";

        if ($result = $mysqli->query($queryPersons)) {

            while ($row = $result->fetch_assoc()) {
                $field1name = $row["id"];
                $field2name = $row["name"];
                $field3name = $row["lastName"];
                $field4name = $row["age"];
                
                echo '<b>'.$field1name.' '.$field2name.' '.$field3name.' '.$field4name.'</b><br />';
            }

        /*freeresultset*/
        $result->free();
        }
    }


    function insertPersons($id,$name,$lastName,$age){
        include("setting.php");
        $mysqli = new mysqli($server, $user, $pass, $bd);
        $insert = "insert into `persons`(`id`,`name`,`lastName`,`age`) VALUES ('$id','$name','$lastName','$age');";
        if ($mysqli->query($insert)){
            header("location: ../create");
        }
    }

    function existPerson($id){
        include("setting.php");
        $mysqli = new mysqli($server, $user, $pass, $bd);
        $queryPersons = "SELECT * FROM persons WHERE id='$id'";
        if($mysqli->query($queryPersons)){
            return true;
        }
        else{
            return false;
        }
    }
    function updatePerson($id,$name,$lastName,$age){
        include("setting.php");
        $mysqli = new mysqli($server, $user, $pass, $bd);
        if($this->existPerson($id)){
            if($name!="" && $lastName!="" && $age!=""){
                $update = "UPDATE `persons` SET name='$name' lastname='$lastname' age='$age' WHERE id='$id';";
                if ($mysqli->query($update)){
                    header("location: ../update");
                }
            }
            else{
                if($name != ""){
                    $update = "UPDATE `persons` SET name='$name' WHERE id='$id';";
                    if ($mysqli->query($update)){
                        header("location: ../update");
                    }
                }
                if($lastName != ""){
                    $update = "UPDATE `persons` SET lastname='$lastname' WHERE id='$id';";
                    if ($mysqli->query($update)){
                        header("location: ../update");
                    }
                }
                if($age != ""){
                    $update = "UPDATE `persons` SET age='$age' WHERE id='$id';";
                    if ($mysqli->query($update)){
                        header("location: ../update");
                    }
                }
            }
        }
    }

    function deletePerson($id){
        include("setting.php");
        $mysqli = new mysqli($server, $user, $pass, $bd);
        if($this->existPerson($id)){
            $delete = "DELETE FROM `persons` WHERE id='$id';";
            if ($mysqli->query($delete)){
                header("location: ../delete");
            }            
        }
    }
}

