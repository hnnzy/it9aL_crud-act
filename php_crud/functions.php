<?php
// functions.php - User-defined functions

// Function 1: Validate a number (must reject negative values)
function validateNumber($value) {
    if ($value < 0) {
        return false;
    }
    return true;
}

// Function 2: Compute total (Price x Quantity)
function computeTotal($price, $qty) {
    return $price * $qty;
}

// Function 3: Redirect to another page
function redirect($url) {
    header("Location: $url");
    exit();
}
?>
