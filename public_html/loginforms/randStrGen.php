<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 7/12/2016
 * Time: 8:20 PM
 */function randStrGen($len){
    $result = "";
    $chars = "abcdefghijklmnopqrstuvwxyz0123456789$$$$$$$1111111";
    $charArray = str_split($chars);
    for($i = 0; $i < $len; $i++){
        $randItem = array_rand($charArray);
        $result .= "".$charArray[$randItem];
    }
    return $result;
}
?>