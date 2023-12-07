<?php
//dates times
echo time() . '<br>';
$five_days = time() + 5 * 24 * 60 * 60;
$day_before = time() - 24 * 60 * 60;
echo $five_days . '<br>';
echo $day_before . '<br>';
echo date('d/m/Y g:ia') . '<br>';
echo date('d/m/Y g:ia', $five_days) . '<br>';
echo date('d/m/Y g:ia', $day_before) . '<br>';

date_default_timezone_set('UTC');

echo $five_days . '<br>';
echo $day_before . '<br>';
echo date('d/m/Y g:ia') . '<br>';
echo date('d/m/Y g:ia', $five_days) . '<br>';
echo date('d/m/Y g:ia', $day_before) . '<br>';

echo date('d/m/Y g:ia', strtotime('last day of march'));
