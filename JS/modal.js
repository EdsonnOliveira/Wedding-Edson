$('.backdrop').click(() => {
    $('section#pix').css('display','none')
    $('section#form').css('display','flex')
    $('section#inPerson').css('display','none')
    $('.modalContainer').removeClass('show')
})

function showModal(id, name, value) {
    $('#nameProduct').html(name)
    $('#idProduct').val(id)
    $('#valueProduct').val(value)
    $('.modalContainer').addClass('show')
}

$('#btInPerson').click(() => {
    $('section#pix').css('display','none')
    $('section#form').css('display','none')
    $('section#inPerson').css('display','flex')
})

$('#btPix').click(() => {
    $('section#pix').css('display','flex')
    $('section#form').css('display','none')
    $('section#inPerson').css('display','none')
})

$('.btBack').click(() => {
    $('section#pix').css('display','none')
    $('section#form').css('display','flex')
    $('section#inPerson').css('display','none')
})