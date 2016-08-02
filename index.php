<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>
<body>
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
