function xconfirm(message, str){
    return conf_result = confirm(message.replace("%1%", str['%1%']).replace("%2%", str['%2%']).replace("%3%", str['%3%']).replace("%4%", str['%4%']));
}

function xalert(message, str){
    alert(message.replace("%1%", str['%1%']).replace("%2%", str['%2%']).replace("%3%", str['%3%']).replace("%4%", str['%4%']));
}

function toggleFullScreen() {
    if (!document.fullscreenElement &&    // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }
    }
}

function toggleMenuAct(elem){
    var cur_state = $(elem).hasClass("active") ? "active" : "inactive";
    $("#main-menu-container li").removeClass("active");
    if(cur_state === "active"){
        $(elem).removeClass("active");
    }
    else{
        $(elem).addClass("active");
    }
}

function toggleSubMenuAct(elem){
    var cur_state = $(elem).hasClass("active") ? "active" : "inactive";
    //var menu_lev = $(elem).parent("ul").attr("class");
    var elems = $(elem).parent("ul").find("ul").toArray();
    for (var i = 0 ; i < elems.length ; i++){
        $(elems[i]).parent("li").removeClass("active");
    }

    if(cur_state === "active"){
        $(elem).removeClass("active");
    }
    else{
        $(elem).addClass("active");
    }
}

function toggleMenuStyle(){
    if($("#menu-toggle-btn").is(":visible")){
        $("#main-menu-container").addClass("filledwidth");
    }
    else{
        $("#main-menu-container").removeClass("filledwidth");
    }
}

// collapse all menu when open appform
function collapseMainMenu(){
    var act_menu = $("#main-menu-container").find(".active").toArray();
    for( var i=0 ; i<act_menu.length ; i++){
        $(act_menu[i]).removeClass("active");
    }
    $("#navbar-container").removeClass("in");
}

function callAppForm(doctyp, doccod, prefix){
    $.ajax({
        url: 'index.php?r=AppForm/'+doctyp,
        type: 'post',
        data: { doccod:doccod, prefix:prefix },
        dataType: 'json',
        beforeSend: collapseMainMenu(),
        success: function(returned){
            if(returned.result === true){
                showAppForm({'appform' : returned.appform, 'appform_title' : returned.appform_title, 'appform_id' : returned.appform_id});
                updateAppLayer("open", returned.appform_title, returned.appform_id);
                attachAppLayerPanel("open", returned.appform_title, returned.appform_id);
            }
            else{
                alert(returned.msg);
            }
        }
    });
}

function showAppForm(appform_data){
    $("#work-space").append(appform_data.appform);
}

function updateAppLayer(action, app_title, appform_id){
    // action open/close
    if(action === "open"){
        $("#appform-count").html( parseInt($("#appform-count").html())+1 ); // increase amount of appform count
        $("#navbar-layer-toggle").removeClass("disabled");
    }
    else{
        var app_cnt = parseInt($("#appform-count").html())-1;
        $("#appform-count").html( app_cnt ); // decrease amount of appform count
        if( app_cnt === 0 ){
            $("#navbar-layer-toggle").addClass("disabled");
            $("#app-layer-panel").removeClass("show");
        }
    }
}

function attachAppLayerPanel(action, appform_title, appform_id){
    // action open/close
    if(action === "open"){
        var new_app = '<div class="app" id="close-'+appform_id+'" onclick="return CloseApp.confirm(\''+appform_title+'\',\''+appform_id+'\')">'+appform_title+'</div>';
        $("#app-layer-panel").append(new_app);
    }
    else{
        $("#close-"+appform_id).remove();
    }
}

function showAppLayerSelector(context){
    if(!$(context).hasClass('disabled')){
        $("#app-layer-panel").toggleClass("show");
    }
}

function confirmCloseApp(){
    this.confirm = function(apptitle, appform_id){
        var winH = $(window).innerHeight();
        var winW = $(window).innerWidth();
        var message = msg['confirm-close'].replace('%1%',apptitle);
        $("#dialog-message").html(message + '<button class="btn btn-primary" onclick="CloseApp.yes(\''+appform_id+'\')">ตกลง</button><button class="btn btn-danger" onclick="CloseApp.no()">ยกเลิก</button>');
        $("#dialog-overlay, #dialog-message").show();
    }
    this.no = function(){
        $("#dialog-message, #dialog-overlay").hide();
    }
    this.yes = function(appform_id){
        $("#"+appform_id).remove();
        $("#close-"+appform_id).remove();
        updateAppLayer("close", "", appform_id);
        attachAppLayerPanel("close", "", appform_id);
        $("#dialog-message, #dialog-overlay").hide();
    }
}
var CloseApp = new confirmCloseApp();

$(function(){
    toggleMenuStyle();

    $(window).resize(function(){ 
        toggleMenuStyle();
    });
});
