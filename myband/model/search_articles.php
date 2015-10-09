<?php
/**
 * Created by PhpStorm.
 * User: Abdelkarim
 * Date: 9/30/2015
 * Time: 12:07 PM
 */

$searchString; //user input from the search bar

$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$searchString%'";
$sql = "SELECT * FROM newsarticles WHERE content LIKE '%$searchString%'";

$searchResult = $mysqli->query($sql);
