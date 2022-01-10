<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #1</title>
</head>
<body>
    <?php
// PHP Strings and String Functions
// (1) Write a PHP script to :
// a. Convert the entered string to uppercase
   $name = 'my Name is Farah';
   echo (strtoupper($name)."<br>");
   echo (strtolower($name)."<br>");
   echo (ucfirst($name)."<br>");
   echo (ucwords($name)."<br>");
echo"<br>";


// (2) Write a PHP script splitting the following numeric string o be a date format
   $date = "085119";
echo (substr(chunk_split($date,2,":"),0,-1)."<br>");
echo"<br>";


// (3) Write a PHP script to check whether the sentence contains a specific word
$str ="I am a full Stack developer at orange coding academy";
$found = strpos($str, "orange");
if($found){
    echo "Word Found";
}
echo"<br>";
echo"<br>";

// (4) Write a PHP script to extract the file name from the URL.
$url = "www.orange.com/index.php";
$index = strpos($url, "/");
echo substr($url,$index+1);
echo"<br>";
echo"<br>";


// (5) Write a PHP script to extract the username from the following email address.
$email = "info@orange.com";
$index1 = strpos($email, "@");
echo substr(($email),0,$index1);
echo"<br>";
echo"<br>";

// (6) Write a PHP script to get the last three characters from the string.
$email1 = "info@orange.com";
echo substr(($email1),-3);
echo"<br>";
echo"<br>";


// (7) Write a PHP script to generate simple random passwords from a given string.
$str1 = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvxyz";
for ($i=0 ; $i<strlen($str1)-50 ; $i++){
    $y=10;
    echo (substr(($str1),$i,($y+$i))."<br>");
    $y++;
}
echo"<br>";
echo"<br>";


// (8) Write a PHP script to replace the first word of the sentence with another word.
$str2 = "That new trainee is so genius"; 
echo str_replace("That","Our",$str2);
echo"<br>";
echo"<br>";


// (9) Write a PHP script to find the first character that is different between two strings.
$str3 = "dragonball";
$str4 = "dragonboll";
for ($i=0; $i<strlen($str3) ; $i++){
    if(substr($str3,1,$i) == substr($str4,1,$i)){
    }
    else{
        $index = $i;
        $char1 = substr(($str3),$i,1);
        $char2 = substr(($str4),$i,1);
        break;
    };
}
echo "First difference between two strings at position ".$index.":"." $char1"." vs "."$char2";
echo"<br>";
echo"<br>";


// (10) Write a PHP script to put a string in an array, use the (var_dump) to view the array.
$str5 = "Twinkle, twinkle, little star.";
echo var_dump(explode(" ",$str5));
echo"<br>";
echo"<br>";

// (11) Write a PHP Script to print the next letter of inputted letter.
$str6 = "abcdefghijklmnopqrstuvwxyz";
function theNext($input){
    global $str6;
    $position = strpos($str6,$input);
    echo substr(($str6),($position+1),1);
    if($input == "z"){
        echo "a";
    }
}
theNext("z");

echo"<br>";
echo"<br>";


// (12) Write a PHP Script to insert a string at the specified position in a given string.
$str7 = "The brown fox";
echo substr_replace($str7," quick ",3,0);
echo"<br>";
echo"<br>";


// (13) Write a PHP Script to remove the zeroes from the given number.
$str8 = "000065702224";
echo str_replace("0","",$str8);
echo"<br>";
echo"<br>";



// (14) Write a PHP Script to remove part of a string.
$str9 = "The quick brown fox jumps over the lazy dog";
echo str_replace("fox"," ",$str9);
echo"<br>";
echo"<br>";


// (15) Write a PHP Script to remove trailing dashes from a string.
$str10 = "The quick brown fox jumps over the lazy dog---";
echo str_replace("---","",$str10);
echo"<br>";
echo"<br>";


// (16) Write a PHP Script to remove Special characters from the following string.
$str11 ='1+2/3*2:2-3/4*3';
echo str_replace(array( '\'', '"','+' , ':', '*', '/','-' ),' ',$str11);

echo"<br>";
echo"<br>";


// (17) Write a PHP Script to select first 5 words from the following string.
$str12 ="The quick brown fox jumps over the lazy dog";
echo implode(" ", array_slice(explode(" ", $str12), 0, 5));

echo"<br>";
echo"<br>";


// (18) Write a PHP Script to remove comma(s) from the following numeric string.
$str13 = "2,543.12";
echo str_replace(",","",$str13);
echo"<br>";
echo"<br>";



// (19) Write a PHP Script to print letters from 'a' to 'z'.
$str14 = "abcdefghijklmnopqrstuvwxyz";
for($i=0; $i<strlen($str14) ; $i++){
    echo substr(($str14),$i,1)." ";
}


?>
</body>
</html>