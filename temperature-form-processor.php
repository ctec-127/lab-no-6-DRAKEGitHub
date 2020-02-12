
<?php
// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2)
{
    // celsius conversion
    // Celsius to Fahrenheit = T(°C) × 9/5 + 32
    // Celsius to Kelvin = T(°C) + 273.15
    if ($unit1 == 'celsius'){
        if($unit2 == 'fahrenheit'){
            $results = ($temp * 9/5) + 32;
        } elseif($unit2 == 'kelvin') {
            $results = $temp + 273.15;
        } elseif($unit2 == 'celsius'){
            $results = $temp;
        }
    }
    // fahrenheit conversion
    // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
    // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
    if ($unit1 == 'fahrenheit'){
        if($unit2 == 'celsius'){
            $results = ($temp - 32) * 5/9;
        } elseif($unit2 == 'kelvin') {
            $results = ($temp + 459.67) * 5 / 9;
        } elseif($unit2 == 'fahrenheit'){
            $results = $temp;
        }
    }
    // kelvin conversion
    // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
    // Kelvin to Celsius = T(K) - 273.15
    if ($unit1 == 'kelvin'){
        if($unit2 == 'celsius'){
            $results = ($temp - 273.15);
        } elseif($unit2 == 'fahrenheit') {
            $results = ($temp * 5 / 9) - 459.67;
        } elseif($unit2 == 'kelvin'){
            $results = $temp;
        }
    }  
    return round($results, 2);
} // end function

// Logic to check for POST and grab data from $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the original temp and units in variables
    // then call the convertTemp() function
    // Once you have the converted temperature you can place PHP within the converttemp field using PHP
    $originalTemperature = $_POST['originaltemp'];
    $originalUnit = $_POST['originalunit'];
    $conversionUnit = $_POST['conversionunit'];
    $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);

    convertTemp($originalTemperature, $originalUnit, $conversionUnit);
} // end if
?>