<?php
namespace Validation;

//Valdiate the length of a string returning an error message 
//title searches can't contain special characters
//must contain numbers or letters only 

//this should take out the characters if entered

function removeSpecialChar($string) {
    $string = str_replace('', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
    

//Moving rating can be no more than 5 spaces
//strlen gets string length and compares it to 
//numbers 1-9
if (strlen($str) > 5)
   $str = substr($str, 0, 5) . '...';

//Genre type can not be more than 10 characters
if (strlen($str) < 10)
   $str = substr($str, 0, 10) . '...';


//Validate run time in min
//only numbers can be entered
function numbericValue($val) {
    if (!is_numeric($value)) {
        throw new \Exception('Not a valid number');
    }
}

?>