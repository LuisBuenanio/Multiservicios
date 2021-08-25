<?php
if(!empty($_POST)){
// print_r($_POST);
$buy = BuyData::getById($_POST["buy_id"]);
$buy->cancel();
Core::alert("Compra Cancelada!");
Core::redir("index1.php?view=client");
}
?>