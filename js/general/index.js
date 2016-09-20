window.onload = function () {
    initEventListeners();
};

function initEventListeners(){
    $(".drop-down-button").click(function () {
        if ($(".add-text").css("display") == 'none'){
            $(".add-text").fadeIn(200);
            $("#expand").hide();
            $("#cut-down").show();
        } else if ($(".add-text").css("display") != 'none'){
            $(".add-text").fadeOut(200);
            $("#cut-down").hide();
            setTimeout(function () {$("#expand").show();}, 200);
        }   
    })
}