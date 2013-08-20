<?php

/*
 * This file is part of the Access to Memory (AtoM) software.
 *
 * Access to Memory (AtoM) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Access to Memory (AtoM) is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Access to Memory (AtoM).  If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__).'/../vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $plugins = array(
      'qbAclPlugin',
      'qtAccessionPlugin',
      'sfDrupalPlugin',
      'sfFormExtraPlugin',
      'sfHistoryPlugin',
      'sfLucenePlugin',
      'sfPropelPlugin',
      'sfSearchPlugin',
      'sfThemePlugin',
      'sfThumbnailPlugin',
      'sfTranslatePlugin',
      'sfWebBrowserPlugin',

      // sfInstallPlugin and sfPluginAdminPlugin depend on sfPropelPlugin, so
      // must be enabled last
      'sfInstallPlugin',
      'sfPluginAdminPlugin');

    $this->enablePlugins($plugins);
  }

  public function isPluginEnabled($pluginName)
  {
    return false !== array_search($pluginName, $this->plugins);
  }
}
