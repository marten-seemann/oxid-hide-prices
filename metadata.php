<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'           => 'hideprices',
    'title'        => [
        'en' => 'Hide Prices',
        'de' => 'Preise verbergen',
    ],
    'description'  => [
        'en' => 'hides prices for visitors who are not logged in',
        'de' => 'Preise verbergen für Besucher, die nicht eingeloggt sind',
    ],
    'version'      => '1.0',
    'author'       => 'Marten Seemann',
    'url'          => 'https://www.oxid-responsive.com',
    'extend'       => [
        \OxidEsales\Eshop\Core\UtilsView::class => \SeemannIT\HidePricesModule\Core\UtilsView::class,
    ],
];
