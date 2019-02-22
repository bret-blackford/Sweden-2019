$(document).ready(function () {
    var myBodyId = $('body').attr('id');
    var myNavId = '#nav-' + myBodyId;
    $(myNavId).attr('id', 'iamhere');
});

