<?php
//this file  mocks an applicanst service that is responsible for all methods relating to 
//fetching, filtering, and modifying applicants;

//this is a safety feature.  ABS_PATH is defined in the index.php file.  Once defined a global
//is available everywhere.  If someone gets to this file without having ABS_PATH set, it means
//they tried to access it directly.  Which is a no no.
if(!defined('ABS_PATH')){die;}

require_once('./db.service.php');

function get_users_from_database():array{
	//simply returns an unfiltered list of users from applicants.json
	return get_users();
}

function get_users_by_level(string $level):array{
	$users = get_users_from_database();
	// return array_filter($users, function($user)use($level){
	// 	return $user['level'] === $level;
	// });
	// return array_filter($users, fn($user)=>filter_by_level($user, $level));
	
	$response = [];
	foreach($users as $user){
		if($user['level'] === $level){
			$response[] = $user;
		}
	}
	return $response;
}

function filter_by_level($user, $level){
	return $user['level'] === $level;
}

function get_users_by_experience(int $experience):array{
	$users = get_users_from_database();
	return array_filter($users, fn($user)=> $user['experience'] >= $experience);
}

function get_users_by_skills(array $skills):array{
	$users = get_users_from_database();
	return array_filter($users, fn($user)=> count(array_intersect($user['skills'], $skills)) > 0);
}

function get_selected_users(string $level, int $experience, array $skills):array{
	$users = get_users_from_database();
	$users = get_users_by_level_refactored($users, $level);
	$users = get_users_by_experience_refactored($users, $experience);
	$users = get_users_by_skills_refactored($users, $skills);
	return $users;
}

function get_users_by_level_refactored(array $users, string $level):array{
	//return array_filter($users, fn($user)=>$user['level'] === $level);
	return array_filter($this->_applicants, fn($applicant)=>$applicant->get_level === $level);
	
}

function get_users_by_experience_refactored(array $users, int $experience):array{
	return array_filter($users, fn($user)=> $user['experience'] >= $experience);
}

function get_users_by_skills_refactored(array $users, array $skills):array{
	return array_filter($users, fn($user)=> count(array_intersect($user['skills'], $skills)) > 0);
}

function get_selected_users_refactored(string $level, int $experience, array $skills):array{
	$users = get_users_from_database();
	return array_filter($users, fn($user)=>
		$user['level'] == $level &&
		$user['experience'] >= $experience &&
		count(array_intersect($user['skills'], $skills)) > 0
	);
}
