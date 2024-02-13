<?php
/* function autoload_class($class_name)  {
    //عشان اقدر ادخل لملف اخر
    //dir بترجعلي مسار المجلد

    //echo $class_name;
    $array=explode('\\',$class_name);
    //var_dump($array);
    $class=array_pop($array);
    $filename=__DIR__.'/src/'.$class.'.php';
    if(is_file($filename))
    {
    require_once $filename; 
}
}
spl_autoload_register('autoload_class'); */