<?php
    namespace calculos;
    function calculosM($empleado){
        $salud=$empleado*12.5/100;
        $tsalud=$salud+$empleado;
        $pension=$empleado*0.16;
        $tpension=$pension+$empleado;
        $total=$empleado+$salud+$pension;
        $lista=[$salud,$tsalud,$pension,$tpension,$total];
        return $lista;
    }
?>