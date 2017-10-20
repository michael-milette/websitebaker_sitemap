<?php
/*
 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2010, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/*
 -----------------------------------------------------------------------------------------
  Sitemap module for Website Baker v2.7.x-2.8.x (http://www.websitebaker.org)
  The Sitemap module provides the facility to add a sitemap of your website.
 -----------------------------------------------------------------------------------------

	DEVELOPMENT HISTORY (Change Log):
	
- 3.1.3 	2011-08-09	Dietrich Roland Pehlke
						- remove old WB 2.4 stuff, vars inside the view.php

   v3.1.2 (Michael Milette; August 9, 2010)
                   Fixed: (with error reporting on 'E_ALL'), notice message
                     regarding undefined index: show_hidden that appeared when
                     saving settings.
                   Updated this changelog using info from help.php.
                   Remove change log from help.php to minimize techy info in
                     user interface.

   v3.1.1 (Michael Milette; August 8, 2010) No new features.
   + [update_sitemap.php] Now replaced by new upgrade.php which is automatically
                     run when upgrading using Modules installation tool.
	 + [upgrade.php] Upgrades now include the creation of the show_hidden field.
                   Upgrades now reports errors.
   + [info.php]    Now reflects compatibility with Website Baker v2.8.x.
                   Updated: All copyright notices upgraded to now include 2010.

   v3.1            (kozmoz; 10-16-2006)
                   Added: Option to show hidden pages.
                   Added: Dutch Translation

   v3.0   (rssmith, Ruebenwurzel; 9-12-2006)
                   Fixed: [MODIFIED_BY] displays now the displayname instead of
                     the userid.
                   Fixed: install script now works with mysql5 strict mode

   v2.9   (Ruebenwurzel; 05-07-2006)
                   Added: New variables: MODIFIED_DATE] and [MODIFIED_TIME]
                     setup to allow for a more controlled layout
                   Changed: The date/time is now more customizable.

   v2.8   (Ruebenwurzel; 03-04-2006)
                   Renamed: databasefield 'loop' to 'sitemaploop' to be
                     compatible to MySQL 5.x
                   Added: update_sitemap.php script to update from previous
                     versions
                   Updated: All copyright notices includes now 2006
                   Added: Default value to all varchar and text fields

   v2.7   (Ruebenwurzel; 12-28-2005)
                   Added: New multilanguage support
                   Changed: Minor layout changes in admin interface

   v2.6.2 (Ruebenwurzel; 11-25-2005)
                   Added: Language file works with help file
                   Changed: Minor layout changes in admin Interface
                   Fixed: Code cleaning and all files stored UNIX conform

   v2.6.1 (Woudloper,Ruebenwurzel; 11-24-2005)
                   Added: Uninstall functionality for the module.
                   Fixed: Layout of the help.php file within Internet Explorer.

	 v2.6.0 (Woudloper; 11-16-2005)
                   Added: External language file</li>
                   Fixed: Declaration of variables. On some servers (with error
                     reporting on 'E_ALL') warnings where displayed about some
                     variables.
                   Fixed: Warning message (regarding variables) when saving the
                     settings within the admin console.
                   Changed: Layout of the admin section for the sitemap module.

*/

$module_directory = 'sitemap';
$module_name = 'Sitemap';
$module_function = 'page';
$module_version = '3.1.3';
$module_platform = '2.5.x - 2.8.x';
$module_author = 'Ryan Djurovich, Frank Schoep, Woudloper, Ruebenwurzel, Rob Smith, Mouring Kolhoff, Michael Milette, Dietrich Roland Pehlke (last)';
$module_license = 'GNU General Public License';
$module_description = 'This module allows you to easily create a sitemap. You can even work with additional layout settings for the sitemap. It also gives you the option to show hidden menu items if required';
$module_home = 'http://www.websitebakers.com';
$module_guid = '8B7C09E5-6246-4264-8959-8AA542D7BD6';

?>