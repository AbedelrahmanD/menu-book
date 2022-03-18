$(document).ready(function () {
    var lastScrollTop = 0;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
            // downscroll code
            if (st >= 100) {
                $(".navBar").addClass("scrollingNavBar");
                // if ($(window).width() <= 600) {
                $(".logo span").hide(400);
                //}
            }
        } else {
            // upscroll code
            if (st == 0) {
                $(".logo span").show(400);
                $(".navBar").removeClass("scrollingNavBar");
            }
        }
        lastScrollTop = st;
    });

    $("#jsSearchMeal").click(function (e) {
        e.preventDefault();
        var searchedValue = $("#jsSerachMeal").val().trim();
        if (searchedValue != "")
            window.location.href = `/search-meal/${searchedValue}`;
    });

    $("#jsCloseForm").click(function (e) {
        e.preventDefault();
        $("#jsSearchForm").fadeOut();
    });
    $("#jsNavBarAction").click(function (e) {
        e.preventDefault();
        $("#jsSearchForm").fadeIn();
        $("#jsSerachMeal").focus();
    });
});
