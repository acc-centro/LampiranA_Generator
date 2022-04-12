<?php
//require LampA.php
//codes need to be alter (Backend) 

echo '<pre>';
print_r($_POST);
echo '<br>';

// $_POST['full_name'] (max 60 chars = 3 lines = 20 chars each line)
$string = $_POST['full_name'];

// wrap words, max langth 20char
// if more than 20 char, expecting multi lines separated by "\n"
$full_name = wordwrap($string, 20, "\n");
echo $full_name;
echo '<br>';
echo '<br>';

// turn multi-line into arrays
$lines = explode("\n", $full_name);
print_r($lines);
echo '<br>';

// loop every line
foreach ($lines as $line) {
    $letter = str_split($line); // break each line into characters
    print_r($letter);

    for ($index=0; $index<sizeof($letter); $index++) {
        echo '['.$letter[$index].']';
    }
    echo '<br>';
    echo '<br>';
}

echo '</pre>';
?>