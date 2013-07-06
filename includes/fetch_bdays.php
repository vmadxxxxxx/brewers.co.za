<?php

	$link = mysql_connect($db_connect['host'], $db_connect['user'], $db_connect['pass']);
	if (!$link) {
	    die('Could not connect: ' . mysql_error());
	}
	if (!mysql_select_db($db_connect['db'])) {
	    echo "Unable to select database: " . mysql_error();
	    exit;
	}
	$today = date('m-d',strtotime('today'));
	$sql_employees = 	'SELECT 
							`Employee`.`id` AS employee_id, `Employee`.`agency_id`, `Employee`.`title_id`, `Employee`.`name` AS employee_name, `Employee`.`surname` AS employee_surname, 
							`Agency`.`id` AS agency_id, `Agency`.`name` AS agency_name, 
							`Title`.`id` AS title_id, `Title`.`name` AS title_name 
						FROM `employees` AS `Employee` 
						LEFT JOIN `agencies` AS `Agency` ON (`Employee`.`agency_id` = `Agency`.`id`) 
						LEFT JOIN `titles` AS `Title` ON (`Employee`.`title_id` = `Title`.`id`) 
						WHERE `Employee`.`birthday` LIKE \'%'.$today.'\'
						GROUP BY `Employee`.`email`
						ORDER BY `Employee`.`name` ASC, `Employee`.`surname` ASC';
	
	$sql_people = 		'SELECT 	
							`Person`.`id` AS person_id, `Person`.`name` AS person_name, `Person`.`surname` AS person_surname, `Person`.`company_id`, `Person`.`department_id`, 
							`Company`.`id` AS company_id, `Company`.`name` AS company_name, 
							`Department`.`id` AS department_id, `Department`.`name` AS department_name 
						FROM `people` AS `Person` 
						LEFT JOIN `companies` AS `Company` ON (`Person`.`company_id` = `Company`.`id`) 
						LEFT JOIN `departments` AS `Department` ON (`Person`.`department_id` = `Department`.`id`) 
						WHERE `Person`.`birthday` LIKE \'%'.$today.'\'
						GROUP BY `Person`.`email`
						ORDER BY `Person`.`name` ASC, `Person`.`surname` ASC';	
	
	$sql_staff = 		'SELECT 
							`Staff`.`id` AS staff_id, `Staff`.`name` AS staff_name, `Staff`.`surname` AS staff_surname, `Staff`.`publication_id`, `Staff`.`sub_division_id`,
							`Publication`.`id` AS publication_id, `Publication`.`name` AS publication_name,
							`SubDivision`.`id` AS sub_div_id, `SubDivision`.`name` AS sub_div_name
						FROM `staffs` AS `Staff` 
						LEFT JOIN `publications` AS `Publication` ON (`Staff`.`publication_id` = `Publication`.`id`) 
						LEFT JOIN `sub_divisions` AS `SubDivision` ON (`Staff`.`sub_division_id` = `SubDivision`.`id`) 
						WHERE `Staff`.`birthday` LIKE \'%'.$today.'\'
						GROUP BY `Staff`.`email`
						ORDER BY `Staff`.`name` ASC, `Staff`.`surname` ASC';
	
	$employees = mysql_query($sql_employees);
	$people = mysql_query($sql_people);
	$staffs = mysql_query($sql_staff);
	
	
	if (date('l', time()) == 'Friday') {
		$date_sat = date('m-d',strtotime('+1 day'));
		$date_sun = date('m-d',strtotime('+2 days'));
		
		
		$sql_employees = 	'SELECT 
								`Employee`.`id` AS employee_id, `Employee`.`agency_id`, `Employee`.`title_id`, `Employee`.`name` AS employee_name, `Employee`.`surname` AS employee_surname, 
								`Agency`.`id` AS agency_id, `Agency`.`name` AS agency_name, 
								`Title`.`id` AS title_id, `Title`.`name` AS title_name 
							FROM `employees` AS `Employee` 
							LEFT JOIN `agencies` AS `Agency` ON (`Employee`.`agency_id` = `Agency`.`id`) 
							LEFT JOIN `titles` AS `Title` ON (`Employee`.`title_id` = `Title`.`id`) 
							WHERE `Employee`.`birthday` LIKE \'%'.$date_sat.'\'
							GROUP BY `Employee`.`email`
							ORDER BY `Employee`.`name` ASC, `Employee`.`surname` ASC';
		
		$sql_people = 		'SELECT 	
								`Person`.`id` AS person_id, `Person`.`name` AS person_name, `Person`.`surname` AS person_surname, `Person`.`company_id`, `Person`.`department_id`, 
								`Company`.`id` AS company_id, `Company`.`name` AS company_name, 
								`Department`.`id` AS department_id, `Department`.`name` AS department_name 
							FROM `people` AS `Person` 
							LEFT JOIN `companies` AS `Company` ON (`Person`.`company_id` = `Company`.`id`) 
							LEFT JOIN `departments` AS `Department` ON (`Person`.`department_id` = `Department`.`id`) 
							WHERE `Person`.`birthday` LIKE \'%'.$date_sat.'\'
							GROUP BY `Person`.`email`
							ORDER BY `Person`.`name` ASC, `Person`.`surname` ASC';	
		
		$sql_staff = 		'SELECT 
								`Staff`.`id` AS staff_id, `Staff`.`name` AS staff_name, `Staff`.`surname` AS staff_surname, `Staff`.`publication_id`, `Staff`.`sub_division_id`,
								`Publication`.`id` AS publication_id, `Publication`.`name` AS publication_name,
								`SubDivision`.`id` AS sub_div_id, `SubDivision`.`name` AS sub_div_name
							FROM `staffs` AS `Staff` 
							LEFT JOIN `publications` AS `Publication` ON (`Staff`.`publication_id` = `Publication`.`id`) 
							LEFT JOIN `sub_divisions` AS `SubDivision` ON (`Staff`.`sub_division_id` = `SubDivision`.`id`) 
							WHERE `Staff`.`birthday` LIKE \'%'.$date_sat.'\'
							GROUP BY `Staff`.`email`
							ORDER BY `Staff`.`name` ASC, `Staff`.`surname` ASC';
	
		$birthdays_sat = array('employees' => mysql_query($sql_employees), 'people' => mysql_query($sql_people), 'staffs' => mysql_query($sql_staff));
		

		$sql_employees = 	'SELECT 
								`Employee`.`id` AS employee_id, `Employee`.`agency_id`, `Employee`.`title_id`, `Employee`.`name` AS employee_name, `Employee`.`surname` AS employee_surname, 
								`Agency`.`id` AS agency_id, `Agency`.`name` AS agency_name, 
								`Title`.`id` AS title_id, `Title`.`name` AS title_name 
							FROM `employees` AS `Employee` 
							LEFT JOIN `agencies` AS `Agency` ON (`Employee`.`agency_id` = `Agency`.`id`) 
							LEFT JOIN `titles` AS `Title` ON (`Employee`.`title_id` = `Title`.`id`) 
							WHERE `Employee`.`birthday` LIKE \'%'.$date_sun.'\'
							GROUP BY `Employee`.`email`
							ORDER BY `Employee`.`name` ASC, `Employee`.`surname` ASC';
		
		$sql_people = 		'SELECT 	
								`Person`.`id` AS person_id, `Person`.`name` AS person_name, `Person`.`surname` AS person_surname, `Person`.`company_id`, `Person`.`department_id`, 
								`Company`.`id` AS company_id, `Company`.`name` AS company_name, 
								`Department`.`id` AS department_id, `Department`.`name` AS department_name 
							FROM `people` AS `Person` 
							LEFT JOIN `companies` AS `Company` ON (`Person`.`company_id` = `Company`.`id`) 
							LEFT JOIN `departments` AS `Department` ON (`Person`.`department_id` = `Department`.`id`) 
							WHERE `Person`.`birthday` LIKE \'%'.$date_sun.'\'
							GROUP BY `Person`.`email`
							ORDER BY `Person`.`name` ASC, `Person`.`surname` ASC';	
		
		$sql_staff = 		'SELECT 
								`Staff`.`id` AS staff_id, `Staff`.`name` AS staff_name, `Staff`.`surname` AS staff_surname, `Staff`.`publication_id`, `Staff`.`sub_division_id`,
								`Publication`.`id` AS publication_id, `Publication`.`name` AS publication_name,
								`SubDivision`.`id` AS sub_div_id, `SubDivision`.`name` AS sub_div_name
							FROM `staffs` AS `Staff` 
							LEFT JOIN `publications` AS `Publication` ON (`Staff`.`publication_id` = `Publication`.`id`) 
							LEFT JOIN `sub_divisions` AS `SubDivision` ON (`Staff`.`sub_division_id` = `SubDivision`.`id`) 
							WHERE `Staff`.`birthday` LIKE \'%'.$date_sun.'\'
							GROUP BY `Staff`.`email`
							ORDER BY `Staff`.`name` ASC, `Staff`.`surname` ASC';

		$birthdays_sun = array('employees' => mysql_query($sql_employees), 'people' => mysql_query($sql_people), 'staffs' => mysql_query($sql_staff));

	}
	
	
?>
	
	<?php mysql_close($link); ?>
