
<?php
// $string = 'Hello';
// for($i=0;$i<strlen($string);$i++)
//     printf("The %dth character is %s\n",$i, $string[$i]); 



//regular expressions(reg_Ex)

//preg_match_all()
// $str = "here we are reading";
// $patern = "/re/i";
// echo preg_match_all($pattern, $str);

//preg_replace()
// $str = "visit course page via url for daily update";
// $pattern = "/url/i";
// echo preg_replace($pattern, "neupaneprakash.github.io/web.html", $str);

//preg_match()
// $name_pattern = '/[A-Za-z ]+$/';
// $name = 'Prashant Shakya';

// if (preg_match($name_pattern, $name)) {
//     echo 'Valid name';
// } else {
//     echo 'Invalid name';
// }


//cleaninagStrings
//1.Removing Whitespace

// $title = "Good Afternoon Class!";
// $str1 = ltrim($title);
// $str2 = rtrim($title);
// $str3 = trim($title);
// echo "\n $str1,\n $str2,\n $str3\n";


//2.Changing Case

// $string1 = "CCT web\n";
// $string2 = "Bit fifth\n";
// print(strtolower($string1));
// print(strtoupper($string1));
// print(ucfirst($string2));
// print(ucwords($string2));

//validating email

// $email_pattern = '/^[A-Za-z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
// $email = 'prashantshakya404@gmail.com';
// if (preg_match($email_pattern, $email)) {
//     echo 'valid Email';
// } else {
//    echo 'Invalid Email';
// }


// $matrix = array(
//     array(1, 2, 3),
//     array(4, 5, 6),
//     array(7, 8, 9)
// );
// $extractedValues = array();
// foreach ($matrix as $row) {
//     foreach ($row as $value) {
//         $extractedValues[] = $value;
//     }
// }
// echo $extractedValues[5];
