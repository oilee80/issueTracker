<?php
App::uses('FeatureComment', 'Model');

/**
 * FeatureComment Test Case
 *
 */
class FeatureCommentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.feature_comment', 'app.feature');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FeatureComment = ClassRegistry::init('FeatureComment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FeatureComment);

		parent::tearDown();
	}

}
