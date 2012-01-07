<?php

class GitHubAutoloader {
    private static $_classes = array(
      'GitHubCurl'              => 'curlclient.class.php',
      'GitHubCommonException'   => 'exception.class.php',
      'GitHubApi'               => 'github.class.php',
      'GitHubHttpClient'        => 'httpclient.interface.php'
    );

    static public function getInstance() {
        spl_autoload_register(array(new self, 'load'));
    }

    static public function load($class) {
        if(array_key_exists($class, self::$_classes)) {
            include self::$_classes[$class];
        }
    }
}