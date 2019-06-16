<?php  
$tahun=0; //jumlah tahun
$tinggi=0; //tinggi awal
function Pohon($tahun, $tinggi){
	for ($i=0; $i < $tahun ; $i++) { 
		$tinggi = ($tinggi*2)+1;
	}
	return $tinggi;
}

echo Pohon($tahun, $tinggi);
?>