<?php
/* ====================
[BEGIN_COT_EXT]
Code=cattemplateswitcher
Name=Category template switcher
Category=navigation-structure
Description=Adds visitors the opportunity to switch the display mode (templates) category
Version=1.1
Date=2014-04-06
Author=Dayver
Copyright=Partial copyright (c) Dayver 2013-2014
Notes=BSD License
Auth_guests=R
Lock_guests=W12345A
Auth_members=R
Lock_members=W12345A
Requires_modules=page
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
mode=01:string::default,table,line:Mode codes, comma separated
global_save=02:radio::0:Save switched mode for any cat or for all
[END_COT_EXT_CONFIG]
==================== */
defined('COT_CODE') or die('Wrong URL');