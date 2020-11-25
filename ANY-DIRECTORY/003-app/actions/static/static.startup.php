<?php declare(strict_types=1);

function action_startup() {

	if (!($page = Request::value(1))) {
		$page = Request::value();
		if (!$page || ($page == 'static')) $page = 'default';
	}
	
	$data = [
		'contentFilePath' => APP .'actions/static/pages/' . $page . '/' . $page,
		'pageName' => $page
	];
	
	$dataSources = 0;
	
	if (file_exists($fn = $data['contentFilePath'] . '.ini.php')) {
		$dataSources++;
		Settings::loadFromIni($fn);
	}
	
	if (file_exists($fn = $data['contentFilePath'] . '.startup.php')) {
		$dataSources++;
		safeInclude($fn);
		$data = array_merge(
			$data,
			static_startup()
		);
	}
	
	if (!$dataSources): print_r($dataSources); die(); httpError(404); endif;
	
	return $data;
	
} // action_startup