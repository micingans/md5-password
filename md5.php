<?php 

echo "###################################################\n";
echo "#                Coded By Micin                   #\n";
echo "#              Manusia Biasa Team                 #\n";
echo "###################################################\n";
echo "{ 1. } Ketik 1 untuk encrypt \n";
echo "{ 2. } Ketik 2 untuk decrypt \n";
echo "{ 3. } Exit \n";
echo "Pilih : ";
$pil = trim(fgets(STDIN,1024));
	if ($pil == '1') {
		echo "Ketik text nya : ";
		$hash1 = trim(fgets(STDIN,1024));
		sleep(2);
		echo "Password : ".md5($hash1)."\n";
	} if ($pil == '2') {
		echo "Ketik password nya : ";
		$pwd = trim(fgets(STDIN,1024));
		$result =  file_get_contents("http://www.nitrxgen.net/md5db/".$pwd);
		sleep(2);
		echo  "Password : ".$result."\n";
	} if ($pil == '3') {
		echo "Arigatou ~\n";
		exit();
	} 

?>
