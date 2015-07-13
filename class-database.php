<?php
class Database {
	public $db;

	/**
	 * Open a connection
	 * @param string $host 
	 * @param string $user 
	 * @param string $pass 
	 * @param string $db_name 
	 * @return pointer or false
	 */
	public function __construct($host, $user, $pass, $db_name) {
		$this->db = mysql_connect($host, $user, $pass);
		if(!$this->db) {
			exit("No connection with database");
		}
		if(!mysql_select_db($db_name, $this->db)) {
			exit("<br>No table");
		}
		return $this->db;
	}

	/**
	 * Get all rows of the table
	 * @return pointer or false
	 */
	public function get_all_rows() {
		$querySelect = "SELECT * FROM tb_students";
		$queryResult = mysql_query($querySelect);

		return $queryResult;
	}

	/**
	 * Add one row in the table
	 * @param string $name
	 * @param string $lastname
	 * @param string $gender
	 * @param integer $age
	 * @param string $group
	 * @param string $department
	 * @return boolean
	 */
	public function add_one_row($name, $lastname, $gender, $age, $group, $department) {
		$queryInsert = "INSERT INTO tb_students	VALUES('', '$name', '$lastname', '$gender', '$age', '$group', '$department')";
		$queryResult = mysql_query($queryInsert);

		return $queryResult;
	}

	/**
	 * Get last row from the table
	 * @return pointer or false
	 */
	public function get_last_row() {
		$querySelect = "SELECT * FROM tb_students ORDER BY student_id DESC LIMIT 1";
		$queryResult = mysql_query($querySelect);

		return $queryResult;
	}

	/**
	 * Delete one row from the table
	 * @param integer $idToDel
	 * @return boolean
	 */
	public function delete_one_row($idToDel) {
		$queryDelete = "DELETE FROM tb_students WHERE student_id = '".$idToDel."'";
		$queryResult = mysql_query($queryDelete);

		return $queryResult;
	}

	/**
	 * Update one cell in the table
	 * @param string $cell
	 * @param string $column
	 * @param integer $row
	 * @return boolean
	 */
	public function update_one_cell($column, $data, $row) {
		$queryUpdate = "UPDATE tb_students SET ".$column." = '".$data."' WHERE student_id = '".$row."'";
		$queryResult = mysql_query($queryUpdate);

		return $queryResult;
	}
}
?>