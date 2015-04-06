<?php
namespace MiniAsset\File;

interface FileInterface
{
    /**
     * Return the file name
     *
     * @return string
     */
    public function name();

    /**
     * Return contents of the file
     *
     * @return string
     */
    public function contents();

    /**
     * Return modified time of the file
     *
     * @return int
     */
    public function modifiedTime();

    /**
     * The path to the file.
     *
     * @return string
     */
    public function path();
}
