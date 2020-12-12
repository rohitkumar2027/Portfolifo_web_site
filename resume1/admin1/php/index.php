<?php
session_start(); 

if (!isset($_SESSION['name'])) {
  $_SESSION['msg'] = "You must log in first" ;
  header('location:../login/');
}
?>