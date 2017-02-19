<?php
  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default
  session_set_cookie_params(3600, '/',false); //FIXME
  //session_set_cookie_params(3600, '/~ABP',false); //FIXME
  session_start();



  $BASE_DIR = '/XAMPP/htdocs/ABP/'; //FIXME
  //$BASE_DIR = '/app/'; //FIXME
  $BASE_URL = 'http://localhost/ABP/'; //FIXME
  //$BASE_URL = 'https://abptest.herokuapp.com/'; //FIXME

  //$conn = new PDO('pgsql:host=ec2-54-228-213-160.eu-west-1.compute.amazonaws.com;port=5432;dbname=dctubk3br1l10f','knlvvpesmrzumh','7dX-iWONADRZqT-N4SohQhUooZ'); //FIXME*/
  $conn = new PDO('mysql:host=localhost;port=3306;dbname=ABP','root');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //$conn->exec('SET SCHEMA \'public\''); //FIXME?


  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
