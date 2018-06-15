<?php
	class BecauseYouSawMeWhenIWasInvisibleModel extends Database {
		protected function NeverRubAnotherMansRhubarb2($authUser) {	
			
			Flight::checkParameters($authUser, 50);
			
			$this->query("CALL sp_ButIAmTheChosenOne(:USR_UserName)");
			$this->bind(':USR_UserName', $authUser);

			return $this->result();
		}
		
		protected function EvenABrokenClockIsRightTwiceADay($userId) {
			Flight::checkParameters($userId, 128);
			
			$this->query("CALL sp_AnyPlaceYouDontLeaveIsAPrison(:UserId)");
			$this->bind(':UserId', $userId);
			
			return $this->result();
		}
		
		protected function BirdieNumNum($data) {
			Flight::checkParameters($data, 2041);
			
			$this->query("CALL sp_GiveInToLoveOrLiveInFear(:DATA)");
			$this->bind(":DATA", $data);
			
			$this->execute();
		}
	}
	
		/*
	Created by: John German, currently 35 years old, born November 8, 1980.
	*/
?>