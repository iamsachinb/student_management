<?php
// Simple Router to handle different routes
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'add':
        include 'add.php';
        break;
    case 'edit':
        include 'edit.php';
        break;
    case 'delete':
        include 'delete.php';
        break;
    case 'list':
    default:
        include 'index.php';
        break;
}
?>