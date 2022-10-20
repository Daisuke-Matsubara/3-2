<?php
//税率、商品
define("Tax",1.1);
$products = ["鉛筆" => 100 , "消しゴム" => 150 , "物差し" => 500];


//foreach
foreach($products as $key => $value) {
    function tax_inc_price($price,$name) {
        $tax_price = $price * Tax ;
    echo $name."の税込み価格は". $tax_price ."円です";
    echo '<br>';}
   
tax_inc_price($products["鉛筆"],"鉛筆");
tax_inc_price($products["消しゴム"],"消しゴム");
tax_inc_price($products["物差し"],"物差し");
echo '<br>';
    }

?>

<?php
//以前の問題 商品 個数
$fruits = ["りんご" => 100,"みかん" => 150,"もも" => 500];
$quantity = [3,1,6];

function fruits_price($price,$number,$name) {
    $total = $price * $number;
    echo $name . "は" . $total . "円です";
    echo '<br>';
}

fruits_price($fruits["りんご"],$quantity[0],"りんご");
fruits_price($fruits["みかん"],$quantity[1],"みかん");
fruits_price($fruits["もも"],$quantity[2],"もも");


?>