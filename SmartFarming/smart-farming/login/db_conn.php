<?php

$sname= "localhost";

$unmae= "thepclhb_mycolleg_iot";

$password = "wNxXVesHJ5MadPRvK5au";

$db_name = "thepclhb_mycolleg_iot";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}