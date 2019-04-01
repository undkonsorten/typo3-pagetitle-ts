<?php

/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Page title for TypoScript',
    'description' => 'Provides access to the final page title within TypoScript.',
    'category' => 'frontend',
    'author' => 'Elias Häußler',
    'author_email' => 'elias.haeussler@undkonsorten.com',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
    ],
];
