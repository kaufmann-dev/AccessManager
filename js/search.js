$(document).ready(function() {
    $("#searchInput").on("change paste keyup", function() {
        $(".col").each(function () {
            if($(this).text().toLowerCase().indexOf($("#searchInput").val().toLowerCase()) >= 0){
                $(this).css("display", "block");
                $(this).css("margin", "initial");
            } else {
                $(this).css("display", "none");
                $(this).css("margin", "0px");
            }
        });
    });
});