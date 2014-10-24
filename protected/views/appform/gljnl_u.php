<script>
$(function(){
    $("#<?php echo $appform_id ?>-add").on("click", function(){
        alert("Add new data");
    });
});
</script>
<iframe class="blank" id="blank-<?php echo $appform_id ?>" name="blank-<?php echo $appform_id ?>" />
<div class="appform-root" id="<?php echo $appform_id ?>">
    <div class="toolbar-container" id="toolbar-container">
        <?php
        echo Toolbar::button(Toolbar::BTN_ADD, $appform_id);
        echo Toolbar::button(Toolbar::BTN_EDIT, $appform_id);
        echo Toolbar::button(Toolbar::BTN_VOID, $appform_id);
        echo Toolbar::button(Toolbar::BTN_DELETE, $appform_id);
        echo Toolbar::divider();
        echo Toolbar::button(Toolbar::BTN_CANCEL, $appform_id);
        echo Toolbar::button(Toolbar::BTN_SAVE, $appform_id);
        echo Toolbar::divider();
        echo Toolbar::button(Toolbar::BTN_FIRST, $appform_id);
        echo Toolbar::button(Toolbar::BTN_PREV, $appform_id);
        echo Toolbar::button(Toolbar::BTN_NEXT, $appform_id);
        echo Toolbar::button(Toolbar::BTN_LAST, $appform_id);
        echo Toolbar::divider();
        echo Toolbar::button(Toolbar::BTN_SEARCH, $appform_id);
        echo Toolbar::button(Toolbar::BTN_ITEM, $appform_id);
        echo Toolbar::button(Toolbar::BTN_NOTE, $appform_id);
        echo Toolbar::button(Toolbar::BTN_PRINT, $appform_id);
        echo Toolbar::button(Toolbar::BTN_SO, $appform_id);
        ?>
        <div class="cleared"></div>
    </div>
    <div class="appform-content">
        <div class="appform-head">
            <button class="btn btn-primary" onclick="CloseApp.confirm('<?php echo $appform_title ?>','<?php echo $appform_id ?>')"><i class="glyphicon glyphicon-remove"></i></button>
            <div class="appform-panel-left" >
                <table class="table table-striped">
                    <tr>
                        <td>วันที่</td>
                        <td><input type="text" class="form-control" />
                    </tr>
                    <tr>
                        <td>เลขที่</td>
                        <td><input type="text" class="form-control" />
                    </tr>
                </table>
            </div>
            <div class="appform-panel-left" >
                <table class="table table-striped">
                    <tr>
                        <td>วันที่</td>
                        <td><input type="text" class="form-control" />
                    </tr>
                    <tr>
                        <td>เลขที่</td>
                        <td><input type="text" class="form-control" />
                    </tr>
                </table>
            </div>
        </div>
        <div class="cleared"></div>
        This is an Application Form GL(Unpost)<input type='button' value='just click' id="<?php echo $appform_id ?>-test-btn" />
    </div>
</div>