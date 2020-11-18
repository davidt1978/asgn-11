<?php

// HTML Page Elements

function back_to_index() {
  echo ('<a href="index.php">Back to asgn09</a>');
}

function head_info() {
  echo ('<meta charset="utf-8">');
  echo ('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
  echo ('<link rel="stylesheet" href="../css/styles.css">');
}

// Define Index

if(!isset($_POST['submit'])) {
 $_POST['submit'] = '';
}

// Constants (Array)

const LENGTH_TO_CENTIMETER = array(
  "grain" => 0.7,
  "thumb-length" => 2.1,
  "palm" => 3.3,
  "fist" => 10.4,
  "foot" => 25,
  "step" => 62.5,
  "double-step" => 1500,
  "rod" => 3000
);

// Length Functions

function convert_to_centimeters($value, $fromUnit) {
  if(array_key_exists($fromUnit, LENGTH_TO_CENTIMETER)) {
    return $value * LENGTH_TO_CENTIMETER[$fromUnit];
  } else {
    return "Unsupported Unit";  
  }
}
  
function convert_from_centimeters($value, $toUnit) {
  if(array_key_exists($toUnit, LENGTH_TO_CENTIMETER)) {
    return $value / LENGTH_TO_CENTIMETER[$toUnit];
  } else {
    return "Unsupported Unit";  
  }
}

function convert_length($value, $fromUnit, $toUnit) {
  $centimeterValue = convert_to_centimeters ($value, $fromUnit);
  $newValue = convert_from_centimeters ($centimeterValue, $toUnit);
  return $newValue;
}

// EOF
