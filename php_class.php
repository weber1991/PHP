<?php
class A{
private $user=1;
private $pass=2;

public function __set($name, $value) {
echo "Setting $name to $value \r\n";
$this->$name= $value;
}
public function __get($name) {
if(!isset($this->name)){
echo '未设置';
$this->name="正在为你设置默认值";
}
return $this->name;
}

}
$a=new A();
echo $a->user;
echo '-------------';

$a->name=5;
echo $a->name;
echo $a->big;


# 暂时还理解不了，有待提高。

?>