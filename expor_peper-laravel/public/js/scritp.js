$('.page-scroll').on('click', function(event){
    
    // // ambil isi href
    var tujuan = $(this).attr("href");

    // tangkap elemen ybs
    var elemenTujuan = $(tujuan);
    
    // console.log(elemenTujuan.offset().top);
    console.log($('body').scrollTop());
    // $("body").animate({
    // scrollTop: elemenTujuan.offset().top -70
    // },1000, "swing");

    event.preventDefault();  
});