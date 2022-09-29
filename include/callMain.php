<?php
require_once './Main.php';
$main = new Main();
$data = $main->getData(['name', 'price']);

if($data == false)
{
    $data = array(
        'status' => 'error'
    );
    print_r(json_encode($data));
}
else{
    print_r($data);
}
?>
