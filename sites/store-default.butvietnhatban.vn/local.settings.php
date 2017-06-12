<?php # local settings.php 
//setting memcache
$conf['cache_backends'][] = './sites/all/modules/contrib/memcache/memcache.inc';
  $conf['cache_default_class'] = 'MemCacheDrupal';
  $conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['memcache_servers'] = array('127.0.0.1:11211' => 'default');
$conf['memcache_key_prefix'] = 'storedefault';

//config domain
//include DRUPAL_ROOT . '/sites/all/modules/contrib/domain/settings.inc';
