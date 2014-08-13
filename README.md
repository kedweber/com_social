# Social Media package

## Description

Many many corporate websites have links to their social networks on thier sites like tweets, Facebook updates or Linkedin
profiles. The [Moyo](http://moyoweb.nl) social media package has a number of components and modules that handle and
display such data.

At the time of writing, only the [Twitter](https://twitter.com) and [Facebook](https://facebook.com) APIs have been implemented.

## Requirements

* Joomla 3.X or 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* lib_oauth, installable through PEAR *shudder*

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

```json
{
    "name": "cta/social",
    "type": "vcs",
    "url": "https://github.com/cta-int/social.git"
}
```

The require section should contain the following line:

```json
    "cta/social": "1.0.*",
```

Afterward, just run `composer update` from the root of your Joomla project.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

## Configuration

After installing the package, create a module of type mod_socialmedia. Twtter and Facebook login data are entered
into their respective tabs. The module tab enables the content manager to decide which social medium to show initially.