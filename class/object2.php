<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/20
 * Time: 7:22
 */

require_once "inter.php";
//引入文件，其他文件夹的
require_once "../common/constant.php";

class Mouse implements  IAnimal{

    /**
     * const 声明一个常量
     */
    public const a = 100;

    /**
     * @var 静态变量
     */
    public static $nick;

    public function sound()
    {
       echo "老鼠是怎么叫的".BR;
    }

    public  static function getNick(){

        //静态变量内部调用方式
        echo self::$nick.BR;

        //静态变量外部调用方式
        return Mouse::$nick;
    }

    public static  function getNick2(){
        self::getNick();
    }

}

$m = new Mouse();
$m->sound();

/**
 * 静态变量的调用方式
 */
Mouse::$nick = '昵称：鼠标';

echo Mouse::$nick.BR;

if ($m instanceof  IAnimal){
    echo "这是一个动物".BR;
}

echo Mouse::a;

echo Mouse::getNick();



