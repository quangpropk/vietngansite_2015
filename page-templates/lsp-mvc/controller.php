<?php
if (! is_user_logged_in() )
{
    die(0);
}
//work with model
$name = $_GET['qd_name'];
$year = $_GET['qd_year'];
//call view
require_once('view.php');