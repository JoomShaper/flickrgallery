<?php
/**
 * @package		SP Flickr Gallery
 * @copyright	Copyright (C) 2010 - 2015 JoomShaper. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;

$doc = JFactory::getDocument();

//Load JS
JHtml::_('jquery.framework');
$doc->addScript(JURI::base(true) . '/modules/mod_sp_flickrgallery/assets/js/sp-flickr-gallery.js');
//Load CSS
$doc->addStyleSheet(JURI::base(true) . '/modules/mod_sp_flickrgallery/assets/css/sp-flickr-gallery.css');

require JModuleHelper::getLayoutPath('mod_sp_flickrgallery', $params->get('layout'));