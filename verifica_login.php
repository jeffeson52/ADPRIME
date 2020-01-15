<?php
session_start();
If(!$_SESSION['usuario']){
    header('Location: login.html');
    exit;
}