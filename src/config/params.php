<?php
return array (
  'adminEmail' => 'admin@example.com',
  'senderEmail' => 'noreply@example.com',
  'senderName' => 'Example.com mailer',
  'tars' => 
  array (
    'log_level' => ['info', 'trace', 'error', 'warning'],
    'log_interval' => 1,
    'registries' => 
    array (
    ),
    'services' => 
    array (
      'obj' => 
      array (
        'protocolName' => 'http',
        'serverType' => 'http',
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
      'tarsObj' => 
      array (
        'protocolName' => 'tars',
        'serverType' => 'tcp',
        'home-api' => '\\app\\tars\\servant\\PHPTest\\Yii2Tars\\tarsObj\\TestTafServiceServant',
        'home-class' => '\\app\\tars\\impl\\TestTafServiceImpl',
      ),
    ),
    'proto' => 
    array (
      'appName' => 'PHPTest',
      'serverName' => 'Yii2Tars',
      'objName' => 'obj',
      'withServant' => true,
      'tarsFiles' => 
      array (
        0 => './example.tars',
      ),
      'dstPath' => '../src/tars/servant',
      'namespacePrefix' => 'app\\tars\\servant',
    ),
  ),
);
