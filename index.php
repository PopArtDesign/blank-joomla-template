<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

$app         = Factory::getApplication();
$menu        = $app->getMenu();
$pageClass   = $menu->getActive()->getParams()->get('pageclass_sfx');
$templateUrl = $this->baseurl . '/templates/' . $this->template;
$useJquery   = (bool) $this->params->get('useJquery', 0);

$this->setMetaData('viewport', 'width=device-width, initial-scale=1');
$this->addStyleSheet($templateUrl . '/css/template.css');

if ($useJquery) {
    HTMLHelper::_('jquery.framework');
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <jdoc:include type="head" />
</head>
<body class="<?php echo $pageClass ? \htmlspecialchars($pageClass) : ''; ?>">
    <header id="header" role="banner">
        <a href="<?php echo $this->baseurl; ?>">Home</a>

        <?php if ($this->countModules('header')): ?>
            <jdoc:include type="modules" name="header" />
        <?php endif; ?>
    </header>

    <main id="main" role="main">
        <jdoc:include type="component" />
    </main>

    <?php if ($this->countModules('footer')): ?>
    <footer id="footer" role="contentinfo">
        <jdoc:include type="modules" name="footer" />
    </footer>
    <?php endif; ?>
</body>
</html>
