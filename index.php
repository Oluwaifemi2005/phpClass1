<?php
echo "Hello PHP.";
echo"<br>";
echo "<h4>You have to terminate using ;</h4>";
print_r(["Dan", "John", "Kate"]);


//variables
$the_name_of_the_data = "value of the data";  //snake case
$theNameOfTheData = "Value of the data"; //camel case

$name = "Daniel";
$name2 = "John";
echo "My name is $name";
echo "<br>";
echo "My name is $name, $name is an instructor in SQI, $name2 is fair";
echo "<br>";


//CLASS or Object naming starts with capital
$MyClass = "Value of the data";  // pascal case || oop || classes

//array, object, integer, boolean, string
echo "I like learning" . "said by $name";
echo "<br>";
echo strlen($the_name_of_the_data); //Returns the length of a string
echo "<br>";
echo strtoupper($the_name_of_the_data); //Converts text to uppercase
echo "<br>";
echo strtolower($the_name_of_the_data); // Converts text to lowercase
echo "<br>";




//Assignment
echo str_word_count($the_name_of_the_data); // Counts the words in a string
echo "<br>";
echo ucfirst($the_name_of_the_data); // Capitalizes the first character
echo "<br>";
echo ucwords($the_name_of_the_data); // Capitalizes the first character of each word
echo "<br>";
echo strrev($the_name_of_the_data); // Reverses a string
echo "<br>";
// echo strpos($theNameOfTheData); //Finds the position of a substring
echo str_replace("World", "PHP", "Hello World"); // Replaces occurrences of text
echo "<br>";
echo substr($the_name_of_the_data, 0,5); // Extracts part of a string
echo "<br>";
echo trim($the_name_of_the_data); // Removes whitespace from the beginning and end
echo "<br>";
echo strcmp("Value", "Values"); // Compares two strings
echo "<br>";
echo str_repeat("PHP", 3); // Repeats a string
echo "<br>";
echo str_shuffle($the_name_of_the_data);
echo "<br>";
echo str_pad("PHP", 8, "*");


//integer
$my_age = 20;

//float
$my_height = 5.9;

//boolean
$is_student = false;

//object
$my_object = new stdClass();

//array
$my_array = ["Dan", "John", "Smith"];


if ($is_student) {
    echo "<br>";
    echo "I am a student";

}else {
    echo "<br>";
    echo "I am not a student";
}

echo $is_student ? "I am a student" : "I am not a student";

//functions
function displayName(){
    global $name;
    echo "<br>";
    echo "My name is Daniel";
    echo "<br>";
    echo "my name is $name";
}

displayName();

function displayNameWithParam($nn){
    echo "<br>";
    echo "My name is $nn";

}
displayNameWithParam("Danicode");


// function sumNumbers(){
//     echo "<br>";
//     echo a + b;
// }

// sumNumbers();


function passwordValidate($password){
    if (strlen($password) < 8) {
        echo "<br>";
        echo "Password is too short";
    } else {
        echo "<br>";
        echo "Password is valid";
    }
    
}

passwordValidate("Daniel");


function validatePassword($password){
    if (strlen($password) < 8) {
        echo "<br>";
        echo "Password too short";
    } else {
        echo "<br>";
        echo "Password secured";
    }
    
}

validatePassword("Dan");

function checkMessage($message){
    if (strtoupper($message) === $message) {
        echo "<br>";
        echo "Stop shouting!";
    } else {
        echo "<br>";
        echo "Thank you for speaking softly";
    }
    
}

checkMessage("HEYYYY");


$username = " Samuel  ";

function usernameFormatter(){
    echo "<br>";
    global $username;
    echo trim($username);
}

usernameFormatter();


$isPremium = true;


function feeCalculator(){
    global $isPremium;
    echo "<br>";
    echo $isPremium ? "Price is $20" : "Price is $50";


}

feeCalculator();

// $greeting =  ;
// $name =  ;



function greetUser($username2){
    if (strlen($username2) > 10) {
        echo "<br>";
        echo "hello $username2... wow, you have a long name!";
    } else {
        echo "<br>";
        echo "hello $username";
    }
    
}

greetUser("OluwanifemiEmmanuel");


function mathWizard($num1, $num2, $operation){
    if ($operation == "add") {
        echo "<br>";
        echo $num1 + $num2;
    } else if($operation == "multiply"){
        echo "<br>";
        echo $num1 * $num2;
    }
    
}


mathWizard(2,2,"add");
mathWizard(2,2,"multiply");






$systemStatus = "maintenance";

