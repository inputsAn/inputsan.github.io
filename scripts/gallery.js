let numImg = 1;
const cntImage = 36;
const pathImg = "/images/gallery/";

function imgChange() {
    $("#mainimg").fadeOut("slow", function () {
        $("#mainimg").attr('src', pathImg + "gal" + numImg + ".jpg");
        $("#mainimg").animate({
            height:'toggle',
        }, 1000);
        $("#mainimg").fadeIn("slow");
    });


}

function leftClick() {
    if(numImg > 1) {
        numImg--;}
    else {
        numImg = cntImage;
        }
    imgChange();
}

function rightClick() {
    if(numImg < cntImage) {
        numImg++;}
    else {
        numImg = 1;
    }
    imgChange();
}

function Show(x){
    numImg=x;
    imgChange();
    $('.window').addClass('window_active');
    $('body').addClass('hidden');
    $('.icon_close').click(function () {
        $('.window').removeClass('window_active');
        $('body').removeClass('hidden');
    });

}

