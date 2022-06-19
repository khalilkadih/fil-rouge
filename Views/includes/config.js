document.querySelectorAll('a.confirm').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        msgFromLink = e.target.dataset.message;
        swal({
                title: "",
                text: msgFromLink != null ? msgFromLink : "Are you sure ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((result) => {
                if (result) {
                    window.location.href = e.target.href;
                } else {
                    console.log("cancelled");
                }
            });

    });
});

document.querySelectorAll('form.confirm').forEach(function(btn) {
    btn.addEventListener('submit', function(e) {
        e.preventDefault();
        msgFromLink = e.target.dataset.message;
        swal({
                title: "",
                text: msgFromLink != null ? msgFromLink : "Are you sure ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((result) => {
                if (result) {
                    e.target.submit();
                } else {
                    console.log("cancelled");
                }
            });

    });
});