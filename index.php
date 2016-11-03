
<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/funcs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database

$templateParser->assign('title', 'My band');

// Display template: output html
$templateParser->display('head.tpl');

$action= isset($_GET['action'])?$_GET['action']:'about';

switch($action){
    case 'nieuws';
        include('model/select_nieuws.php');
        $templateParser->assign('result', $result);
        $templateParser->display('nieuws.tpl');
        break;  
    case 'geschiedenis';
        // Get newsarticles from database
        include('model/select_posts.php');
        $templateParser->assign('result', $result);
        $templateParser->display('geschiedenis.tpl');
        break;  

    case 'tussenstand';
         include('model/select_posts.php');
        $templateParser->assign('result', $result);
        $templateParser->display('tussenstand.tpl');
        break;
        
    case 'wedstrijden';
        include('model/select_wedstrijden.php');
        $templateParser->assign('result', $result);
        $templateParser->display('wedstrijden.tpl');
        break;
            
    case 'overons';
        
         include('model/select_posts.php');
        $templateParser->assign('result', $result);
        $templateParser->display('over.tpl');
        break;
    case 'contact';
        
         include('model/select_posts.php');
        $templateParser->assign('result', $result);
        $templateParser->display('contact.tpl');
        break;
    default;
        
        include('model/select_nieuws.php');
        $templateParser->assign('result', $result);
        $templateParser->display('nieuws.tpl');
}

    
$templateParser->display('footer.tpl');


