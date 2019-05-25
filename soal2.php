<?php
$tgl_awal = '2019-05-25';
$tgl_akhir = '2019-05-28';

while (strtotime($tgl_awal) <= strtotime($tgl_akhir)) {
            echo "$tgl_awal<BR>";
            $tgl_awal = date ("Y-m-d", strtotime("+1 day", strtotime($tgl_awal)));
}
?>
