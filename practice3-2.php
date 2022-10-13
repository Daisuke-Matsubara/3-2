<?php

define("Tax",1.1);
$products = ["鉛筆" => "100" , "消しゴム" => "150" , "物差し" => "500"];

foreach($products as $key => $value) {
    echo $key."の税込み価格は". $value * Tax ."です";
    echo '<br>';
}

?>

<?php

define("Tax",1.1);
$products = ["鉛筆" => "100" , "消しゴム" => "150" , "物差し" => "500"];

function getTaxPrice(Tax,$key => $value) {
    echo 

}



?>