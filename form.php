<?php

if (isset($_POST['submit'])) {
    $x = $_POST["numberMin"];
    $y = $_POST['numberMax'];
    echo rand( $x , $y );
}
