# Nocturne

Nocturne is a dark blog theme for ClassicPress. Posts, widgets and comments sit in boxes on a deep blue-black page, with Merriweather for reading and Fira Sans for headings.

* Requires ClassicPress 2.0 or later and PHP 7.4 or later.
* Version 0.0.3, licensed under the GPL version 2 or later.

## Features

* Left sidebar, right sidebar or no sidebar, chosen in *Customize → Theme: Content → Layout*, with a live preview.
* A primary menu that collapses to a Menu button on phones, and a social menu with icons.
* Primary and footer widget areas.
* Featured images, threaded comments and post navigation.
* Ready for translation.

Nocturne is built on [Chassis](https://github.com/techkodeninja/chassis), which provides the page layout, the menu and the shared styles. The design (colors, fonts, spacing and widths) is set in the theme's `chassis.json` file, with no build step needed to change it. The same design is used by the Novaris version of Nocturne.

## Installation

1. In your admin panel, go to *Appearance → Themes* and click *Add New*.
2. Click *Upload Theme*, choose the theme's zip file and click *Install Now*.
3. Click *Activate*.
4. Add widgets to the Primary sidebar in *Appearance → Widgets*, then choose a layout in *Customize → Theme: Content → Layout*.

## Frequently Asked Questions

### Changing the layout doesn't do anything

The sidebar only shows when the Primary widget area has widgets. Add a widget in *Appearance → Widgets*, and the Left Sidebar and Right Sidebar layouts will show it.

### How do I change the colors?

Colors, fonts and spacing are in `chassis.json` in the theme's folder. The colors are named once in `settings.palette`, so changing one there changes it everywhere it's used. To keep your changes through updates, make a child theme with its own `chassis.json`. It only needs the settings you change.

## Changelog

See [changelog.md](https://github.com/luthemes/nocturne/blob/develop/changelog.md).

## Development

To build the theme or contribute to it, see [docs/development.md](https://github.com/luthemes/nocturne/blob/develop/docs/development.md).

## Copyright and License

Nocturne, Copyright 2026 Benjamin Lu. Nocturne is distributed under the terms of the [GNU GPL](https://www.gnu.org/licenses/gpl-2.0.html), version 2 or later.

This theme bundles the following third-party resources:

* [Chassis](https://github.com/techkodeninja/chassis), Copyright Benjamin Lu. License: GPL-2.0-or-later.
* [Backdrop Framework and Backdrop Fonts](https://github.com/backdrop-dev), Copyright Benjamin Lu. License: GPL-2.0-or-later.
* [Merriweather](https://fonts.google.com/specimen/Merriweather), Copyright The Merriweather Project Authors. License: SIL Open Font License, 1.1.
* [Fira Sans](https://fonts.google.com/specimen/Fira+Sans), Copyright The Mozilla Foundation and Telefonica S.A. License: SIL Open Font License, 1.1.
* [Font Awesome Free](https://fontawesome.com) icons (social and meta icons), Copyright Fonticons, Inc. License: CC BY 4.0.
* Screenshot and layout images, Copyright 2026 Benjamin Lu. License: GPL-2.0-or-later.
