<?php namespace App\Libraries;
use DB;
class queryTabelContact{
	public static function insertNewContact($userName,$email,$subject,$subjectText){
	
		$id = DB::table('contact')
			->insertGetId(array(
				'user_name' => $userName,
				'email' => $email,
				'subject' => $subject,
				'subject_text' => $subjectText
			));	
			
		return true;
	}
	
}
?>