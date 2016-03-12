<?php
return array(
	//'配置项'=>'配置值'
    'DATA_CACHE_TYPE' => 'Memcache',
    'MEMCACHE_HOST'   => 'tcp://127.0.0.1:11211',
    'DATA_CACHE_TIME' => '3600',

    'TMPL_ENGINE_TYPE'=>'Smarty',
    'TMPL_ENGINE_CONFIG'=>array(
        'plugins_dir'=>'./Application/Smarty/Plugins/',
    ),
    'left_delimiter' => '{',
  'right_delimiter' => '}',
    'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR',
);