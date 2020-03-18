# lab04-PHP
Exercise 1: Multiplication Table
Create a php program that displays a 100x100 multiplicatation table. The first row and first column should be the 1...100 and the inner parts of the table should be the multiples. Below is an ascii approximation:

   1  2  3  4   5 ... 100
 1 1  2  3  4   5
 2 2  4  6  8  10
 3 3  6  9  12 15
 . 
 .
100
Remember, you'll be creating and populating an HTML table, not just printing text values. This means adding tags.

HTML Forms
PHP combined with HTML, CSS, and JavaScript can make for some very powerful web pages. We will setup some basic HTML front-ends and PHP back-ends.

Contents of the HTML Front-end:

Form tag
defines (as its attributes and values)
Where to send the data
How to send the data (via the get or post method)
surrounds
Input tags (has name attributes that will be the keys in the array PHP receives)
Submit button (triggers submission)
Simple form (HTML front-end):

<html>
    <head>
    </head>
<body>

    <form action="myBackend.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html> 

Simple form (PHP back-end):

<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$email = $_POST["email"];

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";

?>
Exercise 2: Quiz
Required Files:

Quiz.html
Quiz.php
Quiz.html
This HTML file will consist of the following:

At least five question that are multiple choice
Each question must have four possible answers, the answers will be in the form of radio buttons like this picture
Below the question there will be a single submit button labeled “submit quiz”
Quiz.php
This file will grade the quiz.

You must display the following to the user:

All of the questions
Their answers
The correct answer in the form:
     Question 1: What was the capital of Spain?
     You answered: Lisbon
     Correct answer: Madrid
The total they answered correctly
Their score in a percent
if they get all questions write they receive a 100%, if they only get 1 right that’s a 20%, etc

Exercise 3: Web Store
Customer Interaction
Required Files Overview:

customerFrontend.html
The form the user interacts with to make purchase choices, give a user name and password, and choose shipping options
You will get to decide what your store sells, but you need to sell at least three items of different prices
You will need to offer 3 types of shipping (radio buttons are great for this):
Free 7 day
$50.00 over night
$5.00 three day
Reset button
Submit button
HINT: to give javascript the ability to stop submission, use the event onsubmit
style.css
Styles the store file (including the backend!)
formChecker.js
Validates the input from the customer before submitting
Quantities cannot be blank or negative (zero is fine)
User name must be in the form of an email address (name@domain.com)
password field cannot be blank
We do not have a database to check against, the password can by anything
They must pick a shipping option
customerBackend.php
Processes the purchase
Prints a welcome message to the user and displays their password (never do this in production!, this is only practice to get used to transmitting form information)
Prints a receipt
