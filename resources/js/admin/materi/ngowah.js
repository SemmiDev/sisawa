$("form").on("submit", function (event) {
    // event.preventDefault();

    const $form = $(event.target);
    const $inputs = $form.find("input,textarea,select");

    for (let i = 0; i < $inputs.length; i++) {
        const $input = $inputs.eq(i);
        // console.log($input.val());

        if ($input.val().trim()) continue;

        if ($input.attr("type") == "file") continue;

        Swal.fire({
            text: "Kabeh data kudu ana isine",
            icon: "warning",
            // showCancelButton: true,
            confirmButtonText: "Nggih",
            customClass: {
                popup: "rounded-2xl",
                cancelButton: "btn btn-error",
                confirmButton: "btn btn-success",
            },
        });

        return false;
    }

    return true;
});
