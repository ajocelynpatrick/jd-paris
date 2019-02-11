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

// No direct access.
defined('_JEXEC') or die;

class PlgTZ_Portfolio_PlusContentVoteModelDate extends TZ_Portfolio_PlusPluginModelItem{
    public function getItem()
    {
        if($item = parent::getItem()) { // TODO: Change the autogenerated stub
            if(isset($item -> id)){
                $item -> rating_count   = 0;
                $item -> rating_sum     = 0;

                if($vote = TZ_Portfolio_PlusAddOnContentVoteHelper::getVoteByArticleId($item -> id)) {
                    foreach($vote as $key => $value){
                        $item -> $key   = $value;
                    }
                }
                return $item;
            }
        }
    }
}