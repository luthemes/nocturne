# Changelog

## [Unreleased]
### Changed
- `chassis.json` uses Chassis's `settings` and `styles` shape: each color is named once in `settings.palette` and used as `@name`, and each part of the page has its own group (`header`, `primary-menu`, `menu-button`, `content`, `post`, `widget`, `comments`, `footer`). The design is unchanged: the file produces the same CSS as before.
- Requires Chassis 0.1.7 or later, which reads that shape.

## [0.0.1] - 11.06.2026

First release of Nocturne, a dark theme for ClassicPress built on [Chassis](https://github.com/techkodeninja/chassis), made from the Momentum starter theme.

### Added
- `.github/workflows/release.yml`: publishing a GitHub release builds the theme, with a fresh translation template, and attaches `nocturne.{version}.zip` to the release.
- Nocturne's description, tags, `readme.txt` and package links (`luthemes/nocturne`).
- `screenshot.png` (1200×900) for the Themes screen, showing the dark design with posts and a right sidebar.

### Changed
- Nocturne now has the same dark design as the Novaris version ([novaris-dev/nocturne](https://github.com/novaris-dev/nocturne)): `chassis.json` holds its colors, fonts (Merriweather, Fira Sans, JetBrains Mono), spacing, widths and Menu button, copied from that theme.
- The header runs the full width of the screen (`.app-header--full`).
- Post dates and other metadata sit above the title, as in the Novaris version.
- The default layout is a right sidebar.
- Only Merriweather and Fira Sans are loaded, instead of every bundled font.
- Requires Chassis 0.1.5 or later, for the `chassis.json` settings it uses (`layout`, `comments-*`).

### Fixed
- The Layout picker's images show at their own size (45×36) instead of doubled to 90 pixels wide.
- The Layout picker in Customize → Theme: Content sets the layout itself when an image is clicked or chosen with the arrow keys, instead of relying only on the customizer's radio linking, and follows the setting when it changes elsewhere.
