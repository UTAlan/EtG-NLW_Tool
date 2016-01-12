<?php 
function checkAccess($access_groups = array()) {
	global $db;
	$admins = array(1, 2, 76);

	if (isset($_COOKIE['SMFCookie811'])) {
		$arr = stripslashes(urldecode($_COOKIE['SMFCookie811']));
		$arr = unserialize($arr);
		$user_id = (int)$arr[0];
		$passwrd = $arr[1];
		$user_result = $db->query("SELECT id_group, passwd, password_salt, additional_groups FROM smf_members WHERE id_member = $user_id");
		if ($user_result and $user_result->num_rows > 0) {
			$user = $user_result->fetch_assoc();
			$smfpass = sha1($user['passwd'].$user['password_salt']);
			if ($smfpass == $passwrd) {
				$user_groups = explode(',', $user['additional_groups']);
				array_push($user_groups, $user['id_group']);
				foreach($admins as $admin_group_id) {
					if(in_array($admin_group_id, $user_groups)) {
						return 2;
					}
				}
				foreach($access_groups as $access_group_id) {
					if(in_array($access_group_id, $user_groups)) {
						return 1;
					}
				}
			}
		}
	}
	
	return 0;
}

function debug_echo($str) {
	echo '<pre>' . print_r($str, true) . '</pre>';
}