<?php
//$i=0;
/* for($i=0;$i<=15;$i++)
{
    echo $i;
    echo " = ";
    if($i==5){
        echo "pack";
        
    }elseif($i==10){
        echo "pack";
    }elseif($i==15){
        echo "pack";
    }else{

        echo $i;
    }
    echo "<br>";
} */
for($i=0;$i<10;$i++){

    for($j=0;$j<$i;$j++)
    {
        if($i<$j);
        echo $i;
    }
    echo "<br>";
}
function adding($s,$a){

    $z=$s+$a;
    echo $z+$a;
    echo "<br>";
}
adding(5,22);
adding(5,4);
adding(5,58);
adding(5,57);
function calc($n , $o ,$m){

        switch ($o) {
        case '+':
            echo $n+$m;
            break;
        case '-':
            echo $n-$m;
            break;
        case '*':
            echo $n*$m;
            break;
        case '/':
            echo $n/$m;
            break;
        default:
        echo "an erorr ocuur";
        break;
    }
}
calc(5,'*',5); 
echo "<br>";
function collectarr($a,$b,$c)
{

    echo $a;
    echo "<br>";
    Echo $b;
    echo "<br>";
    echo $c;
    echo "<br>";
}
collectarr(2,3,4);
function arrr($data){
    foreach($data as $d)
    {
        echo $d;
        echo "<br>";

    }
}
$data=array(7,5,4);
arrr($data);
function welcome($n){

    echo 'welcome '.$n;
    echo  ' to website';
    echo "<br>";
}
welcome("faisal");
welcome("areeg");
function s($n){
    echo 1+2+$n;
}
s(7);