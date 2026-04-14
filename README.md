PBWoW 3.3 Extension for phpBB
=========

Extension for phpBB 3.3 to enhance the pbWoW3 style with additional functionality.
Originally by PayBas. Now maintained by [avathar](https://www.avathar.be).

**Version:** 3.3.2 (14/04/2026)

#### Requirements
- phpBB 3.3.0 or higher
- PHP 8.1 or higher

#### Features
- ACP module with configurable settings:
  - Custom logo (image path, dimensions, margins, responsive scaling)
  - Top header-bar (custom HTML content, optional fixed positioning)
  - Header-box custom links
  - Video background (enable/disable, all pages or index only)
  - Fixed background position
  - Index advertisement block (optional, requires avathar/recenttopicsav)
- Three custom template events in the top-bar for third-party extensions (`top_bar_links_before`, `quickstyle_event`, `top_bar_links_after`)

#### Languages
Arabic, Czech, Dutch, English, French, German, German (formal), Portuguese, Russian, Slovak, Spanish, Spanish (informal), Swedish, Ukrainian

#### Tested on
pbWoW3, pbtech, pbWoW3 child styles (Legion, WotLK, Battlecry)

## Installation
1. [Download the latest release](https://www.avathar.be/forum/app.php/dlext/details?df_id=37) and unzip it.
2. Copy the contents to `ext/paybas/pbwowext/` (so that `ext.php` is at `ext/paybas/pbwowext/ext.php`).
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `PBWoW 3.3 Extension` under "Disabled Extensions" and click `Enable`.

## Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `PBWoW 3.3 Extension`.
3. To permanently uninstall, click `Delete Data`, then delete the `pbwowext` folder from `ext/paybas/`.

## Support
- [Support forum](https://www.avathar.be/forum/viewforum.php?f=16)
- [GitHub Issues](https://github.com/avatharbe/pbwowext/issues)

## For extension developers
Custom template events, phpBB core events subscribed, and integration details are documented in [contrib/Events.md](contrib/Events.md).

## License
[GNU General Public License v2](https://opensource.org/licenses/GPL-2.0)

Originally by PayBas. Maintained by Andy Vandenberghe (Sajaki).
