# Space48 HTML Sitemap

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
