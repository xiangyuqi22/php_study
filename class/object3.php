<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/20
 * Time: 7:34
 */

class cat implements IAnimal{

    public static $nick;



    public function sound()
    {
       echo "";
       self::$nick;
    }

}