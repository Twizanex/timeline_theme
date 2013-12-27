<?php
/***************************************************************************
* TwizaNex Smart Community Software
* ---------------------------------
* Start.php: timeline_theme for Elgg 1.8.15
*        
* begin : Mon Mar 23 2011
* copyright : (C) 2011 TwizaNex Group
* website : http://www.TwizaNex.com/
* This file is part of TwizaNex - Smart Community Software
*
* @package Twizanex
* @link http://www.twizanex.com/
* TwizaNex is free software. This work is licensed under a GNU Public License version 2.
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
* @author Tom Ondiba <twizanex@yahoo.com>
* 
* @package Timeline_theme 
* @package Friends finder theme 
* @author sijo @ Cubet Technologies
* @copyright Twizanex Group 2014
* TwizaNex is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
* without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Public License version 2 for more details.
* For any questions or suggestion write to write to twizanex@yahoo.com
*
***************************************************************************/


/**
 * Init timeline finder plugin.
 */
function timeline_init() {

	// add to the main css
	elgg_extend_view('css/elgg', 'timeline_theme/css');
	
	/**
         * Miscellaneous  javascript customizations
         */
  //     elgg_extend_view('page/elements/footer', 'page/elements/js/timeline_theme.php', '701');//scrol to the top
      //  elgg_extend_view('js/elgg', 'js/timeline_theme');
        

        elgg_unextend_view('page/elements/header', 'search/header');
        
	// Replace the default index page
	elgg_register_plugin_hook_handler('index', 'system', 'timeline_index', 300);

	// Register a page handler, so we can have nice URLs
	elgg_register_page_handler('timeline', 'timeline_page_handler');
	
	elgg_extend_view('page/elements/header.php', 'page/elements/ownericon/owner_block_icon.php', '500');//Tom : Invocational codes
	
	//Menu Customization	
	
	
	

}


/**
 *
 * @param array $page
 * @return NULL
 */
function timeline_page_handler($page) {
        $file_dir = elgg_get_plugins_path() . 'timeline_theme/pages/timeline';
        
        if (isset($page[0])) {
                switch ($page[0]) {

                }
        }else{
                 include (elgg_get_plugins_path() . 'timeline_theme/index.php');
        }
}

function timeline_index($hook, $type, $return, $params) {


	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}

	// return true to signify that we have handled the front page
	return true;
}

elgg_register_event_handler('init', 'system', 'timeline_init');