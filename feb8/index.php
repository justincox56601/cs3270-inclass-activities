<?php
define('ABS_PATH', __DIR__);

require_once('./applicants.service.php');

$users = get_users_from_database();
//$users = get_users_by_level('entry');
//$users = get_users_by_experience(3);
//$users = get_users_by_skills(['PHP']);
//$users = get_selected_users('entry', 3, ['PHP']);
//$users = get_selected_users_refactored('entry', 3, ['PHP']);


include_once(ABS_PATH . '/views/head.view.php');
include_once(ABS_PATH . '/views/welcome.view.php');
include_once(ABS_PATH . '/views/form.view.php');

foreach($users as $applicant){
    include(ABS_PATH . '/views/applicant-summary.view.php');
}

include_once(ABS_PATH . '/views/footer.view.php');

// echo '<pre>';
// print_r($users[0]); 
// echo '</pre>';
 