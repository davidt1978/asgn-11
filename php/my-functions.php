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

// Length Functions

if(!isset($_POST['submit'])) {
 $_POST['submit'] = '';
}

function convert_to_centimeters($value, $fromUnit) {
  switch($fromUnit) {
    case 'grain':
      return $value * 0.7;
      break;
    case 'thumb-length':
      return $value * 2.1;
      break;
    case 'palm':
      return $value * 3.3;
      break;
    case 'fist':
      return $value * 10.4;
      break;
    case 'foot':
      return $value * 25;
      break;
    case 'step':
      return $value * 62.5;
      break;
    case 'double-step':
      return $value * 1500;
      break;
    case 'rod':
      return $value * 3000;
      break;
    default:
      return "Unsupported Unit";
  }
}
  
function convert_from_centimeters($value, $toUnit) {
switch($toUnit) {
    case 'grain':
      return $value / 0.7;
      break;
    case 'thumb-length':
      return $value / 2.1;
      break;
    case 'palm':
      return $value / 3.3;
      break;
    case 'fist':
      return $value / 10.4;
      break;
    case 'foot':
      return $value / 25;
      break;
    case 'step':
      return $value / 62.5;
      break;
    case 'double-step':
      return $value / 1500;
      break;
    case 'rod':
      return $value / 3000;
      break;
    default:
      return "Unsupported Unit";
  }
}

function convert_length($value, $fromUnit, $toUnit) {
  $centimeterValue = convert_to_centimeters ($value, $fromUnit);
  $newValue = convert_from_centimeters ($centimeterValue, $toUnit);
  return $newValue;
}

// EOF
