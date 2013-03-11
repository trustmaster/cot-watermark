<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
 * Hooks=output
[END_COT_EXT]
==================== */

if (!defined('COT_ADMIN') && $cfg['plugin']['watermark']['rewrite'])
{
	// Get the masks
	global $cfg;
	$masks = preg_split('#\r?\n#', $cfg['plugin']['watermark']['masks']);
	// Rewrite output for each mask
	foreach ($masks as $mask)
	{
		$mask = trim($mask);
		if (!empty($mask))
			$output = preg_replace_callback('#'.$mask.'#i', create_function('$matches', 'return "plugins/watermark/lib/watermark.php?path=".  urlencode($matches[0]);'), $output);
	}
}
