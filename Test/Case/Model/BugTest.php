<?php
App::uses('Bug', 'Model');

/**
 * Bug Test Case
 *
 */
class BugTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.bug', 'app.parent_bug', 'app.project');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bug = ClassRegistry::init('Bug');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bug);

		parent::tearDown();
	}

}
