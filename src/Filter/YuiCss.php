<?php
namespace MiniAsset\Filter;

use MiniAsset\AssetFilter;

/**
 * A YUI Compressor adapter for compressing CSS.
 * This filter assumes you have Java installed on your system and that its accessible
 * via the PATH. It also assumes that the yuicompressor.jar file is located in "vendor/yuicompressor" directory.
 */
class YuiCss extends AssetFilter
{

    /**
     * Settings for YuiCompressor based filters.
     *
     * @var array
     */
    protected $_settings = array(
        'path' => 'yuicompressor/yuicompressor.jar'
    );

    /**
     * Run $input through YuiCompressor
     *
     * @param string $filename Filename being generated.
     * @param string $input Contents of file
     * @return Compressed file
     */
    public function output($filename, $input)
    {
        $paths = [getcwd(), dirname(dirname(dirname(dirname(__DIR__))))];
        $jar = $this->_findExecutable($paths, $this->_settings['path']);
        $cmd = 'java -jar "' . $jar . '" --type css';
        return $this->_runCmd($cmd, $input);
    }
}
