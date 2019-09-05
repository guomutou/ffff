<?php
//////$array=array(
//////'state'=>1,
//////    'mobile'=>'11111111111',
//////    'password'=>'123456',
//////    'status' => 1,
//////    'pageindex'=>1,
//////    'pagesize'=>1,
//////);
////
//////|status | 是  |string |订单状态 0 全部  1 待抢单 2 待配送  3 已完成  |
//////|pageIndex | 是  |string |页数 10  |
//////|pageCount | 是  |string |页码 1 |
//////echo json_encode($array);
////// $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
//////$endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
////
////
/////*
//// * 经典的概率算法，
//// * $proArr是一个预先设置的数组，
//// * 假设数组为：
//// * 开始是从1,100 这个概率范围内筛选第一个数是否在他的出现概率范围之内，
//// * 如果不在，概率变成100-20=80，
//// * 就相当于去一个箱子里摸东西，
//// * 第一个不是，第二个不是，第三个还不是，那最后一个一定是。
//// * 这样 筛选到最终，总会有一个数满足要求。
//// * 这个算法在大数据量的项目中效率非常棒。
//// */
////$array = array(20, 30, 50);
////function get_rand($proArr)
////{
////    $result = '';//概率数组的总概率精度
////    $proSum = array_sum($proArr);//总个数
////    //概率数组循环
////    foreach ($proArr as $key => $proCur) {
////        $randNum = mt_rand(1, $proSum);
////        if ($randNum <= $proCur) {
////            $result = $key;  //获得奖品的ID
////            break;
////        } else {
////            $proSum -= $proCur;
////        }
////    }
////    unset ($proArr);
////    return $result;
////}
////
////function rands($proarr){
////
////    $result='';//概率数组的总概率经度
////    $prosum=count($proarr);//总个数
////    //概率数组循环
////    foreach($proarr as $k=>$v){
////        $randNum=mt_rand(1,$prosum);//获取随机数
////        if($randNum<=$v){
////
////        }else{
////
////        }
////    }
////
////}
////
////$key = get_rand($array);
////var_dump($key);
/////*
//// * 奖项数组
//// * 是一个二维数组，记录了所有本次抽奖的奖项信息，
//// * 其中id表示中奖等级，prize表示奖品，v表示中奖概率。
//// * 注意其中的v必须为整数，你可以将对应的 奖项的v设置成0，即意味着该奖项抽中的几率是0，
//// * 数组中v的总和（基数），基数越大越能体现概率的准确性。
//// * 本例中v的总和为100，那么平板电脑对应的 中奖概率就是1%，
//// * 如果v的总和是10000，那中奖概率就是万分之一了。
//// *
//// */
////$prize_arr = array(
////    '0' => array('id'=>1,'prize'=>'平板电脑','v'=>1),
////    '1' => array('id'=>2,'prize'=>'数码相机','v'=>5),
////    '2' => array('id'=>3,'prize'=>'音箱设备','v'=>10),
////    '3' => array('id'=>4,'prize'=>'4G优盘','v'=>12),
////    '4' => array('id'=>5,'prize'=>'10Q币','v'=>22),
////    '5' => array('id'=>6,'prize'=>'下次没准就能中哦','v'=>50),
////);
////
/////*
//// * 每次前端页面的请求，PHP循环奖项设置数组，
//// * 通过概率计算函数get_rand获取抽中的奖项id。
//// * 将中奖奖品保存在数组$res['yes']中，
//// * 而剩下的未中奖的信息保存在$res['no']中，
//// * 最后输出json格式数据给前端页面。
//// */
////foreach ($prize_arr as $key => $val) {
////    $arr[$val['id']] = $val['v'];  //这里$arr的‘id’是从1开始的哦。
////}
////var_dump($arr);
//////$rid = get_rand($arr); //根据概率获取奖项id
//////
//////$res['yes'] = $prize_arr[$rid-1]['prize']; //中奖项
//////unset($prize_arr[$rid-1]); //将中奖项从数组中剔除，剩下未中奖项，这一步和下一步具体看奖品数量是否为1，是1则删除并且打乱顺序
//////shuffle($prize_arr); //打乱数组顺序
//////for($i=0;$i<count($prize_arr);$i++){
//////    $pr[] = $prize_arr[$i]['prize'];
//////}
//////$res['no'] = $pr;
//////echo json_enconde($res);
//echo 5*60;
//echo mt_rand(0,0);
//2019-08-30 16:56:32
//echo 1567155392-3000;
//10位的是秒
//13位的是微妙 时间戳


