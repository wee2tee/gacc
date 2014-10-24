<li><a href="javascript:void(0)" onclick="return toggleMenuAct($(this).parent())" class="icon dropdown after"><?php echo Yii::t("navigation", "account"); ?></a>
    <ul class="lev1">
        <li><a href="javascript:void(0)" onclick="return toggleSubMenuAct($(this).parent())" class="icon dropdown after"><?php echo Yii::t("navigation", "account-1"); ?></a>
            <ul class="lev1 indent">
                <li><a href="javascript:void(0)" class="icon dropdown after" onclick="return toggleSubMenuAct($(this).parent())"><?php echo Yii::t("navigation", "account-1-1"); ?></a>
                    <ul class="lev1 indent">
                        <?php
                        $child = Yii::app()->CDoc->getChild("GL");
                        foreach ($child['docs'] as $doc):
                        ?>
                        <li><a href="javascript:void(0)" class="icon" onclick="return callAppForm('GL0', '<?php echo $doc->doccod ?>', '<?php echo $doc->prefix ?>')"><?php echo (Yii::app()->session['sess_lang']=='th' ? $doc->shortnam_th : $doc->shortnam_en ); ?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>
                <li><a href="javascript:void(0)" class="icon dropdown after" onclick="return toggleSubMenuAct($(this).parent())"><?php echo Yii::t("navigation", "account-1-2"); ?></a>
                    <ul class="lev1 indent">
                        <?php
                        $child = Yii::app()->CDoc->getChild("GL");
                        foreach ($child['docs'] as $doc):
                        ?>
                        <li><a href="javascript:void(0)" class="icon" onclick="return callAppForm('GL1', '<?php echo $doc->doccod ?>', '<?php echo $doc->prefix ?>')"><?php echo (Yii::app()->session['sess_lang']=='th' ? $doc->shortnam_th : $doc->shortnam_en ); ?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="divider"></li>
        <li><a href="javascript:void(0)" class="icon"><?php echo Yii::t("navigation", "account-2"); ?></a></li>
        <li><a href="javascript:void(0)" onclick="return toggleSubMenuAct($(this).parent())" class="icon dropdown after"><?php echo Yii::t("navigation", "account-3"); ?></a>
            <ul class="lev1 indent">
                <li><a href="javascript:void(0)" class="icon"><?php echo Yii::t("navigation", "account-3-1"); ?></a></li>
                <li><a href="javascript:void(0)" class="icon"><?php echo Yii::t("navigation", "account-3-2"); ?></a></li>
            </ul>
        </li>
    </ul>
</li>