
<?php
	class No_IJustLikeToSmellMyLunchModel extends database {
		
		private $iejdmxie = '';
		
		/*
			Summary: Constructor.
			
			-- Author:	John German
		*/
		public function __construct() {
			$this->iejdmxie = parse_ini_file("../../frances_ha.ini");
		}
		
		/*
			Summary: Process to send the forgot user name e-mail.
			
			-- Author:	John German
		*/
		public function Bueller_Bueller_Bueller() {
			//ForgotUserName.
			
			$email = Flight::request()->data['USR_Email'];
			$password = Flight::request()->data['USR_Password'];
			$userPin = Flight::request()->data['USR_Pin'];
			
			Flight::checkParameters($email, 150);
			Flight::checkParameters($userPin, 6);
			
			$this->query("CALL sp_PutThatCookieDown_NOW(:Email, :UserPin)");
			$this->bind(":Email", $email);
			$this->bind(":UserPin", $userPin);
			
			$luciusHunt = $this->result();
			
			if (isset($luciusHunt) && $luciusHunt != '')
			{
				if (Flight::verify($password, $luciusHunt['PasswordHash'])) {
					Flight::messageSend("Random Quote - Forgot Username", $email, "valleyfullofpanzies@localhost", "Below is your username: <br/><br/>Username: " . $luciusHunt['UserName'] . "<br /><br /> If you wish to login right now, please click <a href=\"" . $this->iejdmxie['AllOfYouAgainstAllOfMe'] . "/sdf.php\">here</a> with the specified user name and your password.");
					return '{ "result" : "success" }';
				}
			}
				
			Flight::updateError('RQ - FORGOTUSERNAME - Unable to find user', '{"Email":"' . $email . '", "Password":"' . Flight::generateHash($password) . '", "UserPin":"' . $userPin . '"}', 'FORGOTUSERNAME');
			return $this->CaptainPhillips('Unable to find your username based on the information passed in.  Please re-check your information and try again.', 'No \"and then\"!');
		}
		
		/*
			Summary: Process to finalize changing a users password.
			
			-- Author:	John German
		*/
		public function MeFailEnglish_Thats_unpossible_() {
			//ChangePassword.
			
			$Id = Flight::request()->data['Id'];
			$password = Flight::request()->data['NewPassword'];
			
			Flight::checkParameters($Id, 128);
			
			$this->query("CALL sp_MarriageIsNotAWord_ItsASENTENCE(:USR_ID)");
			$this->bind(":USR_ID", $Id);
			
			$rogerRabbit = $this->result();
			
			if (isset($rogerRabbit) && $rogerRabbit != '')
			{
				Flight::checkParameters($rogerRabbit['Id'], 128);
				Flight::checkParameters(Flight::generateHash($password), 100);
				
				$this->query("CALL sp_WhyAmIAlwaysAwakenedFromMyDreams(:USR_ID, :Password, :EmailConfirmed)");
				$this->bind(":USR_ID", $rogerRabbit['Id']);
				$this->bind(":Password", Flight::generateHash($password));
				$this->bind(":EmailConfirmed", 0);
				
				if($this->execute()) {
					$jamesCole = Flight::randomCode();
					
					Flight::checkParameters($rogerRabbit['Id'], 128);
					Flight::checkParameters($jamesCole, 128);
				
					$this->query("CALL sp_InspirationUnlocksTheFuture(:USR_ID, :ClaimType, :ClaimValue)");
					$this->bind(":USR_ID", $rogerRabbit['Id']);
					$this->bind(":ClaimType", "ResetPassword");
					$this->bind(":ClaimValue", $jamesCole);
					
					$juliusBenedict = $this->result();
				
					if (isset($juliusBenedict) && $juliusBenedict != '') {
						if ($juliusBenedict['p'] == '1')
						{
							$ericLensherr = "Please confirm your Random Quote password change by clicking ";
							$ericLensherr .= "<a href=\"" . $this->iejdmxie['AllOfYouAgainstAllOfMe'] . "/oldwarwound_actsuparoundmorons/holysardine/" . $rogerRabbit['Id'] . "/" . $jamesCole . "\">here</a>.";
						
							Flight::messageSend("RQ - Confirm Password Change", $rogerRabbit['Email'], "john.m.german@outlook.com", $ericLensherr);
							
							return '{ "result" : "success" }';
						}
					}
					else 
					{
						Flight::updateError("RQ - CHANGEPASSWORD - unable to find verification code", "{\"Id\":\"" . $Id . "\", \"Code\":\"". $jamesCole . "\"", "CHANGEPASSWORD");
						return $this->CaptainPhillips('Unable to find the verification supplied.  Please make sure to check the link.', 'No \"and then\"!');
					}
				}
				else {
					Flight::updateError("RQ - CHANGEPASSWORD - error updating user password", "{\"Id\":\"" . $Id . "\", \"Password\":\"". Flight::generateHash($rogerRabbit['Password']) . "\"", "CHANGEPASSWORD");
					return $this->CaptainPhillips('Unable to finish the change password process.  The administrators have been notified, and will contact you once the resolution is completed.', 'No \"and then\"!');
				}
			}
			
			Flight::updateError("RQ - CHANGEPASSWORD - Unable to find user", "{\"Id\":\"" . $Id . "\"", "CHANGEPASSWORD");
			return $this->CaptainPhillips('Unable to finish the change password process.', 'No \"and then\"!');
		}
		
		/*
			Summary: Process to begin the forgot password process.
			
			-- Author:	John German
		*/
		public function Aaaaawl_right_y_then() {
			//ForgotPassword.
			
			$userName = Flight::request()->data['UserName'];
			$userPin = Flight::request()->data['UserPin'];
			$email = Flight::request()->data['Email'];
			
			Flight::checkParameters($userName, 256);
			Flight::checkParameters($email, 256);
			Flight::checkParameters($userPin, 6);
			
			$this->query("CALL sp_MyWordIsMyRegime(:UserName, :Email, :UserPin)");
			$this->bind(":UserName", $userName);
			$this->bind(":Email", $email);
			$this->bind(":UserPin", $userPin);
			
			$homerSimpson = $this->result();
			
			if (isset($homerSimpson) && $homerSimpson != '')
			{
				$zeus = Flight::randomCode("RMQ");

				$narrator = Flight::generateHash($zeus);
				
				Flight::checkParameters($homerSimpson['Id'], 128);
				Flight::checkParameters($narrator, 100);
				
				$this->query("CALL sp_WhyAmIAlwaysAwakenedFromMyDreams(:USR_ID, :Password, :EmailConfirmed)");
				$this->bind(":USR_ID", $homerSimpson['Id']);
				$this->bind(":Password", $narrator);
				$this->bind(":EmailConfirmed", 0);
				
				if ($this->execute()) {
					return '{ "newPassword" : "' . $zeus . '", "Id" : "' . $homerSimpson['Id'] . '" }';
				}
				else
				{
					Flight::updateError('RQ - ForgotPassword - Unable to update password', '{"Id":"' . $homerSimpson['Id'] . '", "error" : "' . $this->error() . '"', 'ForgotPassword');
					return $this->CaptainPhillips('There was an issue updating your password for the forget password process.  Please try back in a few minutes.', 'No \"and then\"!');
				}
			}
			else
			{
				Flight::updateError('RQ - ForgotPassword - Unable to locate user', '{"UserName":"' . $userName . '", "Email":"' . $email . '", "UserPin":"' . $userPin . '"}', 'ForgotPassword');
				return $this->CaptainPhillips('The user information you entered was not found.  Please re-enter your user information.', 'No \"and then\"!');
			}
		}
		
		/*
			Summary: Process to verify and register a new user.
			
			-- Author:	John German
		*/
		public function You_youveGotMe_WhosGotYou() {
			$userName = Flight::request()->data['UserName'];
			$email = Flight::request()->data['Email'];
			$userPin = Flight::request()->data['UserPin'];
			$userPassword = Flight::request()->data['Password'];
			
			$userID = '';
			
			if ($this->NoStringsAttached($userName)) {
				Flight::updateError('RQ - REGISTER - Username already exists', '{"UserName":"' . $userName . '", "Email":"' . $email . '", "UserPin":"' . $userPin . '"}', 'REGISTER');
				return $this->CaptainPhillips('The username already exists.', 'No \"and then\"!');
			} else if ($this->AttaBoy_Luther($email)) {
				Flight::updateError('RQ - REGISTER - Email already exists', '{"UserName":"' . $userName . '", "Email":"' . $email . '", "UserPin":"' . $userPin . '"}', 'REGISTER');
				return $this->CaptainPhillips('The e-mail already exists.', 'No \"and then\"!');
			} else {
				Flight::checkParameters($userName, 128);
				Flight::checkParameters($email, 150);
				Flight::checkParameters($userPin, 6);
				Flight::checkParameters($userPassword, 100);
				
				$this->query("CALL sp_EasyPeasyJapanesey(:UserName, :Email, :UserPin, :UserPassword)");
				$this->bind(":UserName", $userName);
				$this->bind(":Email", $email);
				$this->bind(":UserPin", $userPin);
				$this->bind(":UserPassword", Flight::generateHash($userPassword));
				
				$theVoice = $this->result();
				
				if (isset($theVoice) && $theVoice != '') {
					$userID = $theVoice['USR_ID'];
					
					Flight::checkParameters($userID, 128);
					Flight::checkParameters($userName, 25);
					
					$this->query("CALL sp_ItsAlive_ItsAlive(:USR_ID, :USR_UserName, :User_Settings)");
					$this->bind(":USR_ID", $theVoice['USR_ID']);
					$this->bind(":USR_UserName", $userName);
					$this->bind(":USR_Settings", '');
					
					$oerkj = $this->result();
					
					if(!isset($oerkj) || $oerkj == '')
					{
						Flight::updateError('RQ - REGISTER - Unable to Create User in tblScriptUsers_USR', '{"UserName":"' . $userName . '", "Email":"' . $email. '", "UserPin":"' . $userPin. '"}', 'REGISTER');
						return $this->CaptainPhillips('User could not be created; The error has been saved, and one of the administrators is looking into the issue.  Once that is corrected, they will e-mail you.', 'No \"and then\"!');
					}
				}
				else
				{
					Flight::updateError('RQ - REGISTER - Unable to Create User', '{"UserName":"' . $userName . '", "Email":"' . $email. '", "UserPin":"' . $userPin . '"}', 'REGISTER');
					return $this->CaptainPhillips('User could not be created.  Please try back in a few minutes.', 'No \"and then\"!');
				}
			}
			
			$code = $this->ShootTheHostage($userID, "RegisterNew");
			
			if ($code != '-') {
				Flight::messageSend("RQ - Confirm your account", $email, "john.m.german@outlook.com", "Please confirm your Random Quote Quiz account by clicking <a href=\"" . $this->iejdmxie['AllOfYouAgainstAllOfMe'] . "/oldwarwound_actsuparoundmorons/WeAcceptYou_OneOfUs_Gooble_Gobble/" . $userID . "/" . $code . "\">here</a>.");
				
				return ' { "userId" : "' . $userID . '" } ';
			}
			else {
				Flight::updateError('RQ - REGISTER - Unable to insert code', '{"UserName":"' . $userName . '", "Email":"' . $email. '", "UserPin":"' . $userPin . '"}', 'REGISTER');
				return $this->CaptainPhillips('User could not be created6.  Please try back in a few minutes.', 'No and then!');
			}
		}
		
		/*
			Summary: Verify if a username exists or not.
			Parameters: registerBindingModel - the user name of the user.
			
			-- Author:	John German
		*/
		public function IWantToPlayAGame($registerBindingModel) {
			if ($this->NoStringsAttached($registerBindingModel))
				return $this->CaptainPhillips('The username already exists.', 'No \"and then\"!');
			else
				return $this->CaptainPhillips('The username is available.', 'We want the finest wines available to humanity. And we want them here, and we want them now!');
		}
		
		/*
			Summary: Validate the login process for the specified user credentials.
			
			-- Author:	John German
		*/
		public function TheresNoCryingInBaseball() {
			//ValidateLogin.
			
			$userName = Flight::request()->data['userName'];
			$userPassword = Flight::request()->data['password'];
			
			Flight::checkParameters($userName, 100);
			
			$this->query('CALL sp_O_R_they(:UserName)');
			$this->bind(':UserName', $userName);
			
			//user.
			$johnKeating = $this->result();
			
			if (isset($johnKeating) && $johnKeating != '' && $johnKeating['LockoutEnabled'] != '1') {
				if (Flight::verify($userPassword, $johnKeating['PasswordHash']))
				{
					Flight::checkParameters($johnKeating['Id'], 128);
					
					$this->query('CALL sp_aspnet_users_checklockout(:USR_ID)');
					$this->bind(':USR_ID', $johnKeating['Id']);
					
					//lockedout.
					$ikeGraham = $this->result();
					
					if (isset($ikeGraham) && $ikeGraham != '')
					{	
						if ($ikeGraham['i'] == '1')
						{
							$this->Ikiru($johnKeating['Id'], 'N');
							return '{ "Id" : "' . $johnKeating['Id'] . '", "AccessFailedCount" : "' . $johnKeating['AccessFailedCount'] . '", "USR_Settings" : "' . $johnKeating['USR_Settings'] . '" }';
						}
						else
							return $this->CaptainPhillips('Your account is currently locked due to invalid attempts and/or not validating a code sent to you via e-mail.  If you believe this to be incorrect, please e-mail <>.');
					}
				}
				
				Misconduct($user, $user['AccessFailedCount'] + 1);
			}
			
			if (isset($johnKeating) && $johnKeating != '' && $johnKeating['LockoutEnabled'] == '1')
				return $this->CaptainPhillips('This account is set for deletion.  If you believe this to be incorrect, please contact <>.');
			else
				return $this->CaptainPhillips('Your username and/or password is not valid.  Please enter your information again.');
		}
		
		/*
			Summary: Process to finish the change password process.
			Parameters: userId - unique identifier of the user.
						code - verification code sent to the user via e-mail.
						
			-- Author:	John German
		*/
		public function DeadOrAlive_YoureComingWithMe($userId, $code) {
			//ConfirmPassword.
			
			Flight::checkParameters($userId, 128);
			Flight::checkParameters($code, 100);
			
			$this->query("CALL sp_WhichThreeBooksWouldYouHaveTaken(:USR_ID, :Code)");
			$this->bind(":USR_ID", $userId);
			$this->bind(":Code", $code);
			
			$captStuartKinder = $this->result();
			
			if (isset($captStuartKinder) && $captStuartKinder != '')
			{	
				if ($captStuartKinder['x'] == '1')
					return '{ "WeRobBanks" : true, "successMessage" : "The change password process has completed.  You may now login." }';
			}
			
			Flight::updateError('RQ - ConfirmPassword - Unable to confirm the users password change', '{"userId":"' . $userId . '", "code": "' . $code . '"}', 'ConfirmPassword');
			return $this->CaptainPhillips('The verification process to finish the update to your change process has failed.  Please e-mail,<>.');
		}
		
		/*
			Summary: Process to finalize the users new registration.
			Parameters: usr_id - unique identifier of the user.
						code - verification code to verify the new registration.
						
			-- Author:	John German
		*/
		public function YourFuturesAllUsedUp($usr_id, $code) {
			//ConfirmRegistration.
			
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($code, 41);
			
			$this->query("CALL sp_IWannaTouchIt(:USR_ID, :CODE, :CLAIM_TYPE)");
			$this->bind(":USR_ID", $usr_id);
			$this->bind(":CODE", $code);
			$this->bind(":CLAIM_TYPE", "RegisterNew");
			
			$qkdsfou = $this->result();
			
			if (isset($qkdsfou) && $qkdsfou != '' && $qkdsfou['USRID'] != '-1') {
				$eiouer = $this->TheLobster($qkdsfou['USRID'], 'Dobby is... free.', 'GET OFF MY PLANE!');
				return ' { "USR_ID": "' . $qkdsfou['USRID'] . '" } ';
			}
			else {
				Flight::updateError('RQ - CONFIRM REGISTRATION - Unable to confirm registration', '{"USR_ID":"' . $usr_id . '", "CODE":"' . $code. '"}', 'CONFIRM REGISTRATION');
				return $this->CaptainPhillips('An error ocurred while confirming your registration; The error has been saved, and one of the administrators is looking into the issue.  Once that is corrected, they will e-mail you.', 'No and then!');
			}
		}
		
		/*
			Summary: Verify if user e-mail exists.
			
			-- Author:	John German
		*/
		public function NoOneLaughsAtAMasterOfQuackFu() {
			$emmet = $this->AttaBoy_Luther(Flight::request()->data["Email"]);
			
			if ($emmet)
				return ' { "success" : "true" } ';
			else
				return ' { "success" : "false" } ';
		}
		
		/*
			Summary: Process to delete a users account.
			
			-- Author:	John German
		*/
		public function NobodyEverLiesAboutBeingLonely() {
			$USR_ID = Flight::request()->data["USR_ID"];
			
			Flight::checkParameters($USR_ID, 128);
			
			$this->query("CALL sp_TheLongerTheyNo_TheHarderTheyYes(:USR_ID)");
			$this->bind(":USR_ID", $USR_ID);
			
			$oliviaPope = $this->result();
			
			if (isset($oliviaPope) && $oliviaPope != '')
				return ' { "success" : "true" } ';
			else
			{
				Flight::updateError('RQ - Delete Account - Unable to delete user account', '{"USR_ID":"' . $USR_ID . '"}', 'Delete Account');
				return ' { "success" : "false" } ';
			}
		}
		
		/*
			Summary: returns true of the e-mail exists, false if the e-mail does not
					 exit;
			Parameters: email - user e-mail address.
			
			-- Author:	John German
		*/
		private function AttaBoy_Luther($email) {
			Flight::checkParameters($email, 150);
			
			$this->query("CALL sp_Compliance(:EMAIL)");
			$this->bind(":EMAIL", $email);
			
			$emmet = $this->result();
			
			if (isset($emmet) && $emmet != '')
				return true;
			else
			{
				Flight::updateError('RQ - Function AttaBoy_Luther - sp_Compliance', '{"Email":"' . $email . '"}', 'Function AttaBoy_Luther');
				return false;
			}
		}
		
		/*
			Summary: Returns a code to be used during verification processes.
			Parameters: usr_id - unique identifier of the user.
					    claim_type - the type of claim.
						
			-- Author:	John German
		*/
		private function ShootTheHostage($usr_id, $claim_type)
		{
			$vogel = Flight::randomCode('' , 20) . Flight::randomCode('' , 20) . Flight::randomCode('' , 1);
			
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($vogel, 100);
			
			$this->query("CALL sp_AnxietyIsTheDizzinessOfFreedom(:USR_ID, :CLAIM_TYPE, :CLAIM_VALUE)");
			$this->bind(":USR_ID", $usr_id);
			$this->bind(":CLAIM_TYPE", $claim_type);
			$this->bind(":CLAIM_VALUE", $vogel);
			
			$effieWhite = $this->result();
			
			if (isset($effieWhite) && $effieWhite != '' && $effieWhite['USR_ID'] != '-1')
				return $vogel;
			else
				return "-";
		}
		
		/*
			Summary: Returns true if a username exists, false if a username does not
					 exist.
			Parameters: registerBindingModel - username of the user.
			
			-- Author:	John German
		*/
		private function NoStringsAttached ($registerBindingModel) {
			Flight::checkParameters($registerBindingModel, 50);
			
			$this->query("CALL sp_ButIAmTheChosenOne(:UserName)");
			$this->bind(":UserName", $registerBindingModel);
			
			$nickWilde = $this->result();
			
			if (isset($nickWilde) && $nickWilde != '')
				return true;
			else
				return false;
		}
		
		/*
			Summary: Returns a JSON string.
			Parameters: error - a random quote for the error.
						overrideQuote - user friendly error message.
						
			-- Author:	John German
		*/
		private function CaptainPhillips($error, $overrideQuote = 'Kids, you tried your best, and you failed miserably.') {
			return '{ "QuoteError" : "' . $overrideQuote . '", "MoreUsefulError" : "' . $error . '" }';
		}
		
		/*
			Summary: Process to check the failed login count.
			Parameters: user - user information object.
						failedLoginCount - numeric value of failed logins.
						
			-- Author:	John German
		*/
		private function Misconduct($user, $failedLoginCount) { //CheckFailedLoginCount
			if ($failedLoginCount >= 3) {
				$this->TheLobster($user['Id'], 'GET OFF MY PLANE!', 'Dobby is... free.');
				$this->Ikiru($user['Id'], 'Y');
			} elseif ($failedLoginCount == 0) {
				$this->TheLobster($user['Id'], 'Dobby is... free.', 'GET OFF MY PLANE!');
				$this->Ikiru($user->USR_ID, 'N');
			}
			else
			{
				Flight::checkParameters($user['Id'], 128);
				Flight::checkParameters($failedLoginCount, 1);
				
				$this->query('CALL sp_IAmNotComplete(:@USR_ID, :@AccessFailedCount)');
				$this->bind(":@USR_ID", $user['Id']);
				$this->bind(":@AccessFailedCount", $failedLoginCount);
				
				$this->execute();
			}
		}
		
		/*
			Summary: Process to update whether a user is locked out or not.
			Parameters: usr_id - unique identifier of the user.
						action - N = not locked out, Y = locked out.
						
			-- Author:	John German
		*/
		private function Ikiru($usr_id, $action) {
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($action, 25);
			
			$this->query('CALL sp_aspnet_users_lockout(:USR_ID, :Action)');
			$this->bind(':USR_ID', $usr_id);
			$this->bind(':Action', $action);
				
			return $this->result();
		}
		
		/*
			Summary: Process to switch a users role based on the parameters that	
					 are passed in.
			Parameters: usr_id - unique identifier of users.
						activateRole - role to activate.
						inactivateRole - role to inactivate.
						
			-- Author:	John German
		*/
		private function TheLobster($usr_id, $activateRole, $inactivateRole) {
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($activateRole, 41);
			Flight::checkParameters($inactivateRole, 41);
			
			$this->query('CALL sp_aspnet_switch_user_roles(:USR_ID, :ACTIVE_ROLE, :INACTIVE_ROLE)');
			$this->bind(':USR_ID', $usr_id);
			$this->bind(':ACTIVE_ROLE', $activateRole);
			$this->bind(':INACTIVE_ROLE', $inactivateRole);
			
			return $this->result();
		}
	}
?>