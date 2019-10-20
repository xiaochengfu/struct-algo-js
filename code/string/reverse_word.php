<?php
//字符串反转php实现
function reverseWord($s){
    return implode(' ',array_map(function($item){
        return strrev($item);
    },explode(' ',$s)));
}

if(reverseWord("Let's take LeetCode contest") == "s'teL ekat edoCteeL tsetnoc"){
    var_dump(reverseWord("Let's take LeetCode contest"));
}