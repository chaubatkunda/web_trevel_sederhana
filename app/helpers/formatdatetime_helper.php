<?php
function indoDate($date)
{
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);
    return $d . "-" . $m . "-" . $y;
}
function indoDateTime($value)
{
    return date('d-m-Y , H:i', strtotime($value));
}

function indoCurrency($value)
{
    return "Rp" . number_format($value, 0, ",", ".");
}
