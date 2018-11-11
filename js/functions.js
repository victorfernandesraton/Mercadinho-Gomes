// APARECER CAIXA DE CONTATOS
$(document).ready(function(){
    $('.toggle').click(function(){
        $('.sidebar-contact').toggleClass('active')
        $('.img-toggle').toggleClass('active')
    });
});

// ANIMAÇÃO DOS TEXTOS DA CAIXA DE CONTATOS
$(".input").focus(function(){
    $(this).parent().addClass("focus");
}).blur(function(){
    if($(this).val()===''){
        $(this).parent().removeClass("focus")
    }
});

// ANIMAÇÃO DOS TEXTOS DOS FORMULARIOS
$(".entrada").focus(function(){
    $(this).parent().addClass("foco");
}).blur(function(){
    if($(this).val()===''){
        $(this).parent().removeClass("foco")
    }
});








// image gallery
// init the state from the input
$(".image-checkbox").each(function () {
    if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
        $(this).addClass('image-checkbox-checked');
    }
    else {
        $(this).removeClass('image-checkbox-checked');
    }
});

// sync the state to the input
$(".image-checkbox").on("click", function (e) {
    $(this).toggleClass('image-checkbox-checked');
    var $checkbox = $(this).find('input[type="checkbox"]');
    $checkbox.prop("checked", !$checkbox.prop("checked"))

    e.preventDefault();
});