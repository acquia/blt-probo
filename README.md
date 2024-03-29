Acquia BLT Probo integration
====

This is an [Acquia BLT](https://github.com/acquia/blt) plugin providing [Probo](https://probo.ci/) integration.

This plugin is **community-created** and **community-supported**. Acquia does not provide any direct support for this software or provide any warranty as to its stability.

## Installation and usage

To use this plugin, you must already have a Drupal project using BLT 10.

In your project, require the plugin with Composer:

`composer require acquia/blt-probo`

Initialize the Probo integration by calling `recipes:ci:probo:init`, which is provided by this plugin:

`blt recipes:ci:probo:init`

This will copy a template Makefile to your project root directory. Make sure to commit this as well as your updated composer.json to Git.

# License

Copyright (C) 2019 Acquia, Inc.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License version 2 as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
