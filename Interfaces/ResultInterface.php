<?php

/**
 * This file is part of the Seo Analyzer package
 *
 * Copyright (c) 2014 Mickaël Andrieu
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SeoTracker\SeoAnalyzer\Interfaces;

use SeoTracker\SeoCore\Interfaces\WebsiteInterface;

/**
 * This file is part of Seo-Core library of SeoTracker project
 *
 * @author Mickaël Andrieu <mickael.andrieu@hotmail.fr>
 */
interface ResultInterface
{
    public function getWebsite();
    public function getComparedWebsite();
    public function getResults();
}
