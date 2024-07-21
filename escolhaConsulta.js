document.addEventListener("DOMContentLoaded", () => {

    const consultas = [
        {date:"29-09-2004", detalhes:""}
        //ler dados do banco aqui
    ];

    const tableBody = document.querySelector("#patientsTable tbody");

    consultas.forEach(consulta => {
        const row = document.createElement("tr");

        const dateCell = document.createElement("td");
        dateCell.textContent = consulta.date;
        row.appendChild(dateCell);
        const detailCell = document.createElement("td");
        detailCell.textContent = consulta.detalhes;
        row.appendChild(detailCell)

        tableBody.appendChild(row);
    });
});
