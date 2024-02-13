<?php
/*
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

</table>
</form>*/
function sum(array &$array)
{
    global $sum;
    $sum=1;
    foreach ($array as $n) :
        if($n>$sum)
        {
            $sum=$n;
        }
    endforeach;
    $array=[];
    return $sum;
    
}

$arr=[5,4,9,19,3,15];
var_dump($arr);
sum($arr);
var_dump($arr);
function swap(&$a,&$b){
    echo 'before';
    echo '<br>';
    echo '(',$a,') (',$b,')';
    echo '<br>';
    $c=$a;
    $a=$b;
    $b=$c;
    echo 'after';
    echo '<br>';
    echo '(',$a,') (',$b,')';
}
$a=7;
$b=8;
echo '<br>';
var_dump($a,$b);
echo '<br>';
$x=swap($a,$b);
echo $x;
echo '<br>';
var_dump($a,$b);
echo 'PHP version: ' . phpversion();