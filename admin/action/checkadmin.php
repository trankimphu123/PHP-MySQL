<?php
session_start();
if(!isset($_SESSION['tkam']['admin']))
echo "1";
else echo 0;