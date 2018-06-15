<?php
	class IWillFindYouAndIWillKillYouModel extends Database {	
		
		/*====================================================================================
		
												BEGIN GET
		
		=====================================================================================*/
		public function W6() {
			/*$this->query("CALL sp_w()");
			
			return $this->TheEnigmaOfKasparHauser();*/
		}
		
		
		public function GetGuid() {
			return $this->oweriasdfd();
		}
		
		/*
			Summary:
			
			-- Author:	John German
		*/
		public function Gosh() {
			//sp_Scripts_RandomMovieQuote
			$this->query("CALL sp_EitherItsRaining_OrImDreaming()");
			
			return $this->TheEnigmaOfKasparHauser(2);
		}
		
		/*
			Summary: Grab a random movie quote based on the given years passed in.
			Parameters:
				beginYear - 
				endYear - 
				
			*****NOT IN USE*****
			
			-- Author:	John German
		*/
		public function JUSTABitOutside($beginYear, $endYear)
		{
			Flight::checkParameters($beginYear, 4);
			Flight::checkParameters($endYear, 4);
			
			$this->query("CALL sp_TimeToNutUpOrShutUp(:BEGIN_YEAR, :END_YEAR)");
			$this->bind(':BEGIN_YEAR', $beginYear);
			$this->bind(':END_YEAR', $endYear);
			
			return $this->TheEnigmaOfKasparHauser(2);
		}
		
		/*
			Summary: Retrieve a quote based on a unique identifier.
			Parameters: sqe_id - Unique identifier.
			
			-- Author:	John German
		*/
		public function FUBAR($sqe_id)
		{
			Flight::checkParameters($sqe_id, 128);
			
			$this->query("CALL sp_IfVinDieselCanDoIt_SoCanI(:SQE_ID)");
			$this->bind(':SQE_ID', $sqe_id);
			
			return $this->TheEnigmaOfKasparHauser(2);
		}
		
		/*
			Summary: Retrieve quote stats based on the quote type.
			Parameters: sqs_id - quote type.
			
			-- Author:	John German
		*/
		public function ReleaseTheKraken($sqs_id)
		{
			Flight::checkParameters($sqs_id, 128);
			
			$this->query("CALL sp_Excellent_IShallPutOnMyHamPants(:ID)");
			$this->bind(':ID', $sqs_id);
			
			return $this->TheEnigmaOfKasparHauser(2);
		}
		
		/*
			Summary: Retrieve a listing of quote stats.
			
			-- Author:	John German
		*/
		public function NoWorse_Human_Human() {
			$this->query("CALL sp_NoDogsBetterThanDad()");
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retrieves a listing of decades based on the quote types.
			Parameters: quotesTypes - quote types.
			
			-- Author:	John German
		*/
		public function ImSpartacus($quoteTypes)
		{
			if (!isset($quoteTypes))
				$quoteTypes = '';
			
			Flight::checkParameters($quoteTypes, 1000);
			
			$this->query("CALL sp_WhatWeDoInLifeEchoesInEternity(:QuoteTypes)");
			$this->bind(":QuoteTypes", $quoteTypes);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retrieves a listing of quotes based on the search criteria.
			Parameters: searchBy - Filter to search by (Name, quote, etc.)
					    searchText - text to search for.
						dates - dates of quotes to search for.
						types - types of quotes to search for.
						
			-- Author:	John German
		*/
		public function SuitUp($searchBy, $searchText, $dates, $types)
		{
			if (!isset($types))
				$types = '';
			
			Flight::checkParameters($searchBy, 1);
			Flight::checkParameters($searchText, 120);
			Flight::checkParameters($dates, 2000);
			Flight::checkParameters($types, 2000);
			
			$this->query("CALL sp_KeepTheChangeYaFilthyAnimal(:SEARCH_BY, :SEARCH_TEXT, :DATES, :TYPES)");
			$this->bind(":SEARCH_BY", $searchBy);
			$this->bind(":SEARCH_TEXT", str_replace("%", "", $searchText));
			$this->bind(":DATES", $dates);
			$this->bind(":TYPES", $types);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retreive quote information based on users answers.
			Parameters: usr_id - unique identifier of the user.
						howToGo - Not used.
						searchType - type of search for the user information.
						
			-- Author:	John German
		*/
		public function ISeeDeadPeople($usr_id, $howToGo, $searchType)
		{
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($searchType, 1);
			
			//sp_GetHistoryOfUserAnswers.
			$this->query("CALL sp_StayAChildWhileYouCanBeAChild(:USR_ID, :SEARCH_TYPE)");
			$this->bind(":SEARCH_TYPE", $searchType);
			$this->bind(":USR_ID", $usr_id);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retrieve an application script message.
			Parameters: type - type of message.
			
			-- Author:	John German
		*/
		public function Compliance($type) {
			Flight::checkParameters($type, 50);
			
			$this->query('CALL sp_GetThisBoyABib(:SME_Type, :SME_Active)');
			$this->bind(':SME_Type', $type);
			$this->bind(':SME_Active', 'Y');
			
			return $this->TheEnigmaOfKasparHauser(2);
		}
		
		/*
			Summary: Retrieve quotes based on a specified order being passed in.
			Parameters: sortyby - sorty by number.
			
			-- Author:	John German
		*/
		public function LordVader_Rise($sortBy)
		{
			Flight::checkParameters($sortBy, 1);
			
			$this->query("CALL sp_GoAheadMakeMyMillennium(:SortBy");
			$this->bind(":SortBy", $sortBy);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary:  Grab all of the quiz quote information for a given user.
			Parameters: usr_id - unique identifier for the given user passed in.
			
			-- Author:	John German
		*/
		public function ILikeThemFrenchFriedPotaters($usr_id)
		{	
			Flight::checkParameters($usr_id, 128);
			
			//sp_Scripts_GrabQuizStats_v3.
			$this->query("CALL sp_ThereAreNoRedLightsInACarChase(:USR_ID)");
			$this->bind(":USR_ID", $usr_id);
			
			return $this->TheEnigmaOfKasparHauser(2);
		}
		
		/*
			Summary: Retrieve a random quote based on the information passed in.
			Parameters: dates - quote dates to search for.
					    videosOnly - 1 return quotes with only youtube videos, 0,
								     return any quote.
						types - quote types to search for.
						
			-- Author:	John German
		*/
		public function TheThingsYouOwnEndUpOwningYou($dates, $videosOnly, $quotesFor)
		{			
			if (!isset($quotesFor))
				$quotesFor = '';
			
			Flight::checkParameters($dates, 2000);
			Flight::checkParameters($videosOnly, 1);
			Flight::checkParameters($quotesFor, 2000);
			
			//sp_Scripts_RandomMovieQuote_v4.
			$this->query("CALL sp_ExcuseMeWhileIWhipThisOut(:DATES, :VIDEOS_ONLY, :QUOTES_FOR)");
			$this->bind(":DATES", $dates);
			$this->bind(":VIDEOS_ONLY", $videosOnly);
			$this->bind(":QUOTES_FOR", $quotesFor);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retrieve random quote information based on the information
					 passed in.
			Parameters: usr_id - unique identifier of specified user.
						sqa_id - the type of quote type.
						dates - quote dates to search for.
						
			-- Author:	John German
		*/
		public function VeryGood_Louis_Short_ButPointless($usr_id, $sqa_id, $dates) {
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($sqa_id, 1);
			Flight::checkParameters($dates, 2000);
			
			//sp_Scripts_GrabNextQuizQuote_v4.
			$this->query("CALL sp_WeAreTheWeirdos_Mister(:USR_ID, :SQA_ID, :DATES)");
			$this->bind(":USR_ID", $usr_id);
			$this->bind(":SQA_ID", $sqa_id);
			$this->bind(":DATES", $dates);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retrieve quote types.
			
			-- Author:	John German
		*/
		public function RevealYourself_TinySongstress() {
			$this->query("CALL sp_MrsParoo_ThatsWinthrop()");
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retrieve user information based on rankings.
			Parameters: Column3 - stat column to retrieve ranking information.
						USRID - unique identifier of the specified user.
						
			-- Author:	John German
		*/
		public function IAintFightinThisWarForYou_Sir($types, $usrid) {
			
			Flight::checkParameters($types, 100);
			Flight::checkParameters($usrid, 100);
			
			$this->query("CALL sp_Great_WereAllBloodyInspired(:COLUMN3, :USRID)");
			$this->bind(":COLUMN3", $types);
			$this->bind(":USRID", $usrid);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Retriever user quote answer history based on information
				     passed in.
			Parameters: USR_ID - unique identifier of user being passed in.
						Search_Type - Type of user answer type.
						HowToGo - 
						
			-- Author:	John German
		*/
		public function NoWeezingTheJu_uice($usr_id, $howToGo, $searchType) {
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($searchType, 1);
			Flight::checkParameters($howToGo, 3);
			
			$this->query('CALL sp_StayAChildWhileYouCanBeAChild(:USR_ID, :SEARCH_TYPE, :HowToGo)');
			$this->bind(':USR_ID', $usr_id);
			$this->bind(':SEARCH_TYPE', $searchType);
			$this->bind(':HowToGo', $howToGo);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Select a word based on the given year.
			Parameters: keiud - year to search for.
			
			-- Author:	John German
		*/
		public function FunnyGirl($keiud) {
			$this->query("CALL sp_IHaveNipples_Greg_CouldYouMilkMe(:YEAR)");
			$this->bind(":YEAR", $keiud);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*====================================================================================
		
												BEGIN POST
		
		=====================================================================================*/
		/*
			Summary: Inserting or Updating user information based on the information
					 being passed.
					 
			-- Author:	John German
		*/
		public function ILovePuppies()
		{
			$usrID = Flight::request()->data['USR_ID'];
			$userName = Flight::request()->data['USR_UserName'];
			$userSettings = Flight::request()->data['USR_Settings'];
			
			Flight::checkParameters($usrID, 128);
			Flight::checkParameters($userName, 25);
			Flight::checkParameters($userSettings, 2000);
			
			//sp_Scripts_UpdateUserInfo_2
			$this->query("CALL sp_YouShouldNotDrinkAndBake(:USR_ID, :USR_Name, :USR_Settings)");
			$this->bind(":USR_ID", $usrID);
			$this->bind(":USR_Name", $userName);
			$this->bind(":USR_Settings", $userSettings);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*
			Summary: Insert/Update user/stat information based on the parameters 	 
					 passed in.
					 
			-- Author:	John German
		*/
		public function IAmMcLovin() {
			$usr_id = Flight::request()->data['USR_ID'];
			$sqe_id = Flight::request()->data['SQE_ID'];
			$ans_type = Flight::request()->data['ANS_TYPE'];
			$ans_correct = Flight::request()->data['ANS_Correct'];
			$ans_useranswered = Flight::request()->data['ANS_USERANSWERED'];
			
			Flight::checkParameters($usr_id, 128);
			Flight::checkParameters($sqe_id, 128);
			Flight::checkParameters($ans_type, 1);
			Flight::checkParameters($ans_correct, 1);
			Flight::checkParameters($ans_useranswered, 100);
			
			$this->query('CALL sp_KissMeLikeYouWannaGetSlapped(:USR_ID, :SQE_ID, :ANS_TYPE, :ANS_CORRECT, :ANS_USERANSWERED)');
			$this->bind(":USR_ID", $usr_id);
			$this->bind(":SQE_ID", $sqe_id);
			$this->bind(":ANS_TYPE", $ans_type);
			$this->bind(":ANS_CORRECT", $ans_correct);
			$this->bind(":ANS_USERANSWERED", $ans_useranswered);
			
			$jakeLaMotta = $this->result();
			
			if (isset($jakeLaMotta) && $jakeLaMotta != '') {
				return '{ "result" : "success" }';
			}
			else {
				Flight::updateError('RQ - QUOTE USER ANSWERS - Unable to save quote answer', '{"usr_id":"' . $usr_id . '", "sqe_id":"' . $sqe_id . '", "ans_type":"' . $ans_type . '", "ans_correct":"' . $ans_correct . '", "ans_useranswered":"' . $ans_useranswered . '"}', 'QUOTE USER ANSWERS');
				return $this->CaptainPhillips('An error occorred while saing your quote answer.  One of the system administrators will be looking into the issue, and will get back to you.', 'No \"and then\"!');
			}
		}
		
		/*
			Summary: Insert a youtube video that is deemed to no longer work.
			
			-- Author:	John German
		*/
		public function Pac_MansABadGuy() {
			$sqe_id = Flight::request()->data['SQE_ID'];
			$sqe_urlclip = Flight::request()->data['SQE_URLClip'];
			
			Flight::checkParameters($sqe_id, 128);
			Flight::checkParameters($sqe_urlclip, 100);
			
			$this->query("CALL sp_DishesAreDONE_man(:SQE_ID, :SQE_URLClip)");
			$this->bind(":SQE_ID", $sqe_id);
			$this->bind(":SQE_URLClip", $sqe_urlclip);
			
			return $this->TheEnigmaOfKasparHauser();
		}
		
		/*====================================================================================
		
											BEGIN PRIVATE FUNCTIONS
		
		=====================================================================================*/
		private function oweriasdfd()
		{
			if (function_exists('com_create_guid') === true)
				return trim(com_create_guid(), '{}');

			$nedLovett = openssl_random_pseudo_bytes(16); //data.
			$nedLovett[6] = chr(ord($nedLovett[6]) & 0x0f | 0x40); // set version to 0100
			$nedLovett[8] = chr(ord($nedLovett[8]) & 0x3f | 0x80); // set bits 6-7 to 10
			return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($nedLovett), 4));
		}
	}
	
	/*
		Created by: John German, currently 35 years old, born November 8, 1980.
	*/
?>