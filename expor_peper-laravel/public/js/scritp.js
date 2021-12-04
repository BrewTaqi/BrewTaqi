('.page-scroll').on('click', function(e){
    
    // ambil isi href
    var tujuan =$(this).attr('href');

    // tangkap elemen ybs
    var elemenTujuan = $(tujuan);

    $('body').animate({
        scrollTop: elemenTujuan.offset().top -50
    }, 1000);

    e.preventDefault();  
});