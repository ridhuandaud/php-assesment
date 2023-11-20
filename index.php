<?php
require_once 'src/Classes/Circle.php';
require_once 'src/Classes/Recursion.php';

use src\Classes\Circle;
use src\Classes\Recursion;

$circle1 = new Circle(11);
$circle2 = new Circle(4.44);
?>
<h2>PHP</h2>
Question 1 : Make a Circle with OOP<br />
Your task is to create a Circle constructor that creates a circle with a radius provided by an argument. <br />The circles constructed must have two getters getArea() (PI*r^2) and getPerimeter() (2*PI*r) which give both respective areas and perimeter (circumference).<br />
For help with this class, I have provided you with a Rectangle constructor which you can use as a base example.<br /><br />

<?= 'Area = ' . $circle1->getArea() . '<br /> Perimeter = ' . $circle2->getPerimeter(); ?>
<br />
<br />
Question 2 : Recursion: Reverse a String<br />
Write a function that reverses a string. Make your function recursive.<br /><br />

<?= Recursion::reverseString("hello"); ?>
<br />
<?= Recursion::reverseString("world"); ?>
<br />
<?= Recursion::reverseString("a"); ?>
<br />
<?= Recursion::reverseString(""); ?>
<br />
<br />
Question 3: Count the Letters and Digits<br />
Write a function that takes a string and calculates the number of letters and digits within it. Return the result as an array.<br /><br />

<?= var_export(Recursion::countAll("Hello World")); ?>
<br />
<?= var_export(Recursion::countAll("H3ll0 Wor1d")); ?>
<br />
<?= var_export(Recursion::countAll("149990")); ?>
<br />
<br />
Question 3: Count the Letters and Digits<br />
Write a function that takes a string and calculates the number of letters and digits within it. Return the result as an array.<br /><br />

<?= var_export(Recursion::countAll("Hello World")); ?>
<br />
<?= var_export(Recursion::countAll("H3ll0 Wor1d")); ?>
<br />
<?= var_export(Recursion::countAll("149990")); ?>
<br />

<h2>Javascript</h2>
Question 1 : RegEx Exercise 1: Find the Time<br />
The time has a format: hours:minutes. Both hours and minutes have two digits, like 09:00.<br />
Make a regexp to find time in the string: Breakfast at 09:00 in the room 123:456. <br />In this task there’s no need to check time correctness yet, so 25:99 can also be a valid result. The regexp should not match 123:456.<br /><br />

<span id="findTheTime"></span>
<br />
<br />
Question 2 : Error Messages<br />
Create a function that takes a number as an argument and returns the appropriate error message. <br />You should do this without using the switch or if statements.
<br /><br />
<span id="error1"></span>
<br />
<span id="error2"></span>
<br />
<span id="error3"></span>
<br />
<br />
Question 3: Which Generation Are You?<br />
Try finding your ancestors and offspring with code.<br />
Create a function that takes a number x and a character y ("m" for male, "f" for female), and returns the name of an ancestor (m/f) or descendant (m/f).
<br /><br />
<span id="generation1"></span>
<br />
<span id="generation2"></span>
<br />
<span id="generation3"></span>
<script>
    let string = "Breakfast at 09:10 in the room 123:456. test 12:35";
    let pattern = /\b(?:1[0-2]|0?[1-9]|2[0-3]):[0-5][0-9](?![\d:]{3,})(?:\s?[APap][Mm])?\b/g;
    let matches = string.match(pattern);
    if (matches !== null) {
        document.getElementById('findTheTime').innerHTML = `Found ${JSON.stringify(matches)}`;
    }

    let errors = [{
            errorCode: 1,
            errorMessage: 'Check the fan: e1',
        },
        {
            errorCode: 2,
            errorMessage: 'Emergency stop: e2',
        },
        {
            errorCode: 3,
            errorMessage: 'Pump Error: e3',
        },
        {
            errorCode: 4,
            errorMessage: 'c: e4',
        },
        {
            errorCode: 5,
            errorMessage: 'Temperature Sensor Error: e5',
        }
    ];

    function error(errorCode) {
        return errors.find(err => err.errorCode == errorCode)?.errorMessage;
    }

    document.getElementById('error1').innerHTML = error(1);
    document.getElementById('error2').innerHTML = error(2);
    document.getElementById('error3').innerHTML = error(3);

    let generationTable = [{
            generation: -3,
            male: 'great grandfather',
            female: 'great grandmother',
        },
        {
            generation: -2,
            male: 'grandfather',
            female: 'grandmother',
        },
        {
            generation: -1,
            male: 'father',
            female: 'mother',
        },
        {
            generation: 0,
            male: 'me!',
            female: 'me!',
        },
        {
            generation: 1,
            male: 'son',
            female: 'daughter',
        },
        {
            generation: 2,
            male: 'grandson',
            female: 'granddaughter',
        },
        {
            generation: 3,
            male: 'great grandson',
            female: 'great granddaughter',
        },
    ];

    function generation(generationLevel, gender) {
        let genderText = gender == 'm' ? 'male' : 'female';
        return generationTable.find(generation => generation.generation == generationLevel)?.[genderText];
    }

    document.getElementById('generation1').innerHTML = generation(2, 'f');
    document.getElementById('generation2').innerHTML = generation(-3, 'm');
    document.getElementById('generation3').innerHTML = generation(1, 'f');
</script>