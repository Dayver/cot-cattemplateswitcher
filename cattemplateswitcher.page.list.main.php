<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.list.main
Order=10
[END_COT_EXT]
==================== */
defined('COT_CODE') or die('Wrong URL');

$tpl_arr = array('page', 'list');

$mode = cot_import('mode', 'R', 'ALP');
require_once cot_langfile('cattemplateswitcher', 'plug');
$modes = explode(',', $cfg['plugin']['cattemplateswitcher']['mode']);
if (!empty($mode) && in_array($mode, $modes) && $mode != 'default') $_SESSION[$c]['cat_tpl_mode'] = $mode;
elseif($mode == 'default') unset($_SESSION[$c]['cat_tpl_mode']);
if (isset($_SESSION[$c]['cat_tpl_mode']) && !empty($_SESSION[$c]['cat_tpl_mode']))
{
	$mode = $_SESSION[$c]['cat_tpl_mode'];
	$tpl_arr[] = $mode;
}
else $mode = 'default';

if (!empty($cat['tpl'])) $tpl_arr[] = $cat['tpl'];

$mskin = cot_tplfile($tpl_arr);

?>