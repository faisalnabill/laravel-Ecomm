<?php
/*error type 
notice:-its not dengerous can continue
warning:-its little bit degourus would be solution
fetal:-very dengrous
parse:-there is an syntax error
*/
#variable
$name="php";
$_Name=" langauge";

$price=10;

$msg1="its $price$";
$msg2='hello $price$';
/* concationitioun
$msg2='hello '.$name; */
//array --------------------------------------------------------------
$array=array(10,"hello",false,array(4,array(3)));
/*echo $array[1];
echo '<br>';
echo $array[2][0];
echo '<br>';
echo $array[2][1][0]; */

$arr2=[
    4=>20,
    9=>10,
    2,
    'hi',
    'hi',
    'hi',
    'hi',
    13=>'override',
    'hi',
    'hi',
    'a'=>'associadate arr'
];
echo array_search('associadate arr',$arr2);
echo '<br>';

//adding array
$arr2[13]="perfect";
//foreach for asso 
foreach($arr2 as $key=>$value){
    echo $key .'=>' .$value;
    echo '<br>';
}
echo $msg1;
echo '<br>';
//print_r only in debug not for user
print_r($arr2);
echo '<br>';
echo'----------------';
echo '<br>';
if ($name==='php') {
    echo 'exist';}
    
    elseif ($name!=="pHp") {
        echo "does not exist" ;   
    }
    echo '<br>';
    echo "-----------------------------------";
    echo '<br>';
    $namer='00';
    echo 24 +5;
    echo '<br>';

    echo '<br>';
    echo "-----------------------------------";
    echo '<br>';

$x=[
    'a' => 'A',
    'b' => 'B',
];
$y=[
    'b' => 'A',
    'a' => 'B',
];
if ($y == $x){
    echo "Yes";
}


/*same of print_r but add more details like type
var_dump($array);*/
?>
<h1>HI , 
<?php echo '<br>'; ?>
<?php echo $msg1?>
<?php echo '<br>'?>
<?php echo $msg2?>
</h1>
<?php if ($arr2) :?>
<ul>
<?php foreach ($arr2 as $key => $value) :?>
    <li><?=$value?></li>
<?php endforeach ?>
</ul>
<?php endif;