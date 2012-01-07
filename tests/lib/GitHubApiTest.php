<?php

class GitHubApiTest extends PHPUnit_Framework_TestCase {
    /**
     * @var GitHubApi
     */
    protected $object;

    protected function setUp() {
        $this->object = new GitHubApi(new GitHubCurl());
    }

	public function testConnection() {
            $a = $this->object->get(
                    '/users/:user',
                    array('user' => 'dominis')
            );
        $this->assertEquals(
           'dominis',
            $a->login
        );
	}

}
?>
