<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

// Watermark callback

function watermark($src)
{
	return 'plugins/watermark/lib/watermark.php?path=' . urlencode($src);
}
