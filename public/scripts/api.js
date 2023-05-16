document.querySelector("#search-btn").addEventListener("click", function (e) {
    e.preventDefault();
    // Show the loading message
    let names = $("#names");
    names.html(
        "<h6 class='text-center' style='color:#5e2ced;'>Please Wait until Loading data from API...</h6>"
    );

    // Hide the results and show the loading message for 10 seconds
    let timeout = setTimeout(function () {
        names.hide();
        names.html("");
        names.fadeIn();
    }, 10000);

    // Send an AJAX request to the API_Ops.php file with the birthday parameter
    $.ajax({
        url: "api",
        data: {
            birthday: $("#bd_id").val(),
        },
        success: function (response) {
            // Clear the timeout to cancel the hiding of the results and showing of the loading message
            clearTimeout(timeout);
            // Show the results
            response = JSON.parse(response["message"]);
            if (response.length > 0) {
                names.addClass("overflow-x-scroll");
                names.empty();
                response.forEach((element) => {
                    names.append(
                        `<div class='col-lg-3 mb-3 text-center mx-3'><h6 class='text-light  py-2 rounded-5' style="background-color: blueviolet;">${element}</h6></div>`
                    );
                });
            } else {
                names.html(
                    "<h4  style='color:#5e2ced;>No Famous Actor Born at given Date</h4>"
                );
            }

            // Hide the loading message and show the results
            names.hide();
            names.fadeIn();
        },
        error: function (x, y, z) {
            // Clear the timeout to cancel the hiding of the results and showing of the loading message
            clearTimeout(timeout);

            // Show an error message
            names.html(
                "<h4  style='color:#ff0000;>An error occurred while loading data from API</h4>"
            );

            // Hide the loading message and show the error message
            names.hide();
            names.fadeIn();
        },
    });
});
