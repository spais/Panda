<?php

require_once 'Panda.php';

/**
 * Test class for Panda.
 * Generated by PHPUnit on 2010-12-07 at 12:29:48.
 */
class PandaTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Panda
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        error_reporting(E_ALL & ~E_DEPRECATED);
        require_once 'PEAR.php';
        $config = array(Panda::CONFIG_DEBUG => false,
        Panda::CONFIG_VALID_PATH => array('/'),
        Panda::CONFIG_LOG_PATH => '/tmp',
        Panda::CONFIG_ON_ERROR_FIRED => false,
        Panda::CONFIG_ON_FATAL_ERROR => 'Panda/template/fatal.html',
        Panda::CONFIG_ON_IS_CLI_OUTPUT => false,
        Panda::CONFIG_ENABLE_FIREPHP => true,
        Panda::CONFIG_FATAL_HTML => 'Panda/template/fatal.html',
        Panda::CONFIG_HTTP_TPL => 'Panda/template/http.php',
        Panda::CONFIG_CATCH_FATAL => false,
        Panda::CONFIG_CATCH_STRICT => true,
        Panda::CONFIG_PANDA_PATH => '/',
        Panda::CONFIG_EDITOR => 0);
        Panda::init($config);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     */
    public function testGetConfig()
    {
        $config = Panda::getConfig();
        $this->assertTrue(isset($config[Panda::CONFIG_DEBUG]));
    }

    /**
     * @todo Implement testInit().
     */
    public function testInit()
    {
        $config = Panda::getConfig();
        $config[Panda::CONFIG_DEBUG] = true;
        Panda::init($config);
        $config = Panda::getConfig();
        $this->assertTrue($config[Panda::CONFIG_DEBUG] === true);
    }

    /**
     * @todo Implement testRestoreHandler().
     */
    public function testRestoreHandler()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOnAssert().
     */
    public function testOnAssert()
    {
        //        $config = Panda::getConfig();
        //        $config[Panda::CONFIG_DEBUG] = true;
        //        Panda::init($config);
        assert(false);
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOnStackError().
     */
    public function testOnStackError()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOnPearError().
     */
    public function testOnPearError()
    {
        $isPandaError = false;
        try {
            PHPUnit_Framework_Error_Notice::$enabled = false;
            @PEAR::raiseError('PEAR error');
        } catch (Exception $e) {
            $isPandaError = $e instanceof Panda_Exception;
        }
        PHPUnit_Framework_Error_Notice::$enabled = true;
        $this->assertTrue($isPandaError);
    }

    /**
     * @todo Implement testOnDebugPhpError().
     */
    public function testOnDebugPhpError()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOnLivePhpError().
     */
    public function testOnLivePhpError()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOnException().
     */
    public function testOnException()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testIsValidPath().
     */
    public function testIsValidPath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testIsCliOutput().
     */
    public function testIsCliOutput()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testError().
     */
    public function testError()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testMessage().
     */
    public function testMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement test_getFileSummary().
     */
    public function test_getFileSummary()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testGetEditorLink().
     */
    public function testGetEditorLink()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOnFatalError().
     */
    public function testOnFatalError()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOnStrictError().
     */
    public function testOnStrictError()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testOutputHttpStatus().
     */
    public function testOutputHttpStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testGetErrorStat().
     */
    public function testGetErrorStat()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testGetTempDir().
     */
    public function testGetTempDir()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }

    /**
     * @todo Implement testGetOuterPathErrors().
     */
    public function testGetOuterPathErrors()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
          );
    }
}
?>
