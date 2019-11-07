<?php
class user extends dbh {
	public function getallusers(){
		$stm = $this->connect()->query("SELECT * FROM  phplessons");
		while ($row = $stm->fetch()){
			$uid = $row['uid'];
			return $uid;
		}
	}
	public function getuserswhere($uid){
		$id = 1;
		$uid = "John";
		$stm = $this->connect()->prepare("SELECT * FROM phplessons WHERE id=? AND uid=?");
		$stm->execute([$id, $uid]);

		if($stm->rowCount()){
			while ($row = $stm->fetch())
				return $row['uid'];
		}
	}
}
?>

