# Space48 HTML Sitemap
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Space48/HtmlSitemap/badges/quality-score.png?b=master&s=4437ac2fc0e0af2e8fae14884574332081eb37ac)](https://scrutinizer-ci.com/g/Space48/HtmlSitemap/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Space48/HtmlSitemap/badges/build.png?b=master&s=eab63e157d603035bded14e5c740493f81a68749)](https://scrutinizer-ci.com/g/Space48/HtmlSitemap/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/Space48/HtmlSitemap/badges/coverage.png?b=master&s=6f045bcb183041e8954b9f9736f6a546f47db66b)](https://scrutinizer-ci.com/g/Space48/HtmlSitemap/?branch=master)

This module will automatically add a HTML sitemap containing a list of all site CMS pages and categories to your Magento 2 website. The URL path for the sitemap is: `/sitemap`


## How to use/install

Before installing this module and allowing the setup scripts to run, you need to ensure the correct data has been entered into the appropriate files based on the business requirements.

**Manual**

To install this module copy the code from this repo to `app/code/Space48/HtmlSitemap` folder of your Magento 2 instance, then you need to run php `bin/magento setup:upgrade`

**Composer**:

From the terminal execute the following:

`composer config repositories.space48-htmlsitemap vcs git@github.com:Space48/HtmlSitemap.git`

then

`composer require "space48/htmlsitemap:{module-version}"`
