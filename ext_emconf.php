<?php

/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Page title for TypoScript',
    'description' => 'Provides access to the final page title, built by the PageTitle API, within TypoScript.',
    'category' => 'fe',
    'author' => 'Elias Häußler',
    'author_email' => 'elias.haeussler@undkonsorten.com',
    'author_company' => 'undkonsorten',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'version' => '1.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
    ],
];
