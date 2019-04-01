<?php
defined('TYPO3_MODE') or die();

call_user_func(function ($extensionKey) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['getData'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['getData'] ?? [],
        [
            $extensionKey => \Undkonsorten\PagetitleTs\ContentObject\PageTitleGetDataHook::class,
        ]
    );
}, 'pagetitle_ts');
