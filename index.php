<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

$app         = Factory::getApplication();
$menu        = $app->getMenu();
$pageClass   = $menu->getActive()->getParams()->get('pageclass_sfx');
$templateUrl = $this->baseurl . '/templates/' . $this->template;

$this->setMetaData('viewport', 'width=device-width, initial-scale=1');
$this->addStyleSheet($templateUrl . '/css/template.css');
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
            <jdoc:include type="modules" name="header" style="html5" />
        <?php endif; ?>
    </header>

    <main id="main" role="main">
        <jdoc:include type="component" />
    </main>

    <?php if ($this->countModules('footer')): ?>
    <footer id="footer" role="contentinfo">
        <jdoc:include type="modules" name="footer" style="html5" />
    </footer>
    <?php endif; ?>
</body>
</html>