//从扑克牌中随机抽5张牌，判断是不是一个顺子,即这5张牌是连续的,JQK用11、12、13表示
//我的理解: 既然是顺子,那么肯定没有对子,找到最小的值后,顺序加1看是否存在,如果都存在,则为顺
//如果我写的话是这样:
//function eatChicken(array $data)
//{
//    $min = min($data);
//    for ($i = $min; $i < $min + 5; ++$i) {
//        if (!in_array($i, $data)) {
//            return false;
//        }
//    }
//    return true;
//}
//
//var_dump(eatChicken([1, 3, 5, 2, 4]));
//var_dump(eatChicken([10, 13, 11, 12, 14]));
//var_dump(eatChicken([1, 3, 5, 7, 9]));
//
//https://github.com/hookover/php-engineer-interview-questions/issues/8
//@johson
//function eatDuck(array $arr)
//{
//    $count = count($arr);
//    if (count(array_unique($arr)) != $count) {
//        return false;//对子
//    }
//
//    if (max($arr) - min($arr) != $count - 1) {
//        return false;
//    }
//    return true;
//}
//var_dump(eatDuck([1, 3, 5, 2, 4]));
//var_dump(eatDuck([10, 13, 11, 12, 14]));
//var_dump(eatDuck([1, 3, 5, 7, 9]));


//参数为多个日期时间的数组，返回离当前时间最近的那个时间
//我只能想到foreach方式咯,欢迎大神修改
//$data = [
//    '2015-02-02 11:11:11',
//    '2012-02-02 11:55:11',
//    '2019-12-02 11:33:11',
//    '2017-12-02 11:22:11',
//];
//
//$near = array_reduce($data, function($a, $b){
//    return abs((time() - strtotime($a))) < abs((time() - strtotime($b))) ? $a : $b;
//});
//
//echo $near;



//写个函数，判断下面扩号是否闭合，左右对称即为闭合： ((()))，)(())，(())))，(((((())，(()())，()()
//遇到左括号进栈,遇到右括号出栈(如果栈里没有,说明不闭合),遍历到最后元素,判断栈内为空,即为闭合
//
//function checkClose($str)
//{
//    $stack = [];
//
//    for ($i = 0; $i < strlen($str); ++$i) {
//        if ($str[$i] == "(") {
//            $stack[] = "(";
//        }
//
//        if ($str[$i] == ")") {
//            $border = array_pop($stack);
//
//            if(!$border) {
//                return false;
//            }
//        }
//    }
//
//    if (count($stack) == 0) {
//        return true;
//    }
//    return false;
//}
//
//var_dump(checkClose('(())'));
//var_dump(checkClose('(())()(('));
//var_dump(checkClose('(())()()'));
//var_dump(checkClose('(())()))'));
//var_dump(checkClose('(5+2)*6/(3-1)'));



