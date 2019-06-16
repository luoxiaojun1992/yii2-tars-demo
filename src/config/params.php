<?php
return array (
  'adminEmail' => 'admin@example.com',
  'senderEmail' => 'noreply@example.com',
  'senderName' => 'Example.com mailer',
  'tars' => 
  array (
    'registries' => 
    array (
    ),
    'services' => 
    array (
      'namespaceName' => 'Lxj\\Yii2\\Tars\\',
      'monitorStoreConf' => 
      array (
        'className' => 'Tars\\monitor\\cache\\SwooleTableStoreCache',
        'config' => 
        array (
          'size' => 40960,
        ),
      ),
    ),
    'proto' => 
    array (
      'appName' => 'PHPTest',
      'serverName' => 'Yii2Tars',
      'objName' => 'obj',
    ),
    'tarsregistry' => 'tars.tarsregistry.QueryObj@tcp -h 172.18.0.3 -p 17890',
    'log_level' => 200,
    'communicator_config_log_level' => 'INFO',
  ),
);
