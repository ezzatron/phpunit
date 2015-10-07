<?php

namespace My\Space;

class ExceptionNamespaceTestWithResolution extends \PHPUnit_Framework_TestCase
{
    /**
     * Exception message
     *
     * @var string
     */
    const ERROR_MESSAGE = 'Exception namespace message';

    /**
     * Exception code
     *
     * @var int
     */
    const ERROR_CODE = 200;

    /**
     * @expectedException \Class
     * @expectedExceptionMessage ExceptionNamespaceTestWithResolution::ERROR_MESSAGE
     * @expectedExceptionCode ExceptionNamespaceTestWithResolution::ERROR_CODE
     */
    public function testConstants()
    {
    }

    /**
     * @expectedException \Class
     * @expectedExceptionCode ExceptionNamespaceTestWithResolution::UNKNOWN_CODE_CONSTANT
     * @expectedExceptionMessage ExceptionNamespaceTestWithResolution::UNKNOWN_MESSAGE_CONSTANT
     */
    public function testUnknownConstants()
    {
    }
}
