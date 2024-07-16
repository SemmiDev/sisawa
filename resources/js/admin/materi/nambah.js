$("form").on("submit", function (event) {
    const $form = $(event.target);
    const $inputs = $form.find("input,textarea,select");

    for (let i = 0; i < $inputs.length; i++) {
        const $input = $inputs.eq(i);

        if ($input.val().trim()) continue;

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
