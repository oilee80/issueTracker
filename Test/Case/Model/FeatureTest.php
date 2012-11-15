<?php
App::uses('Feature', 'Model');

/**
 * Feature Test Case
 *
 */
class FeatureTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.feature', 'app.project', 'app.bug', 'app.parent_bug', 'app.feature_comment', 'app.feature_revision');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Feature = ClassRegistry::init('Feature');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Feature);

		parent::tearDown();
	}

}
