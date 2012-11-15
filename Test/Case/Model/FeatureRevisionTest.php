<?php
App::uses('FeatureRevision', 'Model');

/**
 * FeatureRevision Test Case
 *
 */
class FeatureRevisionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.feature_revision', 'app.feature');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FeatureRevision = ClassRegistry::init('FeatureRevision');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FeatureRevision);

		parent::tearDown();
	}

}
