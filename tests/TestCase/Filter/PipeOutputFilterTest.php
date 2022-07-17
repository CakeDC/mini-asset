<?php
declare(strict_types=1);

/**
 * MiniAsset
 * Copyright (c) Mark Story (http://mark-story.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Mark Story (http://mark-story.com)
 * @since     0.0.1
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace MiniAsset\Test\TestCase\Filter;

use MiniAsset\Filter\PipeOutputFilter;
use PHPUnit\Framework\TestCase;

class PipeOutputFilterTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->_cssDir = APP . 'css' . DS;
        $this->filter = new PipeOutputFilter();
    }

    public function testOutput()
    {
        $content = file_get_contents($this->_cssDir . 'unminified.css');
        $result = $this->filter->output($this->_cssDir . 'unminified.css', $content);
        $expected = file_get_contents($this->_cssDir . 'unminified.css');
        $this->assertEquals($expected, $result);
    }
}
