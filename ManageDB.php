<?php
include_once 'DB.php';
class ManageBD extends DB{
  public function getQueries(){

	//$advisor = $this->connect()->query('SELECT * FROM advisor');

	//$classroom =$this->connect()->query('SELECT * FROM classroom');
	$course=$this->connect()->query('SELECT * FROM course');
	$agregation=$this->connect()->query('SELECT COUNT(*) AS total_departments FROM department');
	//$prereq=$this->connect()->query('SELECT * FROM prereq');
	//$section=$this->connect()->query('SELECT * FROM section');
	$union=$this->connect()->query('SELECT ID, name, dept_name FROM student UNION SELECT ID, name, dept_name FROM instructor');
	$except=$this->connect()->query('SELECT * FROM department EXCEPT SELECT * FROM department WHERE budget < 85000');
	$queries = array (
		//"advisor"=>$advisor,
		//"classroom"=>$classroom,
		"course"=>$course,
		"total_departments"=>$agregation,
		//"prereq"=>$prereq,
		//"section"=>$section,
		"people"=>$union,
		"departments with a budget greater than 85000"=>$except,
	);

		return $queries;

	}
}
?>
