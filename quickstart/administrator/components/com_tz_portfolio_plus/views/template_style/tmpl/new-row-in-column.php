<?php
/*------------------------------------------------------------------------

# TZ Portfolio Plus Extension

# ------------------------------------------------------------------------

# author    DuongTVTemPlaza

# copyright Copyright (C) 2015 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

define( '_JEXEC', 1 );

// No direct access
defined('_JEXEC') or die('Restricted access');

define('JPATH_BASE', dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))));
require_once ( JPATH_BASE.'/includes/defines.php' );
require_once ( JPATH_BASE.'/includes/framework.php' );

JFactory::getLanguage() -> load('com_tz_portfolio_plus');

$parentId   = uniqid(rand());
$id         = uniqid(rand());
?>
<div class="row-fluid child-row">
    <div class="span12">

        <div class="rowpropperties pull-left">
            <span class="rowname"></span>
            <span class="rowdocs">
                <input type="hidden" class="rownameinput" name="" value="">
                <input type="hidden" class="rowcustomclassinput" name="" value="">
                <input type="hidden" class="rowresponsiveinput" name="" value="">

                 <input type="hidden" class="rowbackgroundcolorinput" name="" value="rgba(255, 255, 255, 0)">
                <input type="hidden" class="rowtextcolorinput" name="" value="rgba(255, 255, 255, 0)">
                <input type="hidden" class="rowlinkcolorinput" name="" value="rgba(255, 255, 255, 0)">
                <input type="hidden" class="rowlinkhovercolorinput" name="" value="rgba(255, 255, 255, 0)">
                <input type="hidden" class="rowmargininput" name="" value="">
                <input type="hidden" class="rowpaddinginput" name="" value="">
            </span>
        </div>

        <div id="<?php echo $parentId?>" class="pull-right row-tools">
            <a href="" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_MOVE_THIS_ROW');?>" class="fa fa-arrows row-move-in-column"></a>
            <a href="javascript:" class="accordion-toggle"
               data-toggle="collapse" data-parent="#<?php echo $parentId;?>"
               data-target="#<?php echo $id;?>">
                <span class="fa fa-chevron-up"></span><span class="fa fa-chevron-down"></span>
            </a>
            <a href="" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_ADD_NEW_ROW');?>" class="fa fa-bars add-row"></a>
            <a href="" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_ADD_NEW_COLUMN');?>" class="fa fa-columns add-column"></a>
            <a href="#rowsettingbox" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_ROW_SETTINGS');?>" class="fa fa-cog rowsetting" rel="rowpopover"></a>
            <a href="" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_DELETE_ROW');?>" class="fa fa-times rowdelete"></a>
        </div>
        <div class="clearfix"> </div>
        <div id="<?php echo $id;?>" class="row-fluid show-grid collapse in">
            <div class="column span12">

                <span class="position-name">(<?php echo JText::_('JNONE');?>)</span>

                <div class="columntools">
                    <a href="#columnsettingbox" rel="popover" data-placement="bottom" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_COLUMN_SETTINGS');?>" class="fa fa-cog rowcolumnspop"></a>
                    <a href="" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_ADD_NEW_ROW');?>" class="fa fa-bars add-rowin-column"></a>
                    <a href="" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_REMOVE_COLUMN');?>" class="fa fa-times columndelete"></a>
                    <a href="" title="<?php echo JText::_('COM_TZ_PORTFOLIO_PLUS_MOVE_COLUMN');?>" class="fa fa-arrows columnmove"></a>
                </div>

                <input type="hidden" class="widthinput-xs" name="" value="12">
                <input type="hidden" class="widthinput-sm" name="" value="12">
                <input type="hidden" class="widthinput-md" name="" value="12">
                <input type="hidden" class="widthinput-lg" name="" value="12">
                <input type="hidden" class="offsetinput-xs" name="" value="">
                <input type="hidden" class="offsetinput-sm" name="" value="">
                <input type="hidden" class="offsetinput-md" name="" value="">
                <input type="hidden" class="offsetinput-lg" name="" value="">
                <input type="hidden" class="typeinput" name="" value="none">
<!--                <input type="hidden" class="positioninput" name="" value="">-->
<!--                <input type="hidden" class="styleinput" name="" value="sp_xhtml">-->
                <input type="hidden" class="customclassinput" name="" value="">
                <input type="hidden" class="responsiveclassinput" name="" value="">
            </div>
        </div>
    </div>
</div>
