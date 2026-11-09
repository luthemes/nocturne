# Changelog

## [0.0.3] - 11.09.2026
### Added
- `README.md` in the theme and its zip, for people using the theme: what it does, installing it, FAQ and credits. The ClassicPress Directory reads it for the theme's listing.

### Changed
- The guide for developing the theme moved from `readme.md` to `docs/development.md`.
- `readme.txt` gives the lowest ClassicPress version, `Requires CP: 2.0`, which the ClassicPress Directory needs when it reads that file.
- The `style.css` header has one field per line with no leading `*`, in the order the ClassicPress docs show.

## [0.0.2] - 11.08.2026
### Changed
- `chassis.json` uses Chassis's `settings` and `styles` shape: each color is named once in `settings.palette` and used as `@name`, and each part of the page has its own group (`header`, `primary-menu`, `menu-button`, `content`, `post`, `widget`, `comments`, `footer`). The design is unchanged: the file produces the same CSS as before.
- Requires Chassis 0.1.7 or later, which reads that shape.
- Requires Backdrop Framework 1.0.1 (`backdrop-dev/framework` `^1.0.1`), its tagged release, instead of a pinned `develop` commit. 1.0.1 fixes a crash ("Cannot redeclare Backdrop\booted()") on sites that also run a plugin built on Backdrop 2.0.
- Requires Backdrop Fonts 1.0.2 (`backdrop-dev/fonts` `^1.0.2`), its first tagged release with all the fonts, instead of a pinned `develop` commit. Merriweather and Fira Sans now ship with their licenses, their stylesheets are versioned so updates reach browsers, and the package loads its fonts from wherever it's installed.

### Removed
- 6 MB of images that shipped in the zip but were never shown: `public/images/layouts/header-image.jpg` (4.4 MB) and the three sample header images in `public/images/headers/` (1.6 MB). The 0.0.1 zip was 7.4 MB, over many hosts' upload limits. Header image support stays, with no default image; a site uploads its own in Customize → Header Image.

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
