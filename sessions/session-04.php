<?php
session_id('bu7j6jcj3avj4jgmeedqbon4s6');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
