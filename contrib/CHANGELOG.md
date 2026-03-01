## Changelog

##### 3.3.0 01/03/2026
- [FIX] Fix `\phpbb\db\tools\tools` type hint to `tools_interface` for phpBB 3.3 compatibility
- [FIX] Replace deprecated `extract()` with explicit variable access in pbwowstyle
- [FIX] Enable SSL certificate verification in cURL requests
- [FIX] Fix CURLOPT_FOLLOWLOCATION syntax bug (comma instead of `=>`)
- [FIX] Replace deprecated `sizeof()` with `count()`
- [FIX] Fix deprecated `crin the repo, create a new branch eate_extension_metadata_manager()` usage
- [NEW] Add `ext.php` version gate requiring phpBB 3.3.0+
- [CHG] Minimum PHP version raised to 7.1.3
- [CHG] Minimum phpBB version raised to 3.3.0

##### 3.2.8 07/07/2020
- [FIX] support small rank icons.
- [FIX] support phpBB 3.3

##### 3.2.7 04/07/2020
- [NEW] add support for bbguild avatars and small rank icons. 

##### 3.2.6 11/05/2018
- [FIX] fix curl https links, migrations dependency issue

##### 3.2.5 01/04/2018
- [FIX] set z-index for video div due to some links not clickable

##### 3.2.4 24/12/2017
- [FIX] pbwow3_wotlk support
- [FIX] prosilver support

##### 3.2.3 13/12/2017
- [FIX] pbwow3_heroes support

##### 3.2.2 12/10/2017
- [FIX] #16 moved pbwowext css & assets to extension except style-dependent elements (video assets, premium backgrounds...)
- [CHG] #17 Converted to Twig syntax
- [FIX] #18 fixed the video display
- [FIX] #19 fixed the "fixed" background display
  
##### 3.2.1 09/09/2017
- [UPG] Fix for responsibe view in Topbar  
- [FIX] Versioncheck fix  

##### 3.2.0 03/09/2017
- [UPG] #4 compatible with pbWoW 3.2.1
- [DEL] #3 removed battle.NET avatars and profile fields. to be moved to another extension.    
 
##### 3.0.5b 30/12/2016
- [FIX] fix in migrations

##### 3.0.5 18/12/2016
- [FIX] ACP now correctly sets the version color to red when extension is not up to date. 
- [FIX] Blizzard Static Render Domains Update 

##### 3.0.4 13/11/2016
- [FIX] fix for phpbb 3.1.10

##### 3.0.3 13/11/2016
- [NEW] now uses phpbb native version_helper class to fetch latest version info in ACP.
- [NEW] added Demon hunter class for WoW
- [CHG] Level cap changed to 110
- [NEW] added uninstall feature

