<p align="center">
  <a href="https://roots.io/sage/">
    <img alt="Sage" src="https://cdn.roots.io/app/uploads/logo-sage.svg" height="100">
  </a>
</p>

<p align="center">
  <a href="LICENSE.md">
    <img alt="MIT License" src="https://img.shields.io/github/license/roots/sage?color=%23525ddc&style=flat-square" />
  </a>

  <a href="https://packagist.org/packages/roots/sage">
    <img alt="Packagist" src="https://img.shields.io/packagist/v/roots/sage.svg?style=flat-square" />
  </a>

  <a href="https://github.com/roots/sage/actions">
    <img alt="Build Status" src="https://img.shields.io/github/workflow/status/roots/sage/Main?style=flat-square" />
  </a>

  <a href="https://twitter.com/rootswp">
    <img alt="Follow Roots" src="https://img.shields.io/twitter/follow/rootswp.svg?style=flat-square&color=1da1f2" />
  </a>
</p>

<p align="center">
  <strong>WordPress starter theme with Laravel Blade components and templates, Tailwind CSS, and a modern development workflow</strong>
</p>

<p align="center">
  <a href="https://roots.io/"><strong><code>Website</code></strong></a> &nbsp;&nbsp; <a href="https://docs.roots.io/sage/10.x/installation/"><strong><code>Documentation</code></strong></a> &nbsp;&nbsp; <a href="https://github.com/roots/sage/releases"><strong><code>Releases</code></strong></a> &nbsp;&nbsp; <a href="https://discourse.roots.io/"><strong><code>Support</code></strong></a>
</p>

## Requirements

Make sure all dependencies have been installed before moving on:

- [Acorn](https://docs.roots.io/acorn/2.x/installation/) v2
- [WordPress](https://wordpress.org/) >= 5.9
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.4.0 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
- [Composer](https://getcomposer.org/download/)
- [Node.js](http://nodejs.org/) >= 16
- [Yarn](https://yarnpkg.com/en/docs/install)
- [ACF Pro](https://www.advancedcustomfields.com/pro/)

## Theme installation

The theme will be installed automatically durin main repo initialization.

Make sure that you have [Acorn installed](https://docs.roots.io/acorn/2.x/installation/).

## Theme structure

```sh
themes/coditive-theme/   # ??? Root of your Sage based theme
????????? app/                  # ??? Theme PHP
???   ????????? Providers/        # ??? Service providers
???   ????????? View/             # ??? View models
???   ????????? filters.php       # ??? Theme filters
???   ????????? setup.php         # ??? Theme setup
????????? composer.json         # ??? Autoloading for `app/` files
????????? public/               # ??? Built theme assets (never edit)
????????? functions.php         # ??? Theme bootloader
????????? index.php             # ??? Theme template wrapper
????????? node_modules/         # ??? Node.js packages (never edit)
????????? package.json          # ??? Node.js dependencies and scripts
????????? resources/            # ??? Theme assets and templates
???   ????????? fonts/            # ??? Theme fonts
???   ????????? images/           # ??? Theme images
???   ????????? scripts/          # ??? Theme javascript
???   ????????? styles/           # ??? Theme stylesheets
???   ????????? views/            # ??? Theme templates
???       ????????? components/   # ??? Component templates
???       ????????? forms/        # ??? Form templates
???       ????????? layouts/      # ??? Base templates
???       ????????? partials/     # ??? Partial templates
        ????????? sections/     # ??? Section templates
????????? screenshot.png        # ??? Theme screenshot for WP admin
????????? style.css             # ??? Theme meta information
????????? vendor/               # ??? Composer packages (never edit)
????????? bud.config.js         # ??? Bud configuration
```

## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.

## Theme development

- Run `yarn` from the theme directory to install dependencies
- Update `bud.config.js` with your local dev URL

### Build commands

- `yarn dev` ??? Compile assets when file changes are made, start Browsersync session
- `yarn build` ??? Compile assets for production