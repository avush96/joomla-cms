<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Cache
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JCacheStorageApc.
 * Generated by PHPUnit on 2009-10-08 at 21:44:48.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Cache
 * @since       11.1
 */
class JCacheStorageApcTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JCacheStorageApc
	 */
	protected $object;

	/**
	 * @var    boolean
	 */
	protected $extensionAvailable;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return  void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->extensionAvailable = extension_loaded('apc');

		if ($this->extensionAvailable)
		{
			$this->object = JCacheStorage::getInstance('apc');
		}
		else
		{
			$this->markTestSkipped('This caching method is not supported on this system.');
		}
	}

	/**
	 * Testing isSupported().
	 *
	 * @return  void
	 */
	public function testIsSupported()
	{
		$this->assertEquals(
			$this->extensionAvailable,
			$this->object->isSupported(),
			'Claims APC is not loaded.'
		);
	}
}
