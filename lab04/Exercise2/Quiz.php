<?php
$answer1=$_POST['Q1'];
$answer2=$_POST['Q2'];
$answer3=$_POST['Q3'];
$answer4=$_POST['Q4'];
$answer5=$_POST['Q5'];
$count=0;
if($answer1==Madrid){
  $count++;
}
if($answer2==Nine){
  $count++;
}
if($answer3==Anode){
  $count++;
}
if($answer4==Butterfly){
  $count++;
}
if($answer5==Victoria){
  $count++;
}

echo "Question 1: What was the capital of Spain?<br>";
echo "You answered: $answer1"<br>;
echo "Correct answer: Madrid"<br><br>;

echo "Question 2: What is the highest number used in a Sudoku puzzle?<br>";
echo "You answered: $answer2"<br>;
echo "Correct answer: Nine"<br><br>;

echo "Question 3: What is the term for a positive electrode?<br>";
echo "You answered: $answer3"<br>;
echo "Correct answer: Anode"<br><br>;

echo "Question 4: Which swimming stroke is named after an insect?<br>";
echo "You answered: $answer4"<br>;
echo "Correct answer: Butterfly"<br><br>;

echo "Question 5: Which English queen has the same name as a type of plum?<br>";
echo "You answered: $answer5"<br>;
echo "Correct answer: Victoria"<br><br>;
$score=($count/5)*100;
 echo "You answered $count correctly answers "<br>;
 echo "Your Score: $score";

?>
