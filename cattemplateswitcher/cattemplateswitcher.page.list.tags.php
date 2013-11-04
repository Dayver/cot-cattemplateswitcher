<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.list.tags
Tags=page.list.tpl:{LIST_TPL_SWITCHER}
Order=10
[END_COT_EXT]
==================== */
defined('COT_CODE') or die('Wrong URL');

$t_tpl_switcher = new XTemplate(cot_tplfile('cattemplateswitcher.switcher', 'plug'));
foreach ($modes as $mod)
{	$t_tpl_switcher->assign(array(
		'THIS_MODE' => $mod == $mode ? true : false,
		'SELECTED_MODE' => $mode,
		'MODE' => $mod,
		'URL_HREF' => cot_url('page', $list_url_path),
		'URL_HREF_WITH_MODE' => cot_url('page', $list_url_path + array('mode' => $mod)),
		'URL_HREF_WITH_MODE_AJAX' => str_replace('?', ';', cot_url('page', $list_url_path + array('mode' => $mod))),
		'URL_ANKOR' => $L['plug_cattemplateswitcher_mode'][$mod]
	));	$t_tpl_switcher->parse('MAIN.URL_ROW');}
$t_tpl_switcher->parse('MAIN');
$t->assign('LIST_TPL_SWITCHER', $t_tpl_switcher->text('MAIN'));

?>