$(".btn-hapus").on("click", function (event) {
    event.preventDefault();
    Swal.fire({
        // title: "Konfirmasi",
        text: "Apa sampeyan yakin arep ngilangi data materi iki?",
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
            window.location.href = event.target.href;
        }
    });
});
