<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Default argument values #1
Write a function element that would return HTML code for a generic element.

It would accept up to 3 arguments:

$element - the name of the element (e.g. 'h1')
$innerhtml - optional the HTML within the element (a string). It's default value will be an empty string ''. To keep things simple, let's say that this function will only handle elements with pair tags.
$attributes - optional a string of all HTML attributes (e.g. 'class="foo"'). It's default value will be an empty string ''.
element('p', ''); // <p></p>
element('p', 'some text'); // <p>some text</p>
element('p', 'some text', 'class="foo"'); // <p class="foo">some text</p> -->

<!-- <?php
function element($element, $innerhtml = '', $attributes = '')
 {
    return "<{$element}" . ($attributes ? ' ' . $attributes : '') . ">" . $innerhtml . "</$element>";

}
?>    

<?php echo element('p','Hello world') ?> -->

<!-- -------------------------------------------------------------------- -->

<!-- Default argument values #2
Write a function convert_weight that would take up to two arguments:

$value - the weight, presumably a number
$unit - expected 'kg' or 'lb'. It's default value will be 'kg'
The function will return the weight converted into either kilograms or pounds based on the second argument. The second argument describes the unit for the weight given, so the function should convert into the other one.

The ratio is 1 kg = 2.20462262 lb.

Usage:

convert_weight(1, 'lb'); // 0.45359237 - converted 1 lb to kilograms
convert_weight(1, 'kg'); // 2.20462262 - converted 1 kg to lbs
convert_weight(1);       // 2.20462262 - used default unit kg, converted 1 kg to lbs
 -->

<?php
    function convert_weight($value, $unit = 'kg')
    {
        switch ($unit) {
            default:
            case 'kg':
                return 2.20462262 * $value;
                break;
            case 'lb':
                return $value / 2.20462262;
                break;
        }
    }
?>

<?php
echo convert_weight(10);

?>
</body>
</html>