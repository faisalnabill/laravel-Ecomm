<?php
//ALT+SHIFT+A =multiply comment
//comment 
#comment
/* comment
'<br>'=break
*/
//::بترجعلي اسم الclass نفسها
//<?= shortcut of echo
//echo isset($last)?$last:$name   تعتبر ifelse
print gettype(true);
print '<br>';
echo gettype(false);
echo '<br>';
print gettype('ahmed');
print '<br>';
echo gettype(300);
print '<br>';
print gettype(array("PLS" => "palestine", "usa" => "united state of america"));
print '<br>';
//another way to type array
print gettype(["PLS" => "palestine", "usa" => "united state of america"]);
print '<br>';
print 'ahmed';
echo False;
echo '<br>';
echo gettype(false);
echo '<br>';
echo gettype(15.5 + 12);
echo '<br>';
echo 12.5 + 15;
echo '<br>';
echo 10 + (int)15.5;
echo '<br>';
echo gettype((int)(10.5 + 10.5));
echo '<br>';
echo ('Welcome to webstite
we learn php
thank you
<3
');
echo ('<br>');
echo ('-----------------------------');
echo ('<br>');
echo nl2br('Welcome to webstite
we learn php
thank you
<3
');
echo '<pre>';
//---------------------
//Array
print_r([
    0 => "omar",
    "A" => "Ahmed",
    "F" => "faisal",
    "khaled",
    2 => "somia",
    8 => "norah",
    "mariam",
    "Names" => [
        "faisal",
        "عمر",
        "omar" => [
            "1",
            "2",
            "3",
            "4"
        ],
        "Ahmed"
    ]
]);
echo '</pre>';
// ------------------
//variables
$name = "Faisal";
$Username = " Nabil";
echo $name;
print $Username;
echo '<br>';
echo "hello $name $Username";
echo '<br>';
echo '--------------------------------';
//-------------------------------
//test variable
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Page <?php echo $name ?></title>
</head>

<body>
    <pre>
        مرحبا بك في الموقع  
    </pre>
    <pre>
    <?php echo $name, $Username ?>
        you scored 201 point
    </pre>
    <pre>
        <?php include("try.php") ?>
    </pre>
</body>

</html>
<?php
//-------------
//variables of variable
$a = "faisal;";
$$a = "Nabil";
$ $$a = "albaz";

echo $a;
echo '<br>';
echo $$a;
echo '<br>';
echo $ $$a;
echo '<br>';
//echo $albaz;
echo "hello ${$$a}";
echo '<br>';
//------------------------
$x = "faisal";
$b = &$x;
$b = "nabil";
$x = "albaz";
echo $x;
echo '<br>';
echo $b;
echo '<br>';
//----------------video18
define("DB_php", "Faisal ");
define("MAIN_NUMBER", 50);
echo DB_php;
echo MAIN_NUMBER * 20;
//------------------------video19
echo php_uname();
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
//--------------video20
/*echo 10+20;
echo'<br>';
echo gettype(10+20);
echo'<br>';
echo 10/20.5;
echo'<br>';
echo gettype(10/20.5);
echo'<br>';
echo -10/20;
echo'<br>';
echo gettype(-10/20);
echo'<br>';
echo 20%20;
echo'<br>';
echo gettype(22%10);
echo'<br>';
echo 3**5;//الاس
//-------------------video21 & 22 & 23  
/*$i=10;
$i+=20;
echo $i;
echo'<br>';
//-----------------
var_dump(100!=101);
echo'<br>';
//===مماثلة لها من حيث العدد و النوع
var_dump(100==="100");
echo'<br>';
//<> dont equal
var_dump(11<>11);
echo'<br>';
var_dump(100>=100);
echo'<br>';
//spaceship
var_dump(100<=>200);//-1
echo'<br>';
var_dump(100<=>100);//0
echo'<br>';
var_dump(100<=>90);//1
echo'<br>';*/
//-----------------------------video24
$likes = 0;
echo $likes++;
echo '<br>';
++$likes;
echo $likes;
echo '<br>';
//----------------------
/*
and = and=>&&  
or = or=>||
not =!
xor=xor
*/
var_dump(100 > 50 || 150 < 200);
echo '<br>';
var_dump(100 > 50 xor 150 < 200);
echo '<br>';
$arr1 = [1 => 100, 2 => 300];
$arr2 = [4 => 400, 3 => 500];
$arr3 = ($arr1 + $arr2);
echo '<pre>';
print_r($arr1 + $arr2);
print_r($arr3);
echo '</pre>';
echo '<br>';
var_dump($arr1 == $arr2);
$a = 20;
echo '<br>';
$b = $a;
echo "Test $b";
echo '<br>';
$f = @file("test.txt") or die("file not found");
echo '<pre>';
print_r($f);
echo '</pre>';
@include ("tesst.php") or die("sorry not found");
//--------------------------------------------------
if (10 > 5) {
    var_dump(10 > 5);
    echo '<br>';
    echo 'yes';
}
echo '<br>';
echo "-----------------------------";
echo '<br>';
if (10 <= 10) {
    echo "yes";
    echo '<br>';
} elseif (10 < 6) {
    echo "Second condition complished";
} else {
    echo "no";
}
$anything = "";
if ($anything == "") {
    echo "unkown page";
} else {
    echo $anything;
}
echo '<br>';
$lang = "Arabic";
if ($lang == "Arabic") {
    echo "مرحبا!";
} elseif ($lang == "English") {
    print "Hello!";
} elseif ($lang == "Spanish") {
    echo "Hola!";
} else {
    echo "unkown language";
}
echo "------------------------------------------";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST["lang"] == "ar") {
        header("Location:ar.php");
        exit();
    } elseif ($_POST["lang"] == "en") {
        header("Location:en.php");
        exit();
    } elseif ($_POST["lang"] == "sp") {
        header("Location:sp.php");
        exit();
    } else {
        header('Location:sp.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>

</html>






<?php if (10 > 5) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <pre>
        hello every one
        welcome to the page
    </pre>
    </body>

    </html>
<?php endif ?>
<?php
$name = "hussien";
$is_student = true;
$is_orphan = true;
$country = 'iraq';
$country_discount = 50;
$price = 2200;
$student_dis = 15;
$orphan_dis = 20;
if ($country === 'iraq') {

    if ($is_student == true) {

        if ($is_orphan == true) {
            echo "hello $name";
            echo "<br>";
            echo "your dicount will be $orphan_dis & $student_dis & $country_discount ";
            echo "<br>";
            echo "your original price is $price";
            echo "<br>";
            echo "you final price is " . $price - $orphan_dis - $student_dis - $country_discount;
            echo " $";
        } else {
            echo "hello $name";
            echo "<br>";
            echo "your dicount will be $country_dis & $student_dis ";
            echo "<br>";
            echo "your original price is $price";
            echo "<br>";
            echo "you final price is " . $price - $orphan_dis - $student_dis;
            echo " $";
        }
    } else {
        echo "hello $name";
        echo "<br>";
        echo "your country discount $country_discount ";
        echo "<br>";
        echo "you final price is " . $price - $country_discount;
        echo " $";
    }
    echo '';
} else {
    echo "hello $name";
    echo "<br>";
    echo "your country out of discount ";
    echo "<br>";
    echo "you final price is $price ";
    echo "$";
}
echo '<br>';
$day = 'sun';
switch ($day) {

    case "sat":
    case "mon":
        echo "Hello today is $day we open from 9 AM to 12 PM";
        break;
    case "sun";
        echo "Hello today is $day we open from 8 AM to 12 PM";
        break;

    default:
        echo "UNKNOWN day";
        break;
}
echo '<br>';
echo "======================================================<br>";
$day = 'sun';
echo '<br>';
echo "======================================================<br>";
echo '<br>';
$i = 1;
/*while($i<=4):

    echo "$i<br>";

    $i++;
       
endwhile;*/
echo '<br>';
/*do{
    
        echo "$i<br>";

        $i++;

    }while($i<=4);*/
for ($i; $i <= 4; $i++) {
    echo $i;
    echo '<br>';
}
echo '---------<br>';
//another way to (write for loop)
$index = 1;
for (;;) :

    if ($index == 5) {
        break;
    }
    echo $index;
    echo '<br>';
    $index++;
endfor;

$countries_with_discount = ['EG' => 50, 'Usa' => 20, 'PLS' => 70, 'SYR' => 60];
echo '<pre>';
print_r($countries_with_discount);
echo '</pre>';
foreach ($countries_with_discount as $country => $discount) :
    echo "country name $country and the discount is $discount<br>";
endforeach;
echo '<br>';
include_once("try.php");

echo $a . '<br>';

$a = 20;

include_once("try.php");

echo $a . '<br>';
$a = 40;
include_once("try.php");

echo $a . '<br>';

echo 'continue';
echo '<br>';
echo '------------------------';
echo '<br>';
require("try.php");

echo $a . '<br>';
$a = 20;
require("try.php");

echo $a . '<br>';

echo 'continue';
echo '<br>';

function Welcome_people($name)
{
    echo "Hello $name welcome to the web <br>";
}
Welcome_people("Faisal");
Welcome_people("Asmaa");
function freezer($item)
{
    if ($item === 'water') {

        echo "Make ice<br>";
    } elseif ($item === "Soda") {

        echo "Make it cold<br>";
    } elseif ($item === "fruit") {

        echo "Save it<br>";
    } else {

        echo "unkown item<br>";
    }
}
freezer("water");
freezer("Soda");
freezer("fruit");
freezer("console");

$prizes = ["PC", "Skateboard", "PS", "XBOX", "3 days vacition", "Watch"];

function get_num($num1, $num2)
{

    return $num1 + $num2;
}
// $prize_num= get_num(3,4);
//   var_dump($prize_num);

echo $prizes[get_num(0, 0)];
function calc(&$num)
{
    $num += 5;
    return $num;
}
$n = 10;
echo calc($n);
echo "<br>";
echo $n;
echo "<br>";
$name;
$say_hello = fn ($name) => "Hello $name";
echo $say_hello("faisal");
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

/* // Output
"The Name Is Ahmed And I Need 100 Pound From Him"
"The Name Is Sayed And I Need 150 Pound From Him"
"The Name Is Osama And I Need 100 Pound From Him"
"The Name Is Maher And I Need 250 Pound From Him" */
$str = "faisal nabil albaz ";
echo "<br>";
echo "Last letter is $str[-1]<br>";
echo "number of letter " . strlen($str);
echo $str . "<br>";
$str[0] = 'F';
echo $str . "<br>";
$str[19] = 'l';
echo $str . "<br>";
echo str_repeat("Faisal<br>", 4);
$friends = ["Faisal", "ze", "Omar", "Khaled", "yousef"];
echo implode("||", $friends) . "<br>";
echo implode("&", $friends) . "<br>";
echo implode(",", $friends) . "<br>";
echo implode(" ", $friends) . "<br>";
$str = "faisal will be great programmer";
echo "<pre>";
echo  print_r(explode(" ", $str, 6));
echo "</pre>";
echo str_shuffle("0123456789");
echo "<br>";
echo strrev(" lasiaf km3");
//trim does not count the spaces
echo "<br>";
echo strlen(trim("   Faisal nabil albaz ")) . "<br>";
echo strlen("   Faisal nabil albaz") . "<br>";
echo "<pre>";
echo  print_r(str_split("faisals", 2));
echo "</pre>";
echo "<br>";
echo chunk_split("faisal nabil albaz", 3, " ");
echo "<br>";
 for($l = 0; $l<4; $l++){
    $temp = str_shuffle($_chars);
    $_charcode .= $temp;
 }
parse_str("name=faisal&email=faisal@gmail.com&os=windows", $query);
echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
