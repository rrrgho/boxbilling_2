<?php 
return array (
  'debug' => false,
  'salt' => 'e71eaadce56c1beae0957ece88e6952a',
  'url' => 'http://boxbilling.dep/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/Users/rian/Documents/Rian\'s Data/Project/boxbilling/bb-data',
  'path_logs' => '/Users/rian/Documents/Rian\'s Data/Project/boxbilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost:3306',
    'name' => 'boxbilling',
    'user' => 'root',
    'password' => 'rahasia',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/Users/rian/Documents/Rian\'s Data/Project/boxbilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);