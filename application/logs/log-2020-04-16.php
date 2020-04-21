<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-16 16:56:50 --> Severity: error --> Exception: Call to undefined method Piutang_model::total_sisa_piutang() C:\xampp\htdocs\saribuah\application\controllers\Piutang.php 75
ERROR - 2020-04-16 17:23:07 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`saribuah`.`settlement`, CONSTRAINT `fk_settlement_pembayaran` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`pembayaran_id`)) - Invalid query: DELETE FROM `pembayaran`
WHERE `pembayaran_id` = '5e929237c9b41'
ERROR - 2020-04-16 17:23:18 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`saribuah`.`settlement`, CONSTRAINT `fk_settlement_piutang` FOREIGN KEY (`piutang_id`) REFERENCES `piutang` (`piutang_id`)) - Invalid query: DELETE FROM `piutang`
WHERE `piutang_id` = '5e9878347a993'
ERROR - 2020-04-16 17:28:55 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`saribuah`.`settlement`, CONSTRAINT `fk_settlement_pembayaran` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`pembayaran_id`)) - Invalid query: DELETE FROM `pembayaran`
WHERE `pembayaran_id` = '5e929237c9b41'
ERROR - 2020-04-16 17:29:49 --> Severity: Notice --> Trying to get property 'piutang_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 211
ERROR - 2020-04-16 17:29:49 --> Severity: Notice --> Trying to get property 'piutang_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 213
ERROR - 2020-04-16 17:29:49 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 218
ERROR - 2020-04-16 17:29:49 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 219
ERROR - 2020-04-16 17:29:49 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 220
ERROR - 2020-04-16 17:29:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where pembayaran_id = ''' at line 1 - Invalid query: update pembayaran set terbayarkan =  where pembayaran_id = ''
ERROR - 2020-04-16 17:32:13 --> Severity: Notice --> Trying to get property 'piutang_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 211
ERROR - 2020-04-16 17:32:13 --> Severity: Notice --> Trying to get property 'piutang_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 213
ERROR - 2020-04-16 17:32:13 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 218
ERROR - 2020-04-16 17:32:13 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 219
ERROR - 2020-04-16 17:32:13 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 220
ERROR - 2020-04-16 17:32:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where pembayaran_id = ''' at line 1 - Invalid query: update pembayaran set terbayarkan =  where pembayaran_id = ''
ERROR - 2020-04-16 17:37:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 210
ERROR - 2020-04-16 17:37:38 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 225
ERROR - 2020-04-16 17:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where pembayaran_id = ''' at line 1 - Invalid query: update pembayaran set terbayarkan =  where pembayaran_id = ''
ERROR - 2020-04-16 17:43:25 --> Severity: Notice --> Trying to get property 'piutang_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 211
ERROR - 2020-04-16 17:43:25 --> Severity: Notice --> Trying to get property 'piutang_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 213
ERROR - 2020-04-16 17:43:25 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 218
ERROR - 2020-04-16 17:43:25 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 219
ERROR - 2020-04-16 17:43:25 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 220
ERROR - 2020-04-16 17:43:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where pembayaran_id = ''' at line 1 - Invalid query: update pembayaran set terbayarkan =  where pembayaran_id = ''
ERROR - 2020-04-16 17:45:31 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:31 --> Severity: Notice --> Undefined variable: nominal xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:31 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:31 --> Severity: Notice --> Trying to get property 'nominal' of non-object xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:41 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:41 --> Severity: Notice --> Undefined variable: nominal xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:41 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:41 --> Severity: Notice --> Trying to get property 'nominal' of non-object xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:42 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:42 --> Severity: Notice --> Undefined variable: nominal xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:42 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:42 --> Severity: Notice --> Trying to get property 'nominal' of non-object xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:44 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:44 --> Severity: Notice --> Undefined variable: nominal xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:44 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:48 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:48 --> Severity: Notice --> Undefined variable: nominal xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:48 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:48 --> Severity: Notice --> Trying to get property 'nominal' of non-object xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:48 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:49 --> Severity: Notice --> Undefined variable: nominal xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:49 --> Severity: Notice --> Undefined variable: query xdebug://debug-eval 1
ERROR - 2020-04-16 17:45:49 --> Severity: Notice --> Trying to get property 'nominal' of non-object xdebug://debug-eval 1
ERROR - 2020-04-16 17:46:42 --> Severity: Notice --> Undefined property: stdClass::$terbayarkan C:\xampp\htdocs\saribuah\application\models\Settlement_model.php 219
ERROR - 2020-04-16 17:46:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where pembayaran_id = '5e929237c9b41'' at line 1 - Invalid query: update pembayaran set terbayarkan =  where pembayaran_id = '5e929237c9b41'
ERROR - 2020-04-16 18:50:29 --> Severity: Notice --> Undefined variable: query C:\xampp\htdocs\saribuah\application\models\Pembeli_model.php 54
ERROR - 2020-04-16 18:50:29 --> Severity: error --> Exception: Method name must be a string C:\xampp\htdocs\saribuah\application\models\Pembeli_model.php 54
ERROR - 2020-04-16 18:59:46 --> Severity: Notice --> Undefined variable: CI C:\xampp\htdocs\saribuah\application\models\Pembeli_model.php 50
ERROR - 2020-04-16 18:59:46 --> Severity: Notice --> Trying to get property 'db' of non-object C:\xampp\htdocs\saribuah\application\models\Pembeli_model.php 50
ERROR - 2020-04-16 18:59:46 --> Severity: error --> Exception: Call to a member function join() on null C:\xampp\htdocs\saribuah\application\models\Pembeli_model.php 50
ERROR - 2020-04-16 19:00:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '5)
LEFT JOIN `piutang` `b` ON `a`.`pembeli_id` = `b`.`pembeli_id`
WHERE `nama` L' at line 2 - Invalid query: SELECT `a`.`pembeli_id`, `a`.`nama`, `a`.`kelompok`, `a`.`alamat`, `a`.`telp`, `a`.`email`, sum(b.nominal - b.terbayar) as sisa_piutang
FROM (`pembeli` `a`, 5)
LEFT JOIN `piutang` `b` ON `a`.`pembeli_id` = `b`.`pembeli_id`
WHERE `nama` LIKE '%s%' ESCAPE '!'
ORDER BY `nama` ASC
ERROR - 2020-04-16 19:01:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '5)
LEFT JOIN `piutang` ON `pembeli`.`pembeli_id` = `piutang`.`pembeli_id`
WHERE ' at line 2 - Invalid query: SELECT `pembeli_id`, `nama`, `kelompok`, `alamat`, `telp`, `email`, sum(nominal - terbayar) as sisa_piutang
FROM (`pembeli`, 5)
LEFT JOIN `piutang` ON `pembeli`.`pembeli_id` = `piutang`.`pembeli_id`
WHERE `nama` LIKE '%s%' ESCAPE '!'
ORDER BY `nama` ASC
ERROR - 2020-04-16 19:03:20 --> Query error: Column 'pembeli_id' in field list is ambiguous - Invalid query: SELECT `pembeli_id`, `nama`, `kelompok`, `alamat`, `telp`, `email`, sum(nominal - terbayar) as sisa_piutang
FROM `pembeli`
LEFT JOIN `piutang` ON `pembeli`.`pembeli_id` = `piutang`.`pembeli_id`
WHERE `nama` LIKE '%s%' ESCAPE '!'
ORDER BY `nama` ASC
 LIMIT 5
ERROR - 2020-04-16 19:06:47 --> Query error: Unknown column 'keilompok' in 'field list' - Invalid query: SELECT `pembeli`.`pembeli_id`, `nama`, `keilompok`, `alamat`, `telp`, `email`, sum(nominal - terbayar) as sisa_piutang
FROM `pembeli`
LEFT JOIN `piutang` ON `pembeli`.`pembeli_id` = `piutang`.`pembeli_id`
ORDER BY `nama` ASC
 LIMIT 5
