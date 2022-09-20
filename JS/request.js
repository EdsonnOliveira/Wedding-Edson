let order = 1;

$("#btAddInput").click(() => {
    if (order == 7)
        return
    order++

    let input = `<label>
                    <input
                        type='text'
                        name='name${order}'
                        id='name${order}'
                        placeholder='Nome da pessoa ${order}'
                        class='txt400'
                        onKeyPress='keyPress(${order})'
                        required
                    >
                </label>`

    $("#inputs").append(input)
})

function keyPress(input) {
    // alert(input)
}