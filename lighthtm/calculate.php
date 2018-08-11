<?php 
    session_name("Q_AND_A_APPLICATION");
    session_start();
    // session_destroy(); //you have to destroy the session for it to work afresh

    if(empty($_SESSION['selected_answers'])){
    	$_SESSION['selected_answers'] = array();
    }
    
    if(!empty($_POST['option'])){
    	
    	$option = ($_POST['option']);
    	
    	$_SESSION['selected_answers'][] = $option;
    }
 ?> 