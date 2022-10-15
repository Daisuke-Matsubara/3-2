<?php
//税率、商品
define("Tax",1.1);
$products = ["鉛筆" => "100" , "消しゴム" => "150" , "物差し" => "500"];


//foreach
foreach($products as $key => $value) {
    echo $key."の税込み価格は". $value * Tax ."円です";
    echo '<br>';
}
echo '<br>';

//関数
function tax_inc_price($price,$name) {
    $tax_price = $price * Tax ;
    echo $name . "の税込み価格は". $tax_price . "円です";
    echo '<br>';
}

tax_inc_price($products["鉛筆"],"鉛筆");
tax_inc_price($products["消しゴム"],"消しゴム");
tax_inc_price($products["物差し"],"物差し");

?>