[![License](https://img.shields.io/github/license/eliashaeussler/typo3-pagetitle-ts.svg)](LICENSE)
[![Release](https://img.shields.io/github/release/eliashaeussler/typo3-pagetitle-ts.svg)](https://github.com/eliashaeussler/typo3-pagetitle-ts/releases/)

# TYPO3 extension `pagetitle_ts`

This TYPO3 CMS extension provides a TypoScript hook for `getData()`. It allows
you to insert the final page title, built by the TYPO3 PageTitle API.

Additionally, the page title is combined with the TypoScript `config.pageTitle`
configuration to ensure consistency across the `<title>` and `<meta>` tags.


## Features

* Access final page title in TypoScript
* Apply TypoScript page title configuration on raw page title
* TypoScript snippet for automatic generation of title meta tags


## Installation

Composer:

```bash
composer require undkonsorten/typo3-pagetitle-ts
```

GitHub:

```bash
cd typo3conf/ext
git clone git@github.com:eliashaeussler/typo3-pagetitle-ts.git pagetitle_ts
```


## Usage

In your TypoScript, include the page title as follows:

```typo3_typoscript
page.meta {
  og:title {
    data = page:title
    replace = 1
  }
}
```

Alternatively, you can include the
[TypoScript shipped with this extension](Configuration/TypoScript/setup.typoscript)
to set the meta tags automatically.


## License

[GPL-2.0](LICENSE)
