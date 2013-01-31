<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');
$url = clone(JURI::getInstance());
$path = $this->baseurl.'/templates/'.$this->template;
$showLeft = ($this->countModules('left'));
$showRight = ($this->countModules('right'));
$breadcrumb = ($this->countModules('breadcrumb'));
define('TM_PATH', $path);
?>
<?php include(JPATH_BASE .DS.'templates/'.$this->template.'/functions.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $path ?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $path ?>/css/constant.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $path ?>/css/vm_modules.css" type="text/css" />
    <script type="text/javascript" src="<?php echo $path ?>/scripts/eqal_column.js"></script>
<!--[if IE 6]>
	<script type="text/javascript" src="<?php echo $path ?>/scripts/ie_png.js"></script>
    <script type="text/javascript">
       ie_png.fix('.png, .vmCartModule, .button');
   </script>
<![endif]-->
</head>
<body id="body">
	<div class="main">
        <div class="main-indent">
        
            <div id="header">
                <div class="header-top">
                    <div class="header-bottom">
                        <div class="header-right">
                            <div class="header-left">
                                <div class="header-bottom-right">
                                    <div class="header-bottom-left">
                                        <div class="header-top-right">
                                            <div class="header-top-left">
                                            	<div class="width">
                                                    <div class="logo"><a href="index.php"><img src="<?php echo $path ?>/images/logo.jpg" alt="" border="0" /></a></div>
                                                    <div class="top-modules">
                                                        <div class="row-1">
                                                            <div class="row-indent">
                                                            	<div class="width">
                                                                    <jdoc:include type="modules" name="user1" style="top" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-2">
                                                        	<div class="row-indent">
                                                                <div class="width">
                                                            		<jdoc:include type="modules" name="user2" style="top" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content-bottom">
                <div class="content-right">
                    <div class="content-left">
                        <div class="content-bottom-right">
                            <div class="content-bottom-left">
                                <div class="width">
                                    <div class="content-padding">
                                
                                        <div class="menu-block-top">
                                            <div class="menu-block-bottom-right">
                                                <div class="menu-block-bottom-left">
                                                    <div class="menu-block-top-right">
                                                        <div class="menu-block-top-left">
                                                        	<div class="width">
                                                        		
                                                                <div class="menu">
                                                                    <jdoc:include type="modules" name="menu" style="top" />
                                                                </div>
                                                            
                                                                <div class="user-3">
                                                                    <jdoc:include type="modules" name="user3" style="top" />
                                                                </div>
                                                        	
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="wrapper">
                                        	<?php if ($breadcrumb) : ?>
                                        	<div id="breadcrumb">
	                                            <jdoc:include type="modules" name="breadcrumb" style="top" />
                                            </div>
                                            <?php endif; ?>
                                            <div class="content">
                                                <?php if ($showLeft) : ?>
                                                <div class="left">
                                                    <div class="width">
                                                        <jdoc:include type="modules" name="left" style="user" />
                                                        <jdoc:include type="modules" name="user4" />
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <div class="center">
                                                    <div class="<?php echo $showLeft ? 'indent-center' : 'indent-center-2'; if (!$showRight) echo '3';?>">
                                                        <div class="width">
                                                            <?php if ($this->getBuffer('message')) : ?>
                                                                <div class="error err-space">
                                                                    <jdoc:include type="message" />
                                                                </div>
                                                            <?php endif; ?>
                                                            <jdoc:include type="modules" name="before" style="before" />
                                                            <div class="indent-content-2">
                                                                <div class="width">
                                                                    <jdoc:include type="component" />
                                                                </div>
                                                            </div>
                                                            <jdoc:include type="modules" name="after" style="after" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if ($showRight) : ?>
                                                <div class="right">
                                                    <div class="width">
                                                        <jdoc:include type="modules" name="right" style="user" />
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        <div id="footer">
                                            <div class="footer-top">
                                                <div class="footer-bottom">
                                                    <div class="footer-right">
                                                        <div class="footer-left">
                                                            <div class="footer-bottom-right">
                                                                <div class="footer-bottom-left">
                                                                    <div class="footer-top-right">
                                                                        <div class="footer-top-left">
                                                                        	<div class="footer-indent">
                                                                            	<div class="width">
                                                                                    <div class="cards">
                                                                                    	<img src="<?php echo $path ?>/images/paypal.gif" border="0" alt="" />
                                                                                    </div>
                                                                                    <div class="footer">
                                                                                        <jdoc:include type="modules" name="footer" style="bottom" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
<jdoc:include type="modules" name="debug" />
</body>
</html>