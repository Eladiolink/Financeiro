organizeData()
chartJS()

function organizeData() {
    let datas = $("tbody > tr > .data");

    for (i = 0; i < datas.length; i++) {
    
       let texto = datas[i].innerHTML
       let textoArray = texto.split("-")
       datas[i].innerText=textoArray[2] + "/" + textoArray[1] + "/" + textoArray[0]

    }

}

function getTransferencias() {
    let id = $("#id").val();
    let dataStart = $("#data-one").val();
    let dataEnd = $("#date-two").val();

    $.ajax({
        url: "/Transferencia/getTransferencias",
        type: "POST",
        data: `id=${id}&dataStart=${dataStart}&dataEnd=${dataEnd}`,
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
    let valoresHTML=$("tbody > tr > .values")
    let datasHTML=$("tbody > tr > .data")
    let values=toArray(valoresHTML,"values")
    let datas=toArray(datasHTML,"data")
    if(window.bar != undefined){
        window.bar.destroy()
    }
    window.bar = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: datas,
            datasets: [{
                label: 'Valor',
                data:values,
                backgroundColor: [
                    'rgba(75, 247, 75, 0.2)',
                ],
                borderColor: [
                    'rgba(75, 247, 75, 1)',
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

function toArray(elements,type){
      let elementsArray=[] 
      if(type=="values"){

      for(let i=0;i<elements.length;i++){ 
        elementsArray.push(parseFloat(elements[i].innerText.replace("R$ ","")))
      } 
    }else{
        for(let i=0;i<elements.length;i++){ 
            elementsArray.push(elements[i].innerText)
          } 
    } 
      return elementsArray;
} 

function inserDadosTable(values) {
    let tbody= $("tbody");
    tbody.html("")
    for (let i = 0; i < values.length; i++) {
        tbody.append(`<tr>
                     <th scope="row">${i + 1}</th>
                     <td> ${values[i].nome} </td>
                     <td class="values">R$ ${values[i].valor},00</td>
                     <td class="data">${values[i].data}</td>
                    </tr>`);

    }
    
    organizeData()
    chartJS()
}

