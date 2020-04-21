<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-20 16:56:33 --> 404 Page Not Found: Pembeli/index
ERROR - 2020-04-20 16:56:42 --> Query error: Table 'sekretariat.piutang' doesn't exist - Invalid query: SELECT *
FROM `piutang`
JOIN `pembeli` ON `pembeli`.`pembeli_id` = `piutang`.`pembeli_id`
ERROR - 2020-04-20 17:04:13 --> 404 Page Not Found: Surat/index
ERROR - 2020-04-20 17:47:07 --> Severity: Notice --> Undefined variable: number C:\xampp\htdocs\sekretariat\application\models\Surat_model.php 54
ERROR - 2020-04-20 17:47:07 --> Severity: Notice --> Undefined variable: offset C:\xampp\htdocs\sekretariat\application\models\Surat_model.php 54
ERROR - 2020-04-20 17:47:07 --> Severity: error --> Exception: Call to undefined method Surat_model::get_total_surat_belum_lunas() C:\xampp\htdocs\sekretariat\application\controllers\Surat.php 75
ERROR - 2020-04-20 17:51:00 --> Severity: error --> Exception: Call to undefined method Surat_model::get_total_surat_belum_lunas() C:\xampp\htdocs\sekretariat\application\controllers\Surat.php 75
ERROR - 2020-04-20 17:51:24 --> Severity: Notice --> Undefined variable: urats C:\xampp\htdocs\sekretariat\application\views\v_surat_list.php 47
ERROR - 2020-04-20 17:51:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sekretariat\application\views\v_surat_list.php 47
ERROR - 2020-04-20 17:51:52 --> Severity: Notice --> Undefined variable: ssurats C:\xampp\htdocs\sekretariat\application\views\v_surat_list.php 47
ERROR - 2020-04-20 17:51:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sekretariat\application\views\v_surat_list.php 47
ERROR - 2020-04-20 18:29:27 --> Query error: Unknown column 'tanggal' in 'field list' - Invalid query: INSERT INTO `surat` (`surat_id`, `kepada`, `nomor`, `tanggal`, `keterangan`, `username`) VALUES ('5e9dcde7d698b', 'Seluruh Pengurus', 'IPPAT/0001', '2000-12-12', '-', 'bprasojo')
ERROR - 2020-04-20 18:30:11 --> Severity: Notice --> Undefined property: stdClass::$terbayar C:\xampp\htdocs\sekretariat\application\views\v_surat_list.php 70
