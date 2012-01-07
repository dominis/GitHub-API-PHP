GitHub Api v3 PHP connector
===========================

[![Build Status](https://secure.travis-ci.org/dominis/GitHub-API-PHP.png)](http://travis-ci.org/dominis/GitHub-API-PHP>)

Examples
--------
```php
<?php
$o = new GitHubApi(new GitHubCurl());
try {
    $a = $o->get(
            '/users/:user',
            array('user' => 'dominis')
    );
    var_dump($a);
} catch(Exception $e) {
    print_r(json_decode($e->getMessage()));
}
```
