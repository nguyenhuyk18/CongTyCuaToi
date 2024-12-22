$('button.delete').click(function () {
    const duongTruyen = $(this).attr('truyenBien');
    $('.modal-footer a').attr('href', duongTruyen);
})