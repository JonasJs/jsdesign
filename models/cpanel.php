<?php

class cpanel extends model(){

	public function sobre($textAreaSobre){
		$sql = "INSERT INTO sobre SET sobre = '$textAreaSobre'";
		$sql = $this->db->query($sql);
	}
}