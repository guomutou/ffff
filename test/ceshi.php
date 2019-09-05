<?php

////一群猴子排成一圈，按1，2，...，n依次编号。
////然后从第1只开始数，数到第m只,把它踢出圈，从它后面再开始数，
////再数到第m只，在把它踢出去...，如此不停的进行下去，直到最后只剩下一只猴子为止，
////那只猴子就叫做大王。要求编程模拟此过程，输入m、n,输出最后那个大王的编号。

////理解  可以理解为1...n 最后一轮不能整除m的就是大王
//
////最后这个算法最牛，有网友给了解释：
////哦，是这样的，每个猴子出列后，剩下的猴子又组成了另一个子问题。
////只是他们的编号变化了。第一个出列的猴子肯定是a[1]=m(mod)n(m/n的余数)，
////他除去后剩下的猴子是a[1]+1,a[1]+2,…,n,1,2,…a[1]-2,a[1]-1，
////对应的新编号是1,2,3…n-1。设此时某个猴子的新编号是i，他原来的编号就是(i+a[1])%n。
////于是，这便形成了一个递归问题。假如知道了这个子问题(n-1个猴子)的解是x，那么原问题(n个猴子)的解便是：
////(x+m%n)%n=(x+m)%n。
////问题的起始条件：如果n=1,那么结果就是1。

////n总量  数到m踢出
function monkey($n, $m){
    $k = 0;
    for($i=1;$i<=$n;$i++){

        $k = ($k+$m)%$i;
//        var_export($k);
    }
    echo  $k+1;  //数组下标是从0开始的
}

echo monkey(6,2);
////$n  总量 $m 数到m只 踢出去
//function ceshi($n,$m){
//    $k=0;//下标
//    for ($i=0;$i<=$n;$i++){ //循环所有数字
//
//        $k=($k+$m)%$i;
//    }
//     $k+1;
//}
//
////猴王问题  约瑟夫环
//function killMonkey($monkeys , $m , $current = 0){
//    $number = count($monkeys);
//    $num = 1;
//    if(count($monkeys) == 1){
//        echo $monkeys[0]."成为猴王了";
//        return;
//    }
//    else{
//        while($num++ < $m){
//            $current++ ;
//            $current = $current%$number;
//        }
//        echo $monkeys[$current]."的猴子被踢掉了" ."\r\n";
//        array_splice($monkeys , $current , 1);
//        killMonkey($monkeys , $m , $current);
//    }
//}
//$monkeys = array(1 , 2 , 3 , 4 , 5 , 6 , 7, 8 , 9 , 10,11); //monkeys的编号
//$m = 3; //数到第几只猴子被踢出
//killMonkey($monkeys , $m);

//2. 列出目录下所有文件的全路径，保存到一维数组中
		class A {
            /**
             *@param mix
             *@return  mix
             **/
            static public function searchFile($dir) {
                $ret = array ();
                if ((! is_dir ( $dir )) && (! is_file ( $dir ))) {
                    return $ret;
                } else if (is_file ( $dir )) {
                    $ret [] = $dir;
                } else {
                    $children = scandir ( $dir );
                    foreach ( $children as $child ) {
                        if ($child !== '.' && $child !== '..') {
                            if (empty ( $ret )) {
                                $ret = self::searchFile ( $dir . DIRECTORY_SEPARATOR . $child );
                            } else {
                                $ret = array_merge ( $ret, self::searchFile ( $dir . DIRECTORY_SEPARATOR . $child ) );
                            }
                        }
                    }
                }
                return $ret;
            }
        }


//1. 有序数组arr，里面的元素都为整数。给定待查找的值 search=?, 查找该值在数组的最小下标。如果不存在，返回-1. 要求时间复杂度尽可能低。eg:
		$arr = [1,2,3,3,4,4,5];
		$search = 3;   $ans = 2;
		$search = 7;  $ans = -1;

			/**
             *@param pos 默认取最左下标, pos=right取最右下标
             *@param arr 原始有序整数数组
             *@param search 待查找的值
             *@return 返回最${pos}下标，如果不存在返回-1
             */
		function binSearch($arr, $search, $pos='left'){
            $len = count($arr);
            $low = 0;
            $high = $len -1;

            while($low <  $high -1){
                $mid = $low + round(($high - $low)/2);
                if( $arr[$mid] < $search ||  ($arr[$mid]==$search && $pos=='right')){
                    $low = $mid;
                }else{
                    $high = $mid;
                }
            }
            $leftIndex = -1;
            $rightIndex = -1;
            //如果右节点数据和search相等
            if($arr[$high] == $search){
                $leftIndex = $rightIndex = $high;
            }

            //如果左边也相等，则最左下标取low,最右下标优先取high
            if($arr[$low] == $search){
                $leftIndex =  $low;
                $rightIndex =  ($rightIndex == -1)? $low : $rightIndex;
            }
            if($pos == 'left'){
                return $leftIndex;
            }else{
                return $rightIndex;
            }
        }
		$arr = array(1,2,3,3,3,4,4,5);
		echo 'searcharr ';
		foreach($arr as $k => $v){
            echo "[$k]$v ";
        }
		echo PHP_EOL;
		$search = $argv[1];
		echo "search $search" .PHP_EOL;
		echo binSearch($arr,$search).PHP_EOL;
		echo binSearch($arr,$search,'right').PHP_EOL;







//self和static
// 对于self的解释
//关键字“self”的工作原理是：它会调用当前类（current class）的方法。
//因为model方法只在class Car中定义的，所以对它来说当前类就是class Car。
//model中的self::getModel()，调用的自然也就是class Car中的getModel方法。
//这个行为似乎不是我们想要的，它不符合面向对象的设计原则。如何解决呢？可以使用关键字static。

//static关键字和延迟静态绑定（late static binding）
//在PHP5.3中，加入了一个新的特性，叫做延迟静态绑定。它可以帮我们实现多态，解决上面的问题。
//简单来说，延迟静态绑定意味着，当我们用static关键字调用一个继承方法时，它将在运行时绑定调用类(calling class)。
//在上面的例子中，如果我们使用延迟静态绑定（static），意味当我们调用“Mercedes::model();”时，class Mercedes中的getModel方法将会被调用。
//因为Mercedes是我们的调用类。


//class Car
//{
//    public static function model()
//{
//    self::getModel();
//}
//
//    protected static function getModel()
//{
//    echo "I am a Car!";
//}
//}
//

class Car
{
    public static function model()
    {
        static::getModel();
    }

    protected static function getModel()
    {
        echo "I am a Car!";
    }
}
//php中的self和static
//现在我们将例子中的self用static替换，可以看到，两者的区别在于:self引用的是当前类(current class)而static允许函数调用在运行时绑定调用类(calling class)。
//总结呢就是：self只能引用当前类中的方法，而static关键字允许函数能够在运行时动态绑定类中的方法。

class Mercedes extends Car
{

    protected static function getModel()
    {
        echo "I am a Mercedes!";
    }

}
//Car::model();
//Mercedes::model();
