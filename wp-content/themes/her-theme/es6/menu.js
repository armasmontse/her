const $ = jQuery
const $popup = $('#popup_JS')

$( document ).ready(function() {
    $('.about__main--js').show()
    $popup.show();
})

// M E N U
var btnCerrar = $(".navbar-collapse__JS");
var btnCerrarOpen = $(".navbar-collapse.open");
var btnCerrarClose = $(".navbar-collapse.close");

var menu = $("#navbar__JS");
var open = false;

btnCerrar.click(function() {

  // Si está abierto hay que cerrarlo.
    if(open) {
        menu.removeClass('responsive');
        btnCerrarOpen.removeClass('hide');
        btnCerrarClose.removeClass('view');
        open = false;
    }else {
        menu.addClass('responsive');
        btnCerrarOpen.addClass('hide');
        btnCerrarClose.addClass('view');
        open = true;
    }
});

//P O P U P

const $close = $('#close_JS')

$close.on('click',function(){
    closePopup();
})

$('#popup_JS').on('click',function(e){
    if(e.target !== this)
        return

    closePopup();
});

function closePopup() {
    $popup.hide();
}



// T O O G L E S
const $arrow = $(".arrow_JS");
const $toggleElement = $(".toggle_JS");

$arrow.on("click",function(){
    const $this = $(this)
    $this.toggleClass( 'about__arrow-transform' );
    $this.next().toggle()
})
