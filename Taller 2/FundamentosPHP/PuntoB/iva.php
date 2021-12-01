<?php
$total = $_POST['total'];

function sumar($total){
    $iva=$total*0.19;
    $totalIva= $iva+$total;
    echo ($totalIva);
};
sumar($total);

?>