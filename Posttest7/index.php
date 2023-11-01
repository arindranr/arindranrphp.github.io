<?php

session_start();

if (!isset($_SESSION['admin_name']) && !isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

include('layout/header.php');
include('content/home.php');
include('layout/footer.php');