function checkSystem(){
    global $systemStatus;
    if ($systemStatus == "maintenance") {
        echo "<br>";
        echo "Site is Offline";
    } else {
        echo "<br>";
        echo "Site is Live";
    }
    

}

checkSystem();


function verifyAge($age){
    echo "<br>";
    echo $age >= 18 ? "Access approved" : "Access Denied";
}

verifyAge(17);

function fixEmail($email){
    echo "<br>";
    $newEmail = strtolower($email);
    echo "Your official email is $newEmail";
}
fixEmail("ADAM@GMAIL.COM");


//collection of data in a square bracket, indexed and separated by a comma.   ARRAY.
echo "<br>";
$progLang = ['python', 'php', 'java', 'javaScript', 'go', 'rust'];
echo count($progLang);
echo "<br>";
echo $progLang[2];
echo "<br>";
echo $progLang[5];
echo "<br>";
echo $progLang[count($progLang) -1];


array_push($progLang, "c++");
echo "<br>";
print_r($progLang);
echo "<br>";
array_pop($progLang);



$fruits = ["apple", "banana", "cherry"];
//removes apple and stores it in the $firstFruit

$firstFruit = array_shift($fruits);

echo $firstFruit;


print_r($fruits);



$anotherFruits = ["banana", "cherry"];
// pripends "apple" and "apricot" to the front
$newCount = array_unshift($anotherFruits, "apple", "apricot");
echo "<br>";
echo $newCount;
echo "<br>";

print_r($anotherFruits);


$latestFruits = ["apple", "banana", "cherry", "date", "elderberry"];
// Extract 2 elements starting at index 1
$slice = array_slice($latestFruits, 1, 2);
echo "<br>";


print_r($slice);
echo "<br>";

// The original array remains completely unchanged
print_r($latestFruits); 
echo "<br>";

//MERGE //SORT //REVERSE


//merge.
$fruits1 = ['apple', 'banana'];
$fruits2 = ['orange', 'apple'];

$result = array_merge($fruits1, $fruits2);
print_r($result);
echo "<br>";

//sort.
$numbers = [5, 2, 8, 1, 9];

sort($numbers);
print_r($numbers);
echo "<br>";

rsort($numbers);
print_r($numbers);
echo "<br>";

//reverse.
$colors = ['red', 'green', 'blue'];
$reversed = array_reverse($colors);
print_r($reversed);
echo "<br>";


$info = [
    ["name" => "Daniel", "age" => 7, "gender" => "Male", "height" => "6'5", "skinColor" => "Brown"],
    ["name" => "Daniel", "age" => 7, "gender" => "Male", "height" => "6'5", "skinColor" => "Brown"],
    ["name" => "Daniel", "age" => 7, "gender" => "Male", "height" => "6'5", "skinColor" => "Brown"],
    ["name" => "Jade", "age" => 7, "gender" => "Male", "height" => "6'5", "skinColor" => "Brown"],
    ["name" => "Daniel", "age" => 7, "gender" => "Male", "height" => "6'5", "skinColor" => "Brown"],
    ["name" => "Daniel", "age" => 7, "gender" => "Male", "height" => "6'5", "skinColor" => "Brown"],
];
echo $info[0]["age"];
echo "<br>";
echo $info[0]["skinColor"];
echo "<br>";

echo $info[3]["name"];

for($i = 0; $i < count($progLang); $i++){
    echo "<br>";
    echo "I am learning $progLang[$i]";
}
$outerArray = count($info);
for($i = 0; $i < $outerArray; $i++){
    echo "<br>";
    echo "My name is  {$info[$i]["name"]}  and I am   {$info[$i]["age"]} years old.";

    // foreach($info[$i] as $key => $value){
    //     echo "<br>";
    //     echo "my $key is $value";
    // }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'components/navbar.html'; ?>
    <main>
        <?php foreach($progLang as $lang) {?>
            <h3 style="color: blue;">I am learning <?php echo $lang; ?></h3>
        <?php } ?>


        <table border="1" style="border-collapse: collapse; width: 100%; text-align: left;">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Skin Color</th>
                
            </tr>
            <tbody>
                    <?php for ($i=0; $i < count($info); $i++) { ?>
                    <tr>
                        <td> <?php echo ($info[$i]['name']) ?> </td>
                        <td> <?php echo ($info[$i]['age']) ?> </td>
                        <td> <?php echo ($info[$i]['gender']) ?> </td>
                        <td> <?php echo ($info[$i]['height']) ?> </td>
                        <td> <?php echo ($info[$i]['skinColor']) ?> </td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
    </main>
    <?php include 'components/footer.html' ?>
</body>
</html>