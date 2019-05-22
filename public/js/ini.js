$(document).ready(function(){
 $('.fixed-action-btn').floatingActionButton();
 $('.materialboxed').materialbox();
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();
    $('select').formSelect();
    $('.telefone').mask('(00) 00000-0000');
    $('.cpf').mask('000.000.000-00');
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
});
