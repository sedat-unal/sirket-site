<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=almhizlituketim', "root", "");
}
catch (PDOException $e)
{
    print $e->getMessage();
    die();
}