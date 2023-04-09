<?php

//test détruire session en quittant la page

session_start();
session_unset();
session_destroy();
?>