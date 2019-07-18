<?php
Class User_acc extends CI_Model
{
	public function display()
	{
		$this->load->database();
		$sql = "INSERT INTO userdata VALUES(Null,".$this->db->escape('user1').",".$this->db-> escape('shazam').")";
		// $this->db->insert('mytable', $sql); 
		$result = $this-> db-> query($sql);
		
		if($result)
		{
			echo "success";
		}
			else
			{
				echo "sorry problem somewhere";
			}
		}
}

?>