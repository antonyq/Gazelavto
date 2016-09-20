window.onload = function () {
    if (window.location.search.match(/repair_cars/)){
        $("body").addClass("repair-special repair-cars-special");
    } else if (window.location.search.match(/lorries/)){
        $("body").addClass("repair-special repair-lorries-special");
    }
}