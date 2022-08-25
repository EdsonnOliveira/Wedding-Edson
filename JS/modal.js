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

    $('#btInPerson').css('display','flex')
    $('#btPix').html('Valor no Pix')
    if (id == 0) {
        $('#btInPerson').css('display','none')
        $('#btPix').html('Presentear')
    }

    $('.modalContainer').addClass('show')
}

function verify() {
    if ($('#name').val().length <= 0) {
        alert('Por favor, preencha seu nome!');
        $('#name').focus()
        return false
    }

    if ($('#message').val().length <= 0) {
        alert('Por favor, preencha sua mensagem!');
        $('#message').focus()
        return false
    }
}

$('#btInPerson').click(() => {
    if (verify() == false)
        return
    $('section#pix').css('display','none')
    $('section#form').css('display','none')
    $('section#inPerson').css('display','flex')
})

$('#btPix').click(() => {
    if (verify() == false)
        return
    $('section#pix').css('display','flex')
    $('section#form').css('display','none')
    $('section#inPerson').css('display','none')

    $('#spanPricePix').css('display','initial')
    $('#spanPricePix > b').html('R$ '+$('#valueProduct').val())
    if ($('#idProduct').val() == 0) {
        $('#spanPricePix').css('display','none')
    }
})

$('.btBack').click(() => {
    $('section#pix').css('display','none')
    $('section#form').css('display','flex')
    $('section#inPerson').css('display','none')
})