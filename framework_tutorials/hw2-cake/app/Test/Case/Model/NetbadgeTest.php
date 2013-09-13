<?php
App::uses('Netbadge', 'Model');

/**
 * Netbadge Test Case
 *
 */
class NetbadgeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.netbadge',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Netbadge = ClassRegistry::init('Netbadge');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Netbadge);

		parent::tearDown();
	}

}
