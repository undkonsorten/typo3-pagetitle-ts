[![License](https://img.shields.io/github/license/undkonsorten/typo3-pagetitle-ts.svg)](LICENSE)
[![Release](https://img.shields.io/github/release/undkonsorten/typo3-pagetitle-ts.svg)](https://github.com/undkonsorten/typo3-pagetitle-ts/releases/)

> [!IMPORTANT]  
> This package has been abandoned. It‘s superseded by the possibilities of the [TYPO3 Page Title API](https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ApiOverview/Seo/PageTitleApi.html) added to TYPO3 CMS since.
> 
> This package will not receive updates nor support.

# TYPO3 extension `pagetitle_ts`

This TYPO3 CMS extension provides a TypoScript hook for `getData()`. It allows
you to insert the final page title, built by the TYPO3 PageTitle API.


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

If your page object is named `page` within TypoScript, you can include the page title as follows:

```typo3_typoscript
page.meta {
  og:title {
    data = pagetitle
    stdWrap < config.pageTitle
    replace = 1
  }
  twitter:title < .og:title
  DC\.title < .og:title
  og:title.attribute = property
}
```

Of course it's possible to use the `date = pagetitle` configuration in each other context as well.


## License

[GPL-2.0](LICENSE)
