<?php
	/**
	* Mencetak string
	* $teks nilai string
	* $bold adalah argumen opsional
	*/
	function print_teks($teks, $bold = true) {
	echo $bold ? '<b>' .$teks. '</b>' : $teks;
	}
	print_teks('UNIVERSITAS NEGERI YOGYAKARTA');
	// Mencetak dengan huruf tebal
	
	print_teks('UNIVERSITAS NEGERI YOGYAKARTA', false);
	// Mencetak dengan huruf reguler
?>