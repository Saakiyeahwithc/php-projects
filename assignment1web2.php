

<?php 

1.compare any three intiger and find the greatest number 
$a=4;
$b=8;
$c=20;

if($a>=$b && $a>=$c){
    echo " a  is greatest number";
 }
 elseif($b>=$a && $b>=$c){
     echo " b  is greatest number";
 }
 elseif($c>=$a && $c>=$b){
     echo " c  is greatest number";
 }

 ----------------------------------------------------------------------------------------------------------------------------


// 2.To convert temperature form celcius to farenhite scale
      
      $celcius=0;
      $farnahite=($celcius * 9/5) + 32;

       echo $farnahite;




// -----------------------------------------------------------------------------------------------------------------------------




// 3.Demonstrate the concept of if,elseif statement with there flowchart and and also provide code example.


// The if-elseif statement is used in programming to execute different blocks of code based on different conditions. 
// The flow typically follows this pattern:

//     Evaluate the condition in the if statement.
//     If the condition is true, execute the code block associated with the if statement.
//     If the condition is false, evaluate the condition in the elseif (or else if) statement.
//     Repeat the process for subsequent elseif statements.
//     If none of the conditions are true, execute the code block associated with the else statement, if it exists.

//     +------------------+
//     | Start            |
//     +------------------+
//             |
//             v
//     +------------------+
//     | Condition 1      |
//     +------------------+
//             |
//      +------v------+
// Yes   | Execute Code |  No
//      | Block 1      |
//      +--------------+
//             |
//             v
//     +------------------+
//     | Condition 2      |
//     +------------------+
//             |
//      +------v------+
// Yes   | Execute Code |  No
//      | Block 2      |
//      +--------------+
//             |
//             v
//     +------------------+
//     | Else             |
//     +------------------+
//             |
//             v
//     +------------------+
//     | Execute Code     |
//     | Block 3 (Else)   |
//     +------------------+
//             |
//             v
//     +------------------+
//     | End              |
//     +------------------+




//     code:
//     $age = 25;

// if ($age < 18){

//     echo "You are a minor.";
// }
// elseif (18 <= $age  || $age < 65){

//     echo "You are an adult.";
// }
// else{

//     echo "You are a senior.";
// }


?>  
