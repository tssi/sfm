<?php
class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'tssi_sfm_160229',
		'prefix' => '',
		'encoding' => 'utf8',
	);
	var $app = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'tssi_app_160229',
		'prefix' => '',
		'encoding' => 'utf8',
	);
	var $sim = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'tssi_sim_160229',
		'prefix' => '',
		'encoding' => 'utf8',
	);
	var $sas = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'tssi_sas_160229',
		'prefix' => '',
		'encoding' => 'utf8',
	);
}
