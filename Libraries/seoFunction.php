<?php namespace App\Libraries;
class seoFunction{
	
	public static function metaData($initial = null,$content = null, $description = null,$getPageName = null){
		if($getPageName !== null){
			$getPageName = strtolower($getPageName);
		}else{
			$getPageName = 'Biznet Gio Cloud';
		}
		
		$description = $description != null ? $description : '';
		$title = '';
		$metaDesc = '';
		$ogMeta = '';
		$ogTwit= '';
		
		
		function generateMeta($getPageName,$title,$description,$metaKeyword,$logo = null){
			$logo = $logo != null ? $logo : asset('images/cloud-bg.png');
			
			$base = url();
		
			$ogMeta = '			
						<meta content="'.$title.'" property="og:title" />
						<meta content="'.$description.'" name="description" />
						<meta property="og:url" content="'.$base.'"/>
						<meta content="'.$logo.'" property="og:image" />
						<meta content="'.$description.'" property="og:description" />
						<meta content="biznetgiocloud.com" property="og:site_name" />
						
					';
					
			$ogTwit ='
						<meta content="@biznetgiocloud" property="twitter:site" />
						<meta content="'.$description.'" property="twitter:description" />
						<meta content="'.$title.'" property="twitter:title" />
						<meta content="'.$logo.'" property="twitter:image" />
					';
			$metaDesc = '
						<meta name="keywords" content="'.$metaKeyword.'" />
						';
			
			$commonMeta = '
				<title>'.e($title).'</title>
				<meta content="'.e($description).'" name="description" />		
			';
			
			return array($commonMeta,$ogMeta,$ogTwit,$metaDesc);
		
		}
		
		if($initial == 'home'){
			$title = 'Cloud Service Provider Indonesia - '.$getPageName;
			$description = 'Biznet GIO Cloud, the most reliable and affordable cloud service provider in Indonesia. Enterprises and SMEs have entrusted their IT infrastructure to us. - '.$getPageName;
			$metaKeyword = 'cloud server Indonesia, cloud storage Indonesia, penyimpanan data online terbaik, penyimpanan online';
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}else if($initial == 'pricing'){
			$title = 'Cloud Service Pricing - '.$getPageName;
			$description = 'Get simple, pay-as-you-go pricing for all our public Cloud Service products - '.$getPageName;
			$metaKeyword = 'service cloud pricing, biznet cloud pricing storage';
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}else if($initial == 'help'){
			$title = 'Help Center - '.$getPageName;
			$description = 'Documentation, videos and tutorials to help  developers, administrators and business users get started with Biznet GIO Cloud. - '.$getPageName;
			$metaKeyword = 'Biznet Cloud platform services, Biznet Cloud infrastructure services; Biznet Cloud Marketplace, Biznet Cloud Marketplace Partner Portal, Software as a Service (SaaS) applications in Biznet Cloud.';
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}else if($initial == 'customer'){
			$title = 'What Our Customers Say - '.$getPageName;
			$description = 'Biznet Gio Cloud offers hybrid IT infrastructure solutions including colocation, cloud services, managed services, backed with security and compliance. Call us to learn more - '.$getPageName;
			$metaKeyword = 'customer biznet gio cloud services ';
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}else if($initial == 'contact'){
			$title = 'Log in to '.$getPageName;
			$description = 'Biznet Gio Cloud offers hybrid IT infrastructure solutions including colocation, cloud services, managed services, backed with security and compliance. Call us to learn more '.$getPageName;
			$metaKeyword = 'customer biznet gio cloud services '.$getPageName;
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}else if($initial == 'login'){
			$title = 'Log in to '.$getPageName;
			$description = 'Log in to '.$getPageName;
			$metaKeyword = 'Log in to '.$getPageName;
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}else if($initial == 'signup'){
			$title = 'Sign Up to '.$getPageName;
			$description = 'Sign Up in to '.$getPageName;
			$metaKeyword = 'Sign Up to '.$getPageName;
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}else if($initial == 'reset'){
			$title = 'Request to request password - '.$getPageName;
			$description = 'Request to request password - '.$getPageName;
			$metaKeyword = 'Request to request password - '.$getPageName;
			
			$metaData = generateMeta($getPageName,$title,$description,$metaKeyword);
		}
		
		
		return $metaData;
	}
	
}
?>