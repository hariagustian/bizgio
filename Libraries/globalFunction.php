<?php namespace App\Libraries;
class globalFunction{
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