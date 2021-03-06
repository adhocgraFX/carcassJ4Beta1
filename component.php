<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.carcass
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;

/** @var JDocumentHtml $this */

// Enable assets
$wa = $this->getWebAssetManager();
$wa->usePreset('template.carcass');
// register asset
$wa->registerPreset('template.carcass');


?>

<!DOCTYPE html>

<html lang="<?php echo $this->language; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <jdoc:include type="head"/>
</head>
<body>
<jdoc:include type="message"/>
<jdoc:include type="component"/>
</body>
</html>
