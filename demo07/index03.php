<?php  //类的继承
class Notify
{
    protected $color = 'red';
    protected $credit = 10;
    public function message()
    {
        return '<span style="color:'.$this->color.'">
        发送消息,奖励'.$this->credit().'个积分</span>' ;
    }
    public function credit()
    {
        return $this->credit;
    }
}
class User extends Notify
{
    protected $credit=20;
    public function register()
    {
        return $this->message();
    }
    public function credit()         //对父类方法不满意  子类进行重写
    {
        return $this->credit;
    }
}
class Comment extends Notify
{
    public function send()
    {
        return $this->message();
    }
}
echo (new User)->register();      //调用之后   一层一层 在  上面的类的属性和方法中转
                                  //但始终$this 都是指 new User 这个 对象
echo '<hr/>';
echo (new Comment)->send();
