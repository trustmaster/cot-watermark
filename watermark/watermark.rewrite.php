<?php
/* ====================
[BEGIN_COT_EXT]
 * Hooks=output
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

if (!defined('COT_ADMIN'))
{
	// Get the masks
	global $cfg;
	$masks = preg_split('#\r?\n#', $cfg['plugin']['watermark']['masks']);
	// Rewrite output for each mask
	foreach ($masks as $mask)
	{
		$output = preg_replace_callback('#'.$mask.'#i', create_function('$matches', 'return "plugins/watermark/lib/watermark.php?path=".  urlencode($matches[0]);'), $output);
	}
}

?>
