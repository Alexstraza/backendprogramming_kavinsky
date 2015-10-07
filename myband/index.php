<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

$action = isset($_GET['action']) ? $_GET['action'] : '';


// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Kavinsky');
// Toon de template: output html
$templateParser->display('head.tpl');
//Call in the header HTML File

$page = isset($_GET['page']) ? $_GET['page'] : '';
$templateParser->assign('currentPage', $page);

$templateParser->display('header.tpl');
//Call in the news articles

switch ($page) {

    case 'news':
        //read the news page numbers.
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

        require 'model/select_newsarticles.php';
        $templateParser->assign('data', $result);
        $templateParser->display('newsarticles.tpl');



        break;

    case 'search':
        //read from the search field data
        $searchString = isset($_POST['searchString']) ? $_POST['searchString'] : "";

        //execute a query to search the database for search(model)
        require 'model/search_articles.php';

        //display the results
        $templateParser->assign('data', $searchResult);
        $templateParser->display('searchresult.tpl');

        break;

    case 'albums':
        //initialize and get the albums page
        $templateParser->display('albums.tpl');
        break;


    case 'tours':
        //get the tours template page
        $templateParser->display('tours.tpl');
        break;


    case 'about':
        $templateParser->display('about.tpl');
        break;

    case 'contact':
        $templateParser->display('contact.tpl');
        include('views/twitter.html');
        break;



}

// Haal de nieuws artikelen op
$templateParser->display('footer.tpl');


