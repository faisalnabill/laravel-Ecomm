<?php
class person{
    const MALE='male';
    const FEMALE='female';
protected $skin='white';
protected $age=15; 
public $name="Faisal";
public $gender;
public function setName(string $name){
    $this->name=$name;
}
function getName(){
    return $this->name;
}
public function setAge(int $age){
$this->age=$age;
return $this;
}
public function getAge(){

return $this-> age;

}
public function setSkin(string $skin){
$this->skin=$skin;
return $this;
}
public function getSkin(){
return $this-> skin;
}
function __construct($name,$age,$skin)
{
    $this->name=$name;
    $this->age=$age;
    $this->skin=$skin;
    //$this->gender=$gender;

}
function __destruct()
{
    echo 'object killed !';
}
//public function getGender(){ return $this->gender;}
function getinfo()
{
    if(isset($this->gender)){
    return $this->name.': '.$this->skin .': ' .$this->age.': '.$this->gender;
}
    return $this->name.': '.$this->skin .': ' .$this->age.': ';
}
}
class male extends person{
    public $gender="male";
}
class female extends person{
    public $gender="female";
}
//inhertins
class type extends person{
    const MALE='male-child';
    public $genderm=self::MALE;
    public $genderf=person::FEMALE;
    function setMale(string $genderm){
        $this->genderm=$genderm;
    }
    function getMale(){
        return $this->genderm;
    } 
    function setFemale(string $genderf){
        $this->genderf=$genderf;
        
    }
    function getFemale(){
        //var_dump($this);
        return $this->genderf;

    }
    function getinfom()
    {
        return $this->name.': ' .$this->skin.':' .$this->age.': '.$this->genderm;
    }
    function getinfof()
    {
        return $this->name.': ' .$this->skin.': ' .$this->age.': '.$this->genderf;
    }
}
$a=new person('',4,'');
//echo $a->name;
//echo'<br>';
//$a->name='omar';
//echo $a->name;
echo $a->getAge();
echo'<br>';
$a->setAge(19 );
echo $a->getAge();
echo'<br>';
echo $a->getskin();
$a->setSKin("bronze");
echo'<br>';
echo $a->getSkin();
echo'<br>';
$a->setSkin('black')
->setAge(23);
echo $a->getAge();
echo'<br>';
echo $a->getskin();
$b=new type('',5,'');
$c=new type('',5,'');
//$b->setName('Faisal')->setAge(22)->setSkin('white');
//echo $a->getGender();
echo'<br>';
//echo $b->getfemale();
//echo'<br>';
$b->setname('sara');
$b->setAge(23);
$b->setSkin('bronze');
$c->setname('faisal');
$c->setAge(22);
$c->setSkin('white');
echo $b->getinfof();
echo'<br>';
echo $c->getinfom();
//echo person::FEMALE;
echo'<br>';
$n=new person('omar',25,'white');
echo $n->getinfo();
