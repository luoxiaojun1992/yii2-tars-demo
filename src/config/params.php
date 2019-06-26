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
    'log_level' => ['info'],
    'log_interval' => 1,
  ),
);
