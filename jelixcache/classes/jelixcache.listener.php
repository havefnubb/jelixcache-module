<?php
/**
* @package   havefnubb
* @subpackage jelixcache
* @author    FoxMaSk
* @contributor Laurent Jouanneau
* @copyright 2008-2011 FoxMaSk, 2010 laurent jouanneau
* @link      https://havefnubb.jelix.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class jelixcacheListener extends jEventListener{

    function onmasteradminGetMenuContent ($event) {
        if ( jAcl2::check('jelixcache.access')) {
            $item = new masterAdminMenuItem('jelixcache',
                                            jLocale::get('jelixcache~jelixcache.masteradmin.menu.item'),
                                            jUrl::get('jelixcache~default:index'),
                                            100,
                                            'system');
            $item->icon = \jUrl::get('jelix~www:getfile', array('targetmodule' => 'jelixcache', 'file' => 'clear_cache.png'));
            $event->add($item);
        }

    }
}
