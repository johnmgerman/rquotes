<?php
	require '../flight/Flight.php';
	require '../models/database_john_german.php';
	require '../models/IWillFindYouAndIWillKillYou_john_German.php';
	require '../runforestrun/BecaseYouSawMeWhenIWasInvisible_john_german.php';
	
	//http://novaframework.com/documentation/v3/overview-change-log
	//http://www.gajotres.net/best-available-php-restful-micro-frameworks/2/
	
	Flight::set('model', new IWillFindYouAndIWillKillYouModel());
	Flight::set('w', new BecauseYouSawMeWhenIWasInvisible());
	
	/*====================================================================================
		
												BEGIN GET
		
	=====================================================================================*/
	
	Flight::route('GET /w', function() {
		if (empty($_SERVER['HTTP_REFERER']))
			echo 'asdfasdf';
		else
			echo $_SERVER['HTTP_REFERER'];
		
		//Flight::messageSend("Random Quote - Forgot Username", "insecurepanzies@localhost", "valleyfullofpanzies@localhost", "Below is your username: <br/><br/>Username: asdflkkjwerpouasdflkj");
               // echo json_encode('{ "asfd": "asdfd"}', JSON_PRETTY_PRINT);
		//echo json_encode(Flight::get('model')->W6(), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /imustbreakyou/@ewiudf', function($ewiudf) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.', 'I\'m the captain now.')))
			echo json_encode(Flight::get('model')->FunnyGirl($ewiudf), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /youvegotmail/@type', function($type) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.', 'I\'m the captain now.')))
			echo json_encode(Flight::get('model')->Compliance($type), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /repent', function() {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.')))
			echo json_encode(Flight::get('model')->Gosh(), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /rosebud/(@beginYear/@endYear)', function($beginYear, $endYear) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.')))
			echo json_encode(Flight::get('model')->JUSTABitOutside($beginYear, $endYear), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /illhavewhatsheshaving/@sqe_id', function($sqe_id) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.')))
			echo json_encode(Flight::get('model')->FUBAR($sqe_id), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /illbeback/@sqs_id', function($sqs_id) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.')))
			echo json_encode(Flight::get('model')->ReleaseTheKraken($sqs_id), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /IWantToBeAlone', function() {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.')))
			echo json_encode(Flight::get('model')->NoWorse_Human_Human(), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /waxon_waxoff(/@quoteTypes)', function($quoteTypes) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.')))
			echo json_encode(Flight::get('model')->ImSpartacus($quoteTypes), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /wearegroot/@searchBy/@searchText/@dates(/@types)', function($searchBy, $searchText, $dates, $types) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.')))
			echo json_encode(Flight::get('model')->SuitUp($searchBy, $searchText, $dates, $types), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /gethistoryofuseranswers/@usr_id/@howToGo/@searchType', function($usr_id, $howToGo, $searchType) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.')))
			echo json_encode(Flight::get('model')->ISeeDeadPeople($usr_id, $howToGo, $searchType), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /rounduptheusualsuspects/@sortBy', function($sortBy) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.')))
			echo json_encode(Flight::get('model')->LordVader_Rise($sortBy), JSON_PRETTY_PRINT);
	});
	
	Flight::route('GET /MyPrecious/@usr_id', function($user_id) {
		//if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.')))
			echo json_encode(Flight::get('model')->ILikeThemFrenchFriedPotaters($user_id), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /TheForceIsStrongWithThisOne/@decadesString/@videosOnly(/@quotesFor)', function($decadesString, $videosOnly, $quotesFor) {
	    //echo $_SERVER['HTTP_REFERER'];
	    //echo 'adsf';
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.', 'I\'m the captain now.')))
			echo json_encode(Flight::get('model')->TheThingsYouOwnEndUpOwningYou($decadesString, $videosOnly, $quotesFor), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /NeverThinkWhileYourHungry6/@usr_id/@sqa_id/@dates', function($usr_id, $sqa_id, $dates) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.', 'I\'m the captain now.')))
			echo json_encode(Flight::get('model')->VeryGood_Louis_Short_ButPointless($usr_id, $sqa_id, $dates), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /NeverThinkWhileYourHungry/@usr_id/@sqa_id/@dates', function($usr_id, $sqa_id, $dates) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.', 'I\'m the captain now.')))
			echo json_encode(Flight::get('model')->VeryGood_Louis_Short_ButPointless($usr_id, $sqa_id, $dates), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /HeyStella', function() {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.')))
			echo json_encode(Flight::get('model')->RevealYourself_TinySongstress(), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /MadeItMa_TopOfTheWorld/@types/@usrid', function($types, $usrid) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is...free.')))
			echo json_encode(Flight::get('model')->IAintFightinThisWarForYou_Sir($types, $usrid), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /YouBroughtTwoTooMany/@usr_id/@howToGo/@searchType', function($usr_id, $howToGo, $searchType) {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is...free.')))
			echo json_encode(Flight::get('model')->NoWeezingTheJu_uice($usr_id, $howToGo, $searchType), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('GET /WellAlwaysHaveParis', function() {
		session_start();
		
		if (isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] == 'https://rquotes.tk/sdf.php') {
			if (isset($_SESSION['qekeruo'])) 
				echo $_SESSION['qekeruo'];
		}
		
		echo "";
	});
	
	/*====================================================================================
		
												BEGIN POST
		
	=====================================================================================*/
	
	/*
		-- Author:	John German
	*/
	Flight::route('POST /TheStuffThatDreamsAreMadeOf', function() {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('Dobby is... free.')))
			echo json_encode(Flight::get('model')->ILovePuppies(), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('POST /RunForrestRun', function() {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.','Dobby is... free.')))
			echo json_encode(Flight::get('model')->Pac_MansABadGuy(), JSON_PRETTY_PRINT);
	});
	
	/*
		-- Author:	John German
	*/
	Flight::route('POST /ImGonnaMakeHimAnOfferHeCantRefuse', function() {
		if (Flight::get('w')->NeverRubAnotherMansRhubarb(array('I\'m the captain now.','Dobby is... free.')))
			echo json_encode(Flight::get('model')->IAmMcLovin(), JSON_PRETTY_PRINT);
	});

	/*
		-- Author:	John German
	*/
	Flight::map('notFound', function(){
		echo json_encode('{ "error" : "I found out what the meaning of life is ... What\'s that? ... It sucks." }', JSON_PRETTY_PRINT);
	});
	
	/*
	Created by: John German, currently 35 years old, born November 8, 1980.
	*/

	Flight::start();
?>