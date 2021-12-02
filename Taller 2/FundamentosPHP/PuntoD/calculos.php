<?php
    namespace calculos;
    function calculosM($empleado){
        $salud=$empleado*12.5/100;
        $pension=$empleado*0.16;
        $total=$empleado+$salud+$pension;
        $lista=[$salud,$pension,$total];
        return $lista;
    }
?>