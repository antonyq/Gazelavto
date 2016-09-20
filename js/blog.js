window.onload = function () {
    var titles = document.getElementsByClassName("article-title");
    for (title of titles) {
        if (title.children[0].innerHTML.length > 20){
            var string = title.children[0].innerHTML;
            var kyiv = string.slice(string.length - 26, string.length);
            title.children[0].innerHTML = string.split(kyiv)[0];
        }
    }
}