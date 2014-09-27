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
interface ComparaisonEngineInterface
{
    /**
     * Adapter can be used
     *
     * @return boolean
     */
    public function isOk();

    /**
     * Rules to be applied on the camparaison
     *
     * @return $this self Object
     */
    public function getRules();

    /**
     * Apply rules on websites and return an evaluation of comparaison
     *
     * @return array
     */
    public function applyRules(WebsiteInterface $website1, WebsiteInterface $website2);
}
