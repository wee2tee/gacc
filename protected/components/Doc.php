<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RetrieveDoc
 *
 * @author WEE
 */
class Doc extends CApplicationComponent {
    /** Getting child node document from ISRUN **/
    public function getChild($doctyp = NULL){
        $child = array();
        if($doctyp !== NULL){
            $lang = Yii::app()->session['sess_lang'];
            //$sql = "select doctyp,shortnam_".$lang." as shortnam,posdes_".$lang." as posdes,jnlexp_".$lang." as jnlexp from isrun where doctyp = :doctyp";
            $sql = "select doctyp, shortnam_th, shortnam_en, posdes_th, posdes_en, jnlexp_th, jnlexp_en from isrun where doctyp = :doctyp";
            $params = array(":doctyp" => $doctyp);
            $docs = Isrun::model()->findAllBySql($sql, $params);
            if(!empty($docs)){
                $child =    array(
                                "has_child" => TRUE,
                                "docs" => $docs
                            );
                
            }
            else{
                $child =    array(
                                "has_child" => FALSE,
                            );
            }
        }
        else{
            $child =    array(
                            "has_child" => FALSE,
                        );
        }
        return $child;
    }
    
    
}
