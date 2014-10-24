<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Toolbar
 *
 * @author WEE
 */
class Toolbar extends CApplicationComponent{
    // declaration of $btn_type
    const BTN_ADD = "add";
    const BTN_EDIT = "edit";
    const BTN_VOID = "void";
    const BTN_DELETE = "delete";
    const BTN_CANCEL = "cancel";
    const BTN_SAVE = "save";
    const BTN_FIRST = "first";
    const BTN_PREV = "prev";
    const BTN_NEXT = "next";
    const BTN_LAST = "last";
    const BTN_SEARCH = "search";
    const BTN_ITEM = "item";
    const BTN_NOTE = "note";
    const BTN_PRINT = "print";
    const BTN_SO = "so";

    // declaration of button title
    
    public static function button($btn_type, $appform_id, $btn_text = ""){
        return '<button class="toolbar-btn '.$btn_type.'" id="'.$appform_id.'-'.$btn_type.'" title="'.Yii::t("sys_msg", $btn_type).'">'.$btn_text.'</button>';
    }
    
    public static function divider(){
        return '<span class="toolbar divider"></span>';
    }
}
