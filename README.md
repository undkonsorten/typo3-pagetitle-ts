[![Latest Stable Version](https://poser.pugx.org/undkonsorten/typo3-pagetitle-ts/v/stable)](https://packagist.org/packages/undkonsorten/typo3-pagetitle-ts)
[![License](https://poser.pugx.org/undkonsorten/typo3-pagetitle-ts/license)](https://packagist.org/packages/undkonsorten/typo3-pagetitle-ts)

# TYPO3 extension `pagetitle_ts`

This TYPO3 CMS extension provides a TypoScript hook for `getData()`. It allows
you to insert the final page title, built by the TYPO3 PageTitle API. Additionally,
the page title is combined with the TypoScript `config.pageTitle` configuration
to ensure consistency across the `<title>` and `<meta>` tags.


## Features

* Access final page title in TypoScript
* Apply TypoScript page title configuration on raw page title


## Installation

Composer:

```bash
composer require undkonsorten/typo3-pagetitle-ts
```

GitHub:

```bash
cd typo3conf/ext
git clone git@github.com:undkonsorten/typo3-pagetitle-ts.git pagetitle_ts
```


## Usage

In your TypoScript, include the page title as follows:

```typo3_typoscript
page.meta {
  og:title {
    data = page:title
  }
}
```


## License

[GPL-2.0](LICENSE)
