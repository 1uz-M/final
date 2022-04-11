<?php

/**
  * Configuration for database connection
  *
  */

$host       = "proyectofinal";
$username   = "root";
$password   = "root";
$dbname     = "intento2"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
