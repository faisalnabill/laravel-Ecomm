<?php
echo str_shuffle("0123456789");  
parse_str("name=faisal&email=faisal@gmail.com&os=windows",$query);
echo $query ["name"]."<br>";
echo $query ["email"]."<br>";
echo $query ["os"]."<br>";
echo quotemeta("hello *  -  %  +"). '<br>';
echo str_pad("12",8,0,STR_PAD_LEFT). "<br>";
echo str_pad("121",8,0,STR_PAD_RIGHT). "<br>";
echo str_pad("1234",8,0,STR_PAD_BOTH). "<br>";
echo str_pad("12254",8,0,STR_PAD_LEFT). "<br>";
echo strtr("helpo","p","l");
echo "<br>";
$trans=["p"=>"l","$"=>"o"];
echo strtr("help$",$trans);
echo "<pre>";
print_r(str_replace(["one","two"],[1,2],["one","two","three","one","One"]));
echo "</pre>";
echo "<pre>";
print_r(str_ireplace(["one","two"],[1,2],["one","two","three","one","One"]));
echo "</pre>";