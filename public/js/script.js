$('button.delete').click(function () { 
    const attr = $(this).attr('data-href');
    $('.modal-footer a').attr('href', attr);
});