<?php
/*
|--------------------------------------------------------------------------
| PIMF Application Configuration
|--------------------------------------------------------------------------
|
| The PIMF configuration is responsible for returning an array
| of configuration options. By default, we use the variable $config provided 
| with PIMF - however, you are free to use your own storage mechanism for 
| configuration arrays.
|
*/
$config_app = array(

  /*
  |------------------------------------------------------------------------
  | The default environment mode for your application [testing|production]
  |------------------------------------------------------------------------
  */
  'environment' => 'production',

  /*
  |------------------------------------------------------------------------
  | The default character encoding used by your application.
  |------------------------------------------------------------------------
  */
  'encoding' => 'UTF-8',
  
  /*
  |------------------------------------------------------------------------
  | The default timezone of your application.
  | Supported timezones list: http://www.php.net/manual/en/timezones.php
  |------------------------------------------------------------------------
  */
  'timezone' => 'UTC',

  /*
  |--------------------------------------------------------------------------
  | Is it regular HTTP or secure HTTPS
  |--------------------------------------------------------------------------
  */
  'ssl' => false,
  
  /*
  |------------------------------------------------------------------------
  | Application meta
  |------------------------------------------------------------------------
  */
  'app' => array(
    'name'               => 'Vanilla',
    'key'                => 'some5secret5key5here', // application key
    'default_controller' => 'hello', // the name of the fallback controller
    'routeable'          => true, // get cleaner URLs or not
    'url'                => 'http://localhost', // URL used to access your application without a trailing slash.
    'index'              => '', // if you are using mod_rewrite to get cleaner URLs let it empty otherwise set index.php
    'asset_url'          => '', // the base URL used for your application's asset files
  ),

  /*
  |------------------------------------------------------------------------
  | View settings for Vanilla and Twig template engines
  |------------------------------------------------------------------------
  */
  'view' => array(
    'haanga' => array(
      'cache'       => true,  // if compilation caching should be used
      'debug'       => false, // if set to true, you can display the generated nodes
      'auto_reload' => true,  // useful to recompile the template whenever the source code changes
    ),
  ),

  /*
  |------------------------------------------------------------------------
  | Production environment settings
  |------------------------------------------------------------------------
  */
  'production' => array(

    'db' => null, // we do not need anny database

    //'db' => array(
    //  'driver' => 'sqlite',
    //  'database' => 'app/Vanilla/_database/production.db'
    //),

  ),

  /*
  |------------------------------------------------------------------------
  | Bootstrapping and dependencies to php-version and extensions
  |------------------------------------------------------------------------
  */
  'bootstrap' => array(
    'expected' => array(
      'php_version' => 5.3,
      'extensions' => array('pdo', 'pdo_sqlite', 'date', 'reflection', 'session', 'json'),
    ),
    'local_temp_directory' => '/tmp/'
  ),

  /*
  |------------------------------------------------------------------------
  | Settings for the error handling behavior
  |------------------------------------------------------------------------
  */
  'error' => array(
    'ignore_levels' => array(E_USER_DEPRECATED),
    'debug_info' => true, // true = if developing - false = if production
    'log' => true,
  ),

  /*
  |--------------------------------------------------------------------------
  | Session settings
  |--------------------------------------------------------------------------
  */
  'session' => array(

      // Session storage 'cookie', 'file', 'pdo', 'memcached', 'apc', 'redis', 'dba', 'wincache', 'memory'
      'storage' => 'cookie',

      // If using file storage - default is null
      'storage_path' => 'app/Vanilla/_session/',

      // If using the PDO (database) session storage
      'database' => array(
        //'driver' => 'sqlite',
        //'database' => 'app/Vanilla/_session/session.db',
      ),

      // Garbage collection has a 2% chance of occurring for any given request to
      // the application. Feel free to tune this to your requirements.
      'garbage_collection' => array(2, 100),

      // Session lifetime number of minutes
      'lifetime' => 60,

      // Session expiration on web browser close
      'expire_on_close' => false,

      // Session cookie name
      'cookie' => 'pimf_session',

      // Session cookie path
      'path' => '/',

      // Domain for which the session cookie is available.
      'domain' => null,

      // If the cookie should only be sent over HTTPS.
      'secure' => false,
  ),

  /*
  |--------------------------------------------------------------------------
  | Cache settings
  |--------------------------------------------------------------------------
  */
  'cache' => array(

      // Cache storage 'pdo', 'file', 'memcached', 'apc', 'redis', 'dba', 'wincache', 'memory'
      'storage' => 'file',

      // If using file storage - default is null
      'storage_path' => 'app/Vanilla/_cache/',

      // If using the PDO (database) cache storage
      'database' => array(
        //'driver' => 'sqlite',
        //'database' => 'app/Vanilla/_cache/cache.db',
      ),

      // If using Memcached and APC to prevent collisions with other applications on the server.
      'key' => 'pimfmaster',

      // Memcached servers - for more check out: http://memcached.org
      'memcached' => array(
        'servers' => array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),
      ),
   ),

);

// please do not edit the code below!!!
if(isset($config)){$config = array_merge($config, $config_app);}
