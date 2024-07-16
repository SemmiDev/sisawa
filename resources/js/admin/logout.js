$(".btn-logout").on("click", function (event) {
    event.preventDefault();
    Swal.fire({
        text: "Apa sampeyan yakin arep metu saka Si-Sawa kanggo 'Guru'?",
        icon: "question",
        showCancelButton: true,
        cancelButtonText: "Mboten",
        confirmButtonText: "Nggih",
        customClass: {
            popup: "rounded-2xl",
            cancelButton: "btn btn-error",
            confirmButton: "btn btn-success",
        },
    }).then((result) => {
        if (result.isConfirmed) {
            $("#logout-form").submit();
        }
    });
});