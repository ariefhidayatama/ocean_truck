const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        'title': 'Success',
        'text': flashData,
        'type': 'success'
    })
}

// Tombol Hapus
$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "ingin menghapus data ini!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })


});