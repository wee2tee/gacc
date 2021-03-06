<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppFormController
 *
 * @author WEE
 */
class AppFormController extends Controller {
    const GL_UNPOST = '000';
    const GL_POSTED = '001';

    //private $suffix_rand_id = array("A","B","C","D","E","0","1","2","3","4","F","G","H","I","J","5","6","7","8","9");
    
    // Generate appform_id
    /*private function rand_appform_id(){
        $rand = array_rand($this->suffix_rand_id, 5);
        return time() . $this->suffix_rand_id[$rand[0]] . $this->suffix_rand_id[$rand[1]] . $this->suffix_rand_id[$rand[2]] . $this->suffix_rand_id[$rand[3]] . $this->suffix_rand_id[$rand[4]];
    }*/
    
    // GLJNL Unpost
    public function actionGL0($doccod = NULL){
        if(!empty($_POST)){
            /**
                Check data existing
            **/
            //$appform_id = self::GL_UNPOST . '-' . filter_input(INPUT_POST, "doccod") . '-' . filter_input(INPUT_POST, "prefix");
            $appform_id = self::GL_UNPOST . '-' . filter_input(INPUT_POST, "prefix");
            $data = array("appform_id" => $appform_id, "appform_title" => "GL(unpost)");
            $appform = $this->renderPartial("//appform/gljnl_u", $data, TRUE);
            echo CJSON::encode(array("result" => TRUE, "appform" => $appform, "appform_id" => $appform_id, "appform_title" => "GL(unpost)"));
        }
        else{
            echo CJSON::encode(array("result" => FALSE, "msg" => Yii::t("sys_msg", "cannot-retrieve-appform")));
        }
    }

    // GLJNL Posted
    public function actionGL1($doccod = NULL){
        if(!empty($_POST)){
            /**
                Check data existing
            **/
            //$appform_id = self::GL_POSTED . '-' . filter_input(INPUT_POST, "doccod") . '-' . filter_input(INPUT_POST, "prefix");
            $appform_id = self::GL_POSTED . '-' . filter_input(INPUT_POST, "prefix");
            $data = array("appform_id" => $appform_id, "appform_title" => "GL(posted)");
            $appform = $this->renderPartial("//appform/gljnl_p", $data, TRUE);
            echo CJSON::encode(array("result" => TRUE, "appform" => $appform, "appform_id" => $appform_id, "appform_title" => "GL(posted)" ));
        }
        else{
            echo CJSON::encode(array("result" => FALSE, "msg" => Yii::t("sys_msg", "cannot-retrieve-appform")));
        }
    }
}
