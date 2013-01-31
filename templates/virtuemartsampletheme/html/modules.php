<?php
defined('_JEXEC') or die('Restricted access');

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the sliders style, you would use the following include:
 * <jdoc:include type="module" name="test" style="slider" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * three arguments.
 */


/**
 * Custom module chrome, echos the whole module in a <div> and the header in <h{x}>. The level of
 * the header can be configured through a 'headerLevel' attribute of the <jdoc:include /> tag.
 * Defaults to <h3> if none given
 */

function modChrome_user ($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php if ($module->showtitle) : ?>
            <div class="box-head-top">
                <div class="box-head-right">
                    <div class="box-head-left">
                        <div class="box-head-top-right">
                            <div class="box-head-top-left">
                                <h<?php echo $headerLevel; ?>><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php endif; ?>
                                
			<div class="box-bottom">
			<?php if ($module->showtitle) : ?>
                <div class="box-top">
            <?php else: ?>
                <div class="box-top2">
			<?php endif; ?>
                    <div class="box-right">
                        <div class="box-left">
                            <div class="box-bottom-right">
                                <div class="box-bottom-left">
								<?php if ($module->showtitle) : ?>
                                    <div class="box-top-right">
                                        <div class="box-top-left">
                                <?php else: ?>
                                    <div class="box-top2-right">
                                        <div class="box-top2-left">
                                <?php endif; ?>
                                            <div class="width">
                        
                                                <div class="box-indent">
                                                    <div class="width">
                                                        <?php echo $module->content; ?>
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
	<?php endif; 
}
function modChrome_top ($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
        	<div class="module-padding">
				<?php if ($module->showtitle) : ?>
                    <h<?php echo $headerLevel; ?>><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
                <?php endif; ?>
                <?php echo $module->content; ?>
            </div>
		</div>
	<?php endif; 
}
function modChrome_bottom ($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
        	<div class="module-padding">
				<?php if ($module->showtitle) : ?>
                    <h<?php echo $headerLevel; ?>><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
                <?php endif; ?>
                <?php echo $module->content; ?>
            </div>
		</div>
	<?php endif; 
}
function modChrome_before ($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php if ($module->showtitle) : ?>
                <h<?php echo $headerLevel; ?>><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
            <?php endif; ?>
            <?php echo $module->content; ?>
		</div>
	<?php endif; 
}
function modChrome_after ($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php if ($module->showtitle) : ?>
                <h<?php echo $headerLevel; ?>><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
            <?php endif; ?>
            <?php echo $module->content; ?>
		</div>
	<?php endif; 
}