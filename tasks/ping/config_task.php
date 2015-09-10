<?php

ConfigProto::$tasks['ping']['info']='Seeking if all servers of this profile are alive!!';

ConfigProto::$scripts['ping']['ping']=array('name' => 'Ping server', 'description' => 'Simple dummy script for check if server is accesible', 'info' => 'Seeking if all servers of this profile are alive!!', 'script_path' => 'ping/dummy.sh', 'script_interpreter' => 'sh');


?>