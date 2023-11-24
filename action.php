<?php

require_once 'vendor/autoload.php';
require_once 'includes/_functions.php';

if (!isset($_REQUEST['action'])) addErrorAndExit('Aucune action');

include 'includes/_db.php';

// Start user session
session_start();

// Check for CSRF and redirect in case of invalid token or referer
checkCSRF('index.php');

// Prevent XSS fault
checkXSS($_REQUEST);


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];

        // Check if the amount is positive or negative
        if ($amount > 0) {
            $type = 'recepe';
        } else {
            $type = 'amount';
        }

        // Save the transaction in the database or a file,
        // display the transaction information
        echo "Nouvelle $type ajoutée : $name ($amount €) le $date";
    }
?>
