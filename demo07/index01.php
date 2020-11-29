<?php
    //php是一门面向对象的语言
    class User      //类
{   
    protected $name;   //属性
    public static $classname = '三年级一班';   //属于类的  静态属性   调用时  类名::$xxx
    public function say1()
    {
        return self::getClassname().'的'. $this->getName(). '说:你好';   // this 调用属性 
        //self 指代当前类  
    }
    public function say()
    {
        return User::$classname.'的'. $this->getName(). '说:你好';   // this 调用属性 
    }                                    
    public function setName(string $name)  //方法2
    {
       $this->name = $name;   //  $this 当前对象的 指针     调用属性  赋值
    }
    public static function getClassname()  //静态方法  用self  调用  和静态属性一样
    {
        return self::$classname;      
    } 
    public function getName()
    {
        return $this->name;
    }
}
$obj = new User;     //实例化  的 对象
$obj->setName('siqi');   // 对象  调用 方法
echo $obj->say().'<br>';        //对象  调用  方法
echo $obj->say1();
