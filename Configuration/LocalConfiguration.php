<?php

/**
 * Copyright 2009-2010 Zikula Foundation - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package FileSystem
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\Component\FileSystem\Configuration;

/**
 * Local configuration class.
 */
class LocalConfiguration implements ConfigurationInterface
{
    /**
     * Start directory.
     *
     * @var string
     */
    protected $dir;

    /**
     * Constructor.
     *
     * @param string $dir Directory.
     */
    public function __construct($dir = '')
    {
        $this->dir = $dir;
    }

    /**
     * Get dir property.
     *
     * @return string Directory.
     */
    public function getDir()
    {
        return $this->dir;
    }

}