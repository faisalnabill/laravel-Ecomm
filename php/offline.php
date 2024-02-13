<?php
for ($i = 1; $i > 15; $i++) {
    if ($i == 5) {
        echo "pack";
    } else {
        echo $i;
    }
    echo "<br>";
}
/* $name="Amira";
$is_orphan=false;
$is_student=true;
$country="SYR";
$CountryDiscount=220;
$studentDiscount=255;
$orphandiscount=550;
$price=2200;
//$arr=["KSA", "PLS","SYR"];
if ($country=="PLS" or $country=="ksa" or $country =="SYR") {

    if ($is_student==true) {

        if ($is_orphan==true) {
            echo "Hello $name welcome to the website";
            echo "<br>";
            echo "your dicount will be $CountryDiscount & $studentDiscount & $orphandiscount";
            echo "<br>";
            echo "your price $price";
            echo "<br>";
            echo "your price after discount ".$price- $CountryDiscount - $studentDiscount - $orphandiscount;
        } else {
            echo "Hello $name welcome to the website";
            echo "<br>";
            echo "your dicount will be $CountryDiscount & $studentDiscount";
            echo "<br>";
            echo "your price $price";
            echo "<br>";
            echo "your price after discount ".$price- $CountryDiscount - $studentDiscount ;
        } 
    } else {
        echo "Hello $name welcome to the website";
        echo "<br>";
        echo "your dicount will be $CountryDiscount ";
        echo "<br>";
        echo "your price $price";
        echo "<br>";
        echo "your price after discount ".$price- $CountryDiscount  ;
    }
    
} else {
    echo "Hello $name welcome to the website";
    echo "<br>";
    echo "your dont have any discount";
    echo "<br>";
    echo "your price $price";
    echo "<br>";
    echo "your price after discount ".$price ; 
}*/
$collections = range(0, 20);
$counter = count($collections);
foreach ($collections as $collection) {

    echo $collection;
    echo "<br>";
}
function calc($n, $o, $m)
{

    switch ($o) {
        case '+':
            echo $n + $m;
            break;
        case '-':
            echo $n + $m;

            break;
        case '*':

            echo $n + $m;
            break;
        case '/':

            echo $n + $m;
            break;

        default:
            echo "an erorr ocuur";
            break;
    }
}
calc(5, '+', 8);
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
            $result = $first_num + $second_num;
            break;
        case "Subtract":
            $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>
    <div id="page-wrap">
        <h1>PHP - Simple Calculator Program</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </div>
</body>

</html>