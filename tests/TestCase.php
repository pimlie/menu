<?php

namespace Spatie\Menu\Test;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    public function assertHtmlEquals(string $expected, string $actual, string $message = '')
    {
        $this->assertEquals(
            $this->sanitizeHtmlWhitespace($expected),
            $this->sanitizeHtmlWhitespace($actual),
            $message
        );
    }

    protected function sanitizeHtmlWhitespace(string $subject): string
    {
        $find = ['/>\s+</', '/(^\s+)|(\s+$)/'];
        $replace = ['><', ''];

        return preg_replace($find, $replace, $subject);
    }
}
