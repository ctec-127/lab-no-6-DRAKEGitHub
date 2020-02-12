<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 6 - Temp. Converter</title>
</head>
<body>
<?php require 'temperature-form-processor.php'?>
<!-- Form starts here -->
<h1>Temperature Converter</h1>
<h4>CTEC 127 - PHP with SQL 1</h4>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="group">
        <label for="temp">Temperature</label>
        <input type="text" value="<?php if (isset($_POST['originaltemp'])) {
    echo $_POST['originaltemp'];
}
?>" name="originaltemp" size="14" maxlength="7" id="temp">

        <select name="originalunit">
            <option value="--Select--">--Select--</option>
            <option value="celsius" <?php if(isset($originalUnit) && ($originalUnit == 'celsius')) echo 'selected';?>>Celsius</option>
            <option value="fahrenheit" <?php if(isset($originalUnit) && ($originalUnit == 'fahrenheit')) echo 'selected';?>>Fahrenheit</option>
            <option value="kelvin" <?php if(isset($originalUnit) && ($originalUnit == 'kelvin')) echo 'selected';?>>Kelvin</option>
        </select>
    </div>

    <div class="group">
        <label for="convertedtemp">Converted Temperature</label>
        <input type="text" value=" <?php if(isset($convertedTemp)) echo$convertedTemp;?>"
        name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>

        <select name="conversionunit"> 
            <option value="--Select--">--Select--</option>
            <option value="celsius" <?php if(isset($conversionUnit) && ($conversionUnit == 'celsius')) echo 'selected="selected"';?>>Celsius</option>
            <option value="fahrenheit" <?php if(isset($conversionUnit) && ($conversionUnit == 'fahrenheit')) echo 'selected="selected"';?>>Fahrenheit</option>
            <option value="kelvin" <?php if(isset($conversionUnit) && ($conversionUnit == 'kelvin')) echo 'selected="selected"';?>>Kelvin</option>
        </select>
    </div>
    <input type="submit" value="Convert"/>
</form>
</body>
</html>