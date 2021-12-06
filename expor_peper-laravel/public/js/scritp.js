$('.page-scroll').on('click', function(e){
    

    // // ambil isi href
    var tujuan = $(this).attr('href');

    // tangkap elemen ybs
    var elemenTujuan = $(tujuan);

    

    $('body').animate({
    ScrollTop: elemenTujuan.offset().top -50
    });

    e.preventDefault();  
});