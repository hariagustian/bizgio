<?php namespace App\Libraries;
use App\Libraries\globalFunction;

class globalFunction{
	public static function getSafeContent($fileDirect){
		//block until this file already edited
		$file = fopen($fileDirect, 'r');
		flock($file, LOCK_SH); 
		$txtMsg = file_get_contents($fileDirect);
		flock($file, LOCK_UN); 
		fclose($file);
		
		return $txtMsg;
	}


	public static function getGlossary(){
		$gFunct = new globalFunction();
	
		$fileName = 'glossary.txt';
		$staticPath = '/assets/';
		$fileDirect = public_path().$staticPath.$fileName;	

		if(file_exists($fileDirect)){
			$glossaryText =  unserialize(base64_decode($gFunct::getSafeContent($fileDirect)));

			return array_unique(explode(' ',$glossaryText));		
		}
	}	
	
	public static function generateGlossary(){
		$fileName = 'glossary.txt';
		$staticPath = '/assets/';
		$fileDirect = public_path().$staticPath.$fileName;	

		$glossary = 'Hidup di desa sangat jauh berbeda dengan hidup di perkotaan Suasana di desa sangat nyaman dan tenteram Di sana suasananya masih sangat alami dan jauh dari kebisingan yang selalu lekat pada perkotaan Tidak hanya suasananya saja yang menjadikan hidup di desa lebih nyaman dibandingkan di kota tetapi kerukunan antar warga yang masih sangat erat membuat kehidupan di desa semakin indah Di desa semua warganya masih menganut asas gotong royong dan peduli satu sama lain. Tidak seperti penduduk perkotaan yang sudah mulai acuh tak acuh terhadap lingkungan sekitarnya. Bahkan hampir tidak ada tindakan kriminal yang terjadi di desa Oleh karena itu hidup di desa sangat menyenangkan jika dibandingkan dengan hidup di perkotaan';

		$newGlossary = base64_encode(serialize($glossary));

		file_put_contents($fileDirect, $newGlossary, LOCK_EX);	

		return true;
	}
	
	
	public static function auth($getPassMd5,$getSalt,$getPassword){	
	    $check_password = hash('sha256', $getPassMd5 . $getSalt); 
	    for($round = 0; $round < 65536; $round++) 
	    { 
	        $check_password = hash('sha256', $check_password . $getSalt); 
	    } 		                
	    if($check_password === $getPassword) 
        {
        	return true;
        }else{
			return false;
        }
	}
	
	public static function generateUserPassword($md5Pass){
		$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
		$password = hash('sha256', trim($md5Pass) . $salt); 
		for($round = 0; $round < 65536; $round++) 
		{ 
			$password = hash('sha256', $password . $salt); 
		}
		return array($password,$salt);
	}	
	

}
?>