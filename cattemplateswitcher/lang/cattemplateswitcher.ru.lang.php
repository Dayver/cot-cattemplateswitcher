<?php
defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_desc'] = 'Добавляет возможность посетителям переключать режим отображения(шаблоны) категории';

/**
 * Plugin Config
 */

$L['cfg_mode'] = array('Коды режимов', 'через запятую');
$L['cfg_global_save'] = array('Сохранять переключение режима для каждой категории отдельно или для всех?', 'Если "Да" то для каждой, если "Нет" то для всех');

/**
 * Plugin Admin
 */

//$L['adm_'] = '';

/**
 * Plugin Body
 */

$L['plug_cattemplateswitcher_mode']['line'] = 'Линейный';
$L['plug_cattemplateswitcher_mode']['table'] = 'Таблица';
$L['plug_cattemplateswitcher_mode']['default'] = 'По умолчанию';