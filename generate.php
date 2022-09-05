<?php
$horas = array(
"18:02",
"18:05",
"18:04",
"18:09",
"18:08",
"18:07",
"18:06",
"18:03",
);

$horas_entrada = array(
    "09:02",
    "09:07",
    "09:06",
    "09:08",
    "09:09",
    "09:10",
    "09:01",
    "09:03",
    "09:14",
);

$horas_almoco_saida = array(
    "12:01",
    "12:02",
    "12:03",
    "12:04",
    "12:05",
    "12:06",
    "12:07",
    "12:08",
);

$horas_almoco_entrada = array(
    "13:01",
    "13:02",
    "13:03",
    "13:04",
    "13:05",
    "13:06",
    "13:07",
    "13:08",
    "13:09",
);



for($i=0;$i<=30;$i++) {
$rand = array_rand($horas_entrada, 1);
echo $horas_entrada[$rand];
echo '<br/>';
}

echo '<br>';
echo '<br>';
echo '<br>';

for($i=0;$i<=30;$i++) {
$rand = array_rand($horas_almoco_saida, 1);
echo $horas_almoco_saida[$rand];
echo '<br/>';
}

echo '<br>';
echo '<br>';
echo '<br>';

for($i=0;$i<=30;$i++) {
$rand = array_rand($horas_almoco_entrada, 1);
echo $horas_almoco_entrada[$rand];
echo '<br/>';
}

echo '<br>';
echo '<br>';
echo '<br>';

for($i=0;$i<=30;$i++) {
$rand = array_rand($horas, 1);
echo $horas[$rand];
echo '<br/>';
}

echo '<br>';
echo '<br>';
echo '<br>';

?>
