<?php 
	header("Content-Type: application/vnd.ms-excel");
	echo 'First Name' . "\t" . 'Last Name' . "\t" . 'Phone' . "\n";
	echo 'John' . "\t" . 'Doe' . "\t" . '555-5555 <a href=\'test.xlsx\'>clicking me</a>' . "\n";
	header("Content-disposition: attachment; filename=spreadsheet.xls");
	?>