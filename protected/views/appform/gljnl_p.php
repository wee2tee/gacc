<script>
    //$(function(){ $('#just-click').on('click',function(){ alert('This is a great job.'); }); });
    function greatJob<?php echo $appform_id ?>(){
        alert("This is a great job.");
    }
</script>

<div class="appform-root" id="<?php echo $appform_id ?>"> This is an Application Form GL(Posted)<input type='button' value='just click' onclick="return greatJob<?php echo $appform_id ?>()" /></div>