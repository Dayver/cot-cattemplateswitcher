<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.list.main
Order=10
[END_COT_EXT]
==================== */
defined('COT_CODE') or die('Wrong URL');

require_once cot_langfile('cattemplateswitcher', 'plug');

$mode = cot_import('mode', 'R', 'ALP');

$tpl_arr = array('page', 'list');
$modes = explode(',', $cfg['plugin']['cattemplateswitcher']['mode']);
if ($cfg['plugin']['cattemplateswitcher']['global_save']) $saved_mode = &$_SESSION[$c]['cat_tpl_mode'];
else $saved_mode = &$_SESSION['cat_tpl_mode'];

if (!empty($mode) && in_array($mode, $modes) && $mode != 'default') $saved_mode = $mode;
elseif($mode == 'default')
{
	if ($cfg['plugin']['cattemplateswitcher']['global_save']) unset($_SESSION[$c]['cat_tpl_mode']);
	else unset($_SESSION['cat_tpl_mode']);
	unset($saved_mode);
}

if (isset($saved_mode) && !empty($saved_mode))
{
	$mode = $saved_mode;
	$tpl_arr[] = $mode;
}
else $mode = 'default';

if (!empty($cat['tpl'])) $tpl_arr[] = $cat['tpl'];

$mskin = cot_tplfile($tpl_arr);