<?php

defined('_JEXEC') or die;

$app  = JFactory::getApplication();
$menu = $app->getMenu()->getActive();

$templateUrl = $this->baseurl . '/templates/' . $this->template;

$pageClass = '';
if (is_object($menu)) {
    $pageClass = $menu->params->get('pageclass_sfx');
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" type="text/css" />
</head>
<body class="<?php echo $pageClass ? htmlspecialchars($pageClass) : ''; ?>">
    <?php if ($this->countModules('header')): ?>
        <header id="header" role="banner">
            <jdoc:include type="modules" name="header" />
        </header>
    <?php endif; ?>

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
