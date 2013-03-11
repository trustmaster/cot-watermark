<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
 * Code=watermark
 * Name=Watermarks for images
 * Description=Rewrites image links for watermark
 * Version=1.1
 * Date=2013-03-11
 * Author=Trustmaster
 * Copyright=All rights reserved (c) 2011-2013, Vladimir Sibirov.
 * Notes=BSD License.
 * SQL=
 * Auth_guests=R
 * Lock_guests=W12345A
 * Auth_members=R
 * Lock_members=12345
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
 * masks=01:text::datas/users/(.*?)\.(gif|jpeg|jpg|png):URL masks to rewrite, one per line
 * rewrite=02:radio::1:Enable rewrite
[END_COT_EXT_CONFIG]
==================== */