//找出数组中不重复的值[1,2,3,3,2,1,5]
//用 hash/桶 的思路
//$res = [];
//foreach ($data as $item) {
//    if(array_key_exists($item, $res)) {
//        ++$res[$item];
//    } else {
//        $res[$item] = 1;
//    }
//}
//
//foreach ($res as $k=>$v) {
//    if($v == 1) {
//        echo $k;
//    }
//}
//
//
////、二叉树前中后遍历代码
////树的图片看这里:https://zhidao.baidu.com/question/235504989.html
//
//class Node
//{
//    public $data  = null;
//    public $left  = null;
//    public $right = null;
//}
//
//$A = new Node();
//$B = clone $A;
//$C = clone $A;
//$D = clone $A;
//$E = clone $A;
//$F = clone $A;
//$G = clone $A;
//$H = clone $A;
//$I = clone $A;
//
//
//$A->data = 'A';
//$B->data = 'B';
//$C->data = 'C';
//$D->data = 'D';
//$E->data = 'E';
//$F->data = 'F';
//$G->data = 'G';
//$H->data = 'H';
//$I->data = 'I';
//
//
//$A->left  = $B;
//$A->right = $C;
//$B->left  = $D;
//$B->right = $E;
//$E->left  = $G;
//$E->right = $H;
//$G->right = $I;
//$C->right = $F;
//
///**
// * 前序遍历: 中左右
// * 中序遍历: 左中右
// * 后序遍历: 左右中
// */
//function eatBtree($node)
//{
//    if ($node && $node->data) {
//        eatBtree($node->left);
//        eatBtree($node->right);
//        echo $node->data;           //把这一行的位置换一换就能实现遍历方式的转变,放到最后是后序,放到最前是前序,放到中间是中序
//    }
//}
//
//eatBtree($A);

/**
 * 层序遍历会用到队列
 */

//function eatBtree2($node)
//{
//    $list[] = $node;
//    while (count($list) > 0) {
//        $cur = array_shift($list);
//        if ($cur) {
//            echo $cur->data;
//
//            if ($cur->left) {
//                $list[] = $cur->left;
//            }
//
//            if ($cur->right) {
//                $list[] = $cur->right;
//            }
//        }
//    }
//}
//
//eatBtree2($A);



//有两个文件文件，大小都超过了1G，一行一条数据，每行数据不超过500字节，两文件中有一部分内容是完全相同的，请写代码找到相同的行，并写到新文件中。PHP最大允许内内为255M。
//好像又是一个大文件处理,面试官出题的意图并不希望你两层for循环进行遍历,这种答案肯定是不会要的,看64题的连接,专门讲处理大数据的各种方式。
//那借用文章的方案,这道题目我的解法思路是:
//    顺序读取两个文件的的全部记录,将每条记录经过hash->转换为10进制->%n后存到10个文件中,这样一共2G的数据分成10份,每份就是204.8M,低于内存限制,
//    我可以一次读取一个文件,并用hash桶的方式得到单个文件中的内容是否有重复,因为每条记录都经过hash处理的,所以相同的记录肯定会在同一个文件中。

//    下面是伪代码:

    /**
     * 将两个文件中的每条记录通过hash求余后分别存入10个文件中
//     * 如果某个文件太大,超过限制内存大小,则可以对其再次hash求余
//     */
//    $handler = fopen('file_a_AND_file_b', 'r');
//
//    while ($line = fgetc($handler)) {
//        $save_to_file_name = crc32(hash('md5', $line)) % 10;
//        file_put_contents($save_to_file_name, $line);
//    }
//
//    /**
//     *
//     */
//    $files = [ '10个文件的路径' ];
//    foreach ($files as $file) {
//
//        $handler = fopen($file, 'r');
//        $tmp_arr = [];
//        while($line = fgetc($handler)) {
//            if(isset($tmp_arr[$line])) {
//                file_put_contents('common_content.txt', $line);
//            } else {
//                $tmp_arr[$line] = true;
//            }
//        }
//    }
//

//请写出自少两个支持回调处理的PHP函数，并自己实现一个支持回调的PHP函数
//array_reduce();
//array_map();
//array_filter();
//
//function callBack($parameter, $fn) {
//    return $fn($parameter);
//}
//
//var_dump(callBack(5, function ($n){
//    return $n * $n;
//}));
