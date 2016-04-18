<?php

if( defined('SAE_APPNAME') )
{
	$GLOBALS['config']['db']['db_host'] = SAE_MYSQL_HOST_M;
	$GLOBALS['config']['db']['db_host_read'] = SAE_MYSQL_HOST_S;
	
	$GLOBALS['config']['db']['db_port'] = SAE_MYSQL_PORT;
	
	$GLOBALS['config']['db']['db_user'] = SAE_MYSQL_USER;
	$GLOBALS['config']['db']['db_password'] = SAE_MYSQL_PASS;
	$GLOBALS['config']['db']['db_name'] = SAE_MYSQL_DB;
	
}
else
{
	$GLOBALS['config']['db']['db_host'] = '10.10.11.174';
	$GLOBALS['config']['db']['db_port'] = 3306;
	$GLOBALS['config']['db']['db_user'] = 'umdAafoKpq612HB5';
	$GLOBALS['config']['db']['db_password'] = 'pPsTgSyJxvABRFnfe';
	$GLOBALS['config']['db']['db_name'] = 'b8uzkt4Rmwv7d3iF';

}
