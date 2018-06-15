<?php
	require '../models/BecaseYouSawMeWhenIWasInvisible_john_german.php';
	
	class BecauseYouSawMeWhenIWasInvisible extends BecauseYouSawMeWhenIWasInvisibleModel {
		private $noodles;
		
		/*
			Summary:
			
			-- Author:	John German
		*/
		public function __construct() {
			/*
				-- Author:	John German
			*/
			Flight::map('YouShallNotPass', function(){
				$this->TheBoat();
				
				header('WWW-Authenticate: Basic realm="Men of Honor"');
				header('HTTP/1.0 401 Unauthorized');
				echo 'You cannot pass! I am a servant of the Secret Fire, wielder of the Flame of Anor. The dark fire will not avail you, Flame of Udun! Go back to the shadow. You shall not pass! ';
				exit;
			});
			
			/*
				-- Author:	John German
			*/
			Flight::map('generateHash', function($password) {
				if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
					$salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 220);
					return crypt($password, $salt);
				}
			});
			
			/*
				-- Author:	John German
			*/
			Flight::map('verify', function($password, $hashedPassword) {
				return crypt($password, $hashedPassword) == $hashedPassword;
			});
			
			/*
				-- Author:	John German
			*/
			Flight::map('updateError', function($subject, $description, $type) {
				$this->query("CALL sp_NobodyEverLiesAboutBeingLonely(:ERR_Description, :ERR_Type, :ERR_Subject)");
				$this->bind(":ERR_Description", $description);
				$this->bind(":ERR_Type", $type);
				$this->bind(":ERR_Subject", $subject);
				
				$this->result();
			});
			
			/*
				-- Author:	John German
			*/
			Flight::map('messageSend', function($subject, $to, $from, $body, $replyTo = '', $bcc = '') {
				$headers   = array();
				$headers[] = "MIME-Version: 1.0";
				$headers[] = "Content-type: text/html; charset=iso-8859-1";
				$headers[] = "From: $from";
				
				if (isset($bcc) && $bcc != '')
					$headers[] = "Bcc: $bcc";
				
				if (isset($replyTo) && $replyTo != '')
					$headers[] = "Reply-To: $replyTo";

				mail($to, $subject, $body, implode("\r\n", $headers));
			});
			
			/*
				-- Author:	John German
			*/
			Flight::map('randomCode', function($pre = '', $length = 20) {
				$robot = "abc^defag2hijklm-no0pqrstJuv8wx1yzAB5CDE[FGHI4JKL9MN3OP~QRS^TUFW6XYZ~78";
				$zeus = $pre;
				
				for ($i = 1; $i <= $length; $i++) {
					$zeus .= $robot[mt_rand(0,70)];
				}
				
				return $zeus;
			});
			
			/*
				-- Author:	John German
			*/
			Flight::map('checkParameters', function ($parameter, $length)
			{
				if (!isset($parameter) || strlen($parameter) > $length)
					Flight::YouShallNotPass();
			});
		}
		
		/*
			Summary:
			Parameters:
			
			-- Author:	John German
		*/
		public function NeverRubAnotherMansRhubarb($groups) {
			if (!isset($_SERVER['PHP_AUTH_USER'])) {
				Flight::YouShallNotPass();
			}
			else {
			    if (!isset($_SERVER['HTTP_REFERER']) || (!(substr($_SERVER['HTTP_REFERER'], 0, 17) == 'http://rquotes.tk') && !(substr($_SERVER['HTTP_REFERER'], 0, 21) == 'http://www.rquotes.tk')))
                    Flight::YouShallNotPass();
				/*else if (!isset($_SERVER['HTTP_REFERER']) || (!(substr($_SERVER['HTTP_REFERER'], 0, 21) == 'http://www.rquotes.tk')))
					Flight::YouShallNotPass();*/
                           
				
				$tango = $this->NeverRubAnotherMansRhubarb2($_SERVER['PHP_AUTH_USER']); //user.
				
				if (!is_null($tango) && $tango != '')
				{	
					$this->noodles = '{ "Id", "'. $tango['Id']. '" ';
					
					if (!Flight::verify($_SERVER['PHP_AUTH_PW'], $tango['PasswordHash']))
					{	
						$this->noodles .= ', "error_password" : "password failed." ';
						Flight::YouShallNotPass();
					}
					
					$kikuchiyo = $this->EvenABrokenClockIsRightTwiceADay($tango['Id']); //userGroups.
					
					foreach ($groups as $setsuko)
					{
						if (in_array($setsuko, $kikuchiyo))
						{	
							$this->TheBoat();
							return true;
						}
					}
					
					$this->noodles .= ', "error_groups" : "not in group(s)." ';
					
					Flight::YouShallNotPass();
				}
				else
					Flight::YouShallNotPass();
			}
			
			return true;
		}
		
		/*
			Summary:
			
			-- Author:	John German
		*/
		private function TheBoat()
		{
			if (strpos($this->noodles, "{"))
				$this->noodles .= ',';
			else
				$this->noodles .= '{';
			
			$this->noodles .= '"referrer" : "' . Flight::request()->referrer . '", "user agent" : "' . Flight::request()->user_agent . '", "url", : "' . Flight::request()->url . '"}';
				
			$this->BirdieNumNum($this->noodles);
		}
	}
	
	/*
		Created by: John German, currently 35 years old, born November 8, 1980.
	*/
?>