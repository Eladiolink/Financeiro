organizeData()
chartJS()
function organizeData() {
    let dados = document.getElementById("dados").children;
    for (i = 0; i < dados.length; i++) {

        let texto = dados[i].children[3].innerHTML
        let textoArray = texto.split("-")
        dados[i].children[3].innerHTML = textoArray[2] + "/" + textoArray[1] + "/" + textoArray[0]

    }

}

function getTransferencias() {
    let id = document.getElementById("id").value;
    let dataStart = document.getElementById("data-one");
    let dataEnd = document.getElementById("date-two");

    $.ajax({
        url: "/Transferencia/getTransferencias",
        type: "POST",
        data: `id=${id}&dataStart=${dataStart.value}&dataEnd=${dataEnd.value}`,
        dataType: "html"

    }).done(function (resposta) {
        let values = JSON.parse(resposta);
        if (values.length != 0) {
            inserDadosTable(values)
        }
    })
}

function chartJS() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

function inserDadosTable(values) {
    let dados = document.getElementById("dados");
    dados.innerHTML = ""

    for (let i = 0; i < values.length; i++) {

        dados.innerHTML += `<tr>
                              <th scope="row">${i + 1}</th>
                              <td> ${values[i].nome} </td>
                              <td>R$ ${values[i].valor},00</td>
                              <td>${values[i].data}</td>
                            </tr>`

    }
    organizeData()
}

