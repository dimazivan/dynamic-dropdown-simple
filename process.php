<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dropdownValues = $_POST['dropdown'];

    // Now, $dropdownValues is an array containing the selected values from all the dropdowns.
    print_r($dropdownValues);
}
