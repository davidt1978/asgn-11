<!DOCTYPE html>
<?php
include("php/my-functions.php");

$fromValue = '';
$fromUnit = '';
$toValue = '';
$toUnit = '';

if($_POST['submit']) {
  $fromValue = (float)$_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convert_length($fromValue, $fromUnit, $toUnit);
}
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Outdated Irish Lengths</title>
  </head>
  
  <body>
    <div id="wrapper">
      <header>
        <h1>Convert Outdated Irish Length Measurements</h1>
      </header>

      <main>
        <form action="" method="post">
          <div class="entry">
            <label for="from">From:</label>&nbsp;
            <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" id="from">&nbsp;
            <select name="fromUnit">
              <option value="grain"<?php if($fromUnit == 'grain') {echo ' selected';} ?>>Grains</option>
              <option value="thumb-length"<?php if($fromUnit == 'thumb-length') {echo ' selected';} ?>>Thumb Lengths</option>
              <option value="palm"<?php if($fromUnit == 'palm') {echo ' selected';} ?>>Palms</option>
              <option value="fist"<?php if($fromUnit == 'fist') {echo ' selected';} ?>>Fists</option>
              <option value="foot"<?php if($fromUnit == 'foot') {echo ' selected';} ?>>Feet</option>
              <option value="step"<?php if($fromUnit == 'step') {echo ' selected';} ?>>Steps</option>
              <option value="double-step"<?php if($fromUnit == 'double-step') {echo ' selected';} ?>>Double Steps</option>
              <option value="rod"<?php if($fromUnit == 'rod') {echo ' selected';} ?>>Rods</option>
            </select>
          </div>

          <div class="entry">
            <label for="to">To:</label>&nbsp;
            <input type="text" name="to_value" value="<?php echo $toValue; ?>" id="to">&nbsp;
            <select name="toUnit">
              <option value="grain"<?php if($toUnit == 'grain') {echo ' selected';} ?>>Grains</option>
              <option value="thumb-length"<?php if($toUnit == 'thumb-length') {echo ' selected';} ?>>Thumb Lengths</option>
              <option value="palm"<?php if($toUnit == 'palm') {echo ' selected';} ?>>Palms</option>
              <option value="fist"<?php if($toUnit == 'fist') {echo ' selected';} ?>>Fists</option>
              <option value="foot"<?php if($toUnit == 'foot') {echo ' selected';} ?>>Feet</option>
              <option value="step"<?php if($toUnit == 'step') {echo ' selected';} ?>>Steps</option>
              <option value="double-step"<?php if($toUnit == 'double-step') {echo ' selected';} ?>>Double Steps</option>
              <option value="rod"<?php if($toUnit == 'rod') {echo ' selected';} ?>>Rods</option>
            </select>
          </div>

          <input type="submit" name="submit" value="Submit">
        </form>      
      </main>

      <footer>
        <?= back_to_index(); ?>
      </footer>
    </div>
  </body>
</html>
