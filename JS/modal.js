$('.backdrop').click(() => {
    $('.modalContainer').removeClass('show')
})

function showModal(id, name, value) {
    $('#nameProduct').html(name)
    $('#idProduct').val(id)
    $('#valueProduct').val(value)
    $('.modalContainer').addClass('show')
}