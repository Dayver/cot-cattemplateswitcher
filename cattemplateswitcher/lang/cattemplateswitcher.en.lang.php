<?php
defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_desc'] = 'Adds visitors the opportunity to switch the display mode (templates) category';

/**
 * Plugin Config
 */

$L['cfg_mode'] = array('Mode codes', 'comma separated');
$L['cfg_global_save'] = array('Save switched mode for any cat or for all', '');

/**
 * Plugin Admin
 */

//$L['adm_'] = '';

/**
 * Plugin Body
 */

$L['plug_cattemplateswitcher_mode']['line'] = 'linear';
$L['plug_cattemplateswitcher_mode']['table'] = 'Table';
$L['plug_cattemplateswitcher_mode']['default'] = 'Default';