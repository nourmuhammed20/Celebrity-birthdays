var languageSelector = document.querySelector(".language-selector");
var languageList = document.querySelector(".language-list");
var html = document.getElementsByTagName("html")[0];

languageSelector.addEventListener("click", function () {
    languageList.classList.toggle("visible");
});

window.addEventListener("click", function (event) {
    if (!languageSelector.contains(event.target)) {
        languageList.classList.remove("visible");
    }
});

languageList.addEventListener("click", function (event) {
    var selectedLanguage = event.target.closest("li").getAttribute("data-lang");

    if (selectedLanguage === "ar") {
        html.setAttribute("dir", "rtl");
        html.setAttribute("lang", "ar");
    } else {
        html.setAttribute("dir", "ltr");
        html.setAttribute("lang", selectedLanguage);
    }
});
