let dataStart = document.getElementById("data-one");
let dataEnd = document.getElementById("date-two");
let data = document.getElementById("data");

data.addEventListener("click", () => {

    $.ajax({
        url: "/Transferencia/getTransferencias",
        type: "POST",
        data: `id=2&dataStart=${dataStart.value}&dataEnd=${dataEnd.value}`,
        dataType: "html"

    }).done(function (resposta) {
        console.log((JSON.parse(resposta)));
    })

})