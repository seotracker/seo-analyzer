Seo-analyzer library
================

Seo-analyzer library was extracted from Seo-Tracker platform.
This is a common way to compare websites on relevant metrics.

** At this point, this is a non fonctional project, don't use it **

1) Exemple

```php
<?php

$website  = new Website('foo');
$website2 = new Website('bar');
$analyzer = new SimpleAnalyzer();

$result = $analyzer
    ->setWebsite($website)
    ->compareTo($website2, array())
    ->toArray()
;
/**
 *
 * [
 *      'foo' => [
 *          'title' => 'foo',
 *          'backlinks' => 20
 *       ],
 *       'bar' => [
 *           'title' => 'bar',
 *           'backlinks' => 13
 *        ],
 *        'results' => [
 *            'title' => null,
 *            'backlinks' => +7
 *        ]
 *]
 **/
```
