<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/20
 * Time: 6:53
 */
define("BR","<br />");
class Dog{
    private $name ;

    /**
     * @var string
     */
    private $color;

    private $age;

    /**
     * Dog constructor.
     * @param string $name
     * @param string $color
     * @param int $age
     */
    public function __construct($name = '大黄',$color = '黑色',$age = 6)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
        echo "\dog::__construct 构造方法".BR;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Dog
     */
    public function setName(string $name): Dog
    {
        $this->name = $name;
        return $this;
    }



    /**
     * 获取属性
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
       return $name;
    }

    /**
     * 设置属性
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
        echo '调用了set魔术方法'.BR;
    }

    /**
     * 对象销毁时会自动执行
     */
    public function __destruct()
    {
       echo "对象销毁时执行".BR;
    }

    public function showObj(){
        echo $this->name,'的颜色是',$this->color,':它的年龄是',$this->age."岁".BR;
    }
}

$d = new Dog();

//设置值   等同于set
$d->name = "小黄";

echo $d->getName().BR;

echo $d->showObj();




