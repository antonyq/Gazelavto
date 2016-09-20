$(function () {
    initLangExtensions();
    $(".lang").click(langClickHandler);
    $(".prices").mouseenter(function () {
        $(".prices > li > a").addClass("a-wrapper-hover");
        setTimeout(function () {  $(".prices > li > a").removeClass("a-wrapper-hover");  }, 500);
        $(".prices > li").fadeIn(500);
        $(".prices > li").addClass("fadeFromTop");
    });
    $(".prices").mouseleave(function () {  $(".prices > li").fadeOut(300);  });
    $(".header-bottom > .prices").mouseenter(function () {  $(".header-bottom > .prices > a").addClass("color-white");  });
    $(".header-bottom > .prices").mouseleave(function () {  $(".header-bottom > .prices > a").removeClass("color-white");  });
    $(".services").mouseenter(function () {
        $(".services > li > a").addClass("a-wrapper-hover");
        setTimeout(function () {  $(".services > li > a").removeClass("a-wrapper-hover");  }, 500);
        $(".services > li").fadeIn(500);
        $(".services > li").addClass("fadeFromTop");
    });
    $(".services").mouseleave(function () {  $(".services > li").fadeOut(300);  });
    $(".header-bottom > .services").mouseenter(function () {  $(".header-bottom > .services > a").addClass("color-white");  });
    $(".header-bottom > .services").mouseleave(function () {  $(".header-bottom > .services > a").removeClass("color-white");  });
});

function hasPHPInsights (string) {
    if (string.indexOf("<?php") != -1 || string.indexOf("<?") != -1) return true;
}

function langClickHandler(){
    var winLoc = window.location;
    if (winLoc.href.match(/\?lang=(ru|ua)/)){
        if (winLoc.search.indexOf("ru") != -1) winLoc.assign(winLoc.href.replace(/\?lang=(ru|ua)/, "?lang=ua"));
        if (winLoc.search.indexOf("ua") != -1) winLoc.assign(winLoc.href.replace(/\?lang=(ru|ua)/, "?lang=ru"));
    } else if (winLoc.href.match(/\&lang=(ru|ua)/)){
        if (winLoc.search.indexOf("ru") != -1) winLoc.assign(winLoc.href.replace(/\&lang=(ru|ua)/, "&lang=ua"));
        if (winLoc.search.indexOf("ua") != -1) winLoc.assign(winLoc.href.replace(/\&lang=(ru|ua)/, "&lang=ru"));
    } else winLoc.assign(winLoc.href + "?lang=ua");
}

function initLangExtensions(){
    if (window.location.search.indexOf("lang") != -1){
        var langExtension = (window.location.search.indexOf("ua") != -1) ? "lang=ua" : "lang=ru";
        var links = document.links;
        for (var i=0; i < links.length; i++){
             if (!links[i].href.match(/#/)) {
                 if (links[i].href.match(/\?/)) links[i].href += "&" + langExtension;
                 else links[i].href += "?" + langExtension;
             }
        }
    }
}
