// GENERACIÓN DE TODO EL FLITRADO DE PERSONAS EN LAS PRIMERAS DOS CARDS

function dataSearchOne() {
    var escuelasList = document.getElementById("instituiones");
    var carrerasList = document.getElementById("carreras");
    var modalidadList = document.getElementById("modalidad");
    var idEscuela;
    var idCarrera;
    var chartBar;

    modalidadData.forEach((e) => {
        modalidadList.innerHTML +=
            '\
                <option value="' +
            e["id"] +
            '">' +
            e["nombre"] +
            "</option>";
    });

    schoolData.forEach((e) => {
        escuelasList.innerHTML +=
            '\
        <option value="' +
            e["id"] +
            '">' +
            e["nombre"] +
            "</option>";
    });

    escuelasList.addEventListener("change", (e) => {
        idEscuela = e.target.value;
        if (idEscuela != "") {
            genChart(idEscuela, null, 0, 0);
        } else {
            genChart(0, 0, 0, 0);
        }
        carrerasList.innerHTML = '<option value=""></option>';

        carreraData.forEach((e) => {
            if (e["instituciones_id"] == idEscuela) {
                carrerasList.innerHTML +=
                    '\
                <option value="' +
                    e["id"] +
                    '">' +
                    e["nombre"] +
                    "</option>";
            }
        });
    });

    carrerasList.addEventListener("change", (e) => {
        idCarrera = e.target.value;
        if (idCarrera != "") {
            genChart(idEscuela, idCarrera, 0, 0);
        } else {
            genChart(0, 0, 0, 0);
        }
    });

    function genChart(idE, idC, contH, contM) {
        if (chartBar) {
            chartBar.destroy();
        }

        if (idC == null) {
            userData.forEach((e) => {
                if (e["idEscuela"] == idE) {
                    if (e["genero"] == "Hombre") {
                        contH += 1;
                    } else if (e["genero"] == "Mujer") {
                        contM += 1;
                    }
                }
            });
        } else if (idE != null && idC != null) {
            userData.forEach((e) => {
                if (e["idCarrera"] == idC && e["idEscuela"] == idE) {
                    if (e["genero"] == "Hombre") {
                        contH += 1;
                    } else if (e["genero"] == "Mujer") {
                        contM += 1;
                    }
                }
            });
        }

        const configPie = {
            type: "bar",
            data: {
                labels: ["Mujeres", "Hombres"],
                datasets: [
                    {
                        label: ["# de Mujeres"],
                        data: [contM, contH],
                        backgroundColor: [
                            "rgb(255, 202, 212)",
                            "rgb(176, 208, 211)",
                        ],
                        hoverOffset: 2,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                            },
                        },
                    ],
                },
            },
        };

        chartBar = new Chart(document.getElementById("chartPie"), configPie);
    }
    genChart(0, 0, 0, 0);
}

// GENERACIÓN DEL FLITRADO DE INFROMAICÓN PARA LAS CARDS CENTRALES ESTADOS Y MUNCICIPIOS

function dataSearchTwo() {
    var estadoList = document.getElementById("estado");
    var municpioList = document.getElementById("municipio");
    var idEstado;
    var idMunicipio;
    var chartBarTwo;

    estadosData.forEach((e) => {
        estadoList.innerHTML +=
            '<option value="' + e["id"] + '">' + e["nombre"] + "</option>";
    });

    estadoList.addEventListener("change", (e) => {
        idEstado = e.target.value;

        if (idEstado != "") {
            genChart(idEstado, null, 0, 0);
        } else {
            genChart(0, 0, 0, 0);
        }

        municpioList.innerHTML = '<option value=""></option>';

        municipiosData.forEach((m) => {
            if (m["estados_id"] == idEstado) {
                municpioList.innerHTML +=
                    '<option value="' +
                    m["id"] +
                    '">' +
                    m["nombre"] +
                    "</option>";
            }
        });
    });

    municpioList.addEventListener("change", (m) => {
        idMunicipio = m.target.value;

        if (idMunicipio != "") {
            genChart(idEstado, idMunicipio, 0, 0);
        } else {
            genChart(0, 0, 0, 0);
        }
    });

    function genChart(idE, idM, contM, contH) {
        if (chartBarTwo) {
            chartBarTwo.destroy();
        }

        if (idM == null) {
            UsMunEstData.forEach((um) => {
                if (um["estID"] == idE) {
                    if (um["userGen"] == "Hombre") {
                        contH += 1;
                    } else if (um["userGen" == "Mujer"]) {
                        contM += 1;
                    }
                }
            });
        } else if (idE != null && idM != null) {
            UsMunEstData.forEach((um) => {
                if (um["estID"] == idE && um["munID"] == idM) {
                    if (um["userGen"] == "Hombre") {
                        contH += 1;
                    } else if (um["userGen" == "Mujer"]) {
                        contM += 1;
                    }
                }
            });
        }
        const configPie = {
            type: "bar",
            data: {
                labels: ["Mujeres", "Hombres"],
                datasets: [
                    {
                        label: ["# de Mujeres"],
                        data: [contM, contH],
                        backgroundColor: [
                            "rgb(255, 202, 212)",
                            "rgb(176, 208, 211)",
                        ],
                        hoverOffset: 2,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                            },
                        },
                    ],
                },
            },
        };

        chartBarTwo = new Chart(
            document.getElementById("chartBarTwo"),
            configPie
        );
    }
    genChart(0, 0, 0, 0);
}

// GENERACIÓN DEL FLITRADO DE MODALIDAD PARA LAS 2 ULTIMAS CARDS chartBarThree

function dataSearchThree() {
    var modalidadTwoList = document.getElementById("modalidadTwo");
    var chartBarThree;

    modalidadData.forEach((e) => {
        modalidadTwoList.innerHTML +=
            '\
                <option value="' +
            e["id"] +
            '">' +
            e["nombre"] +
            "</option>";
    });

    function genChart(contA, contR){
        if(chartBarThree){
            chartBarThree.destroy()
        }
        const configPie = {
            type: "bar",
            data: {
                labels: ["Aceptados", "Rechazados"],
                datasets: [
                    {
                        label: ["# de Aceptados"],
                        data: [contA, contR],
                        backgroundColor: [
                            "rgb(50, 205, 50)",
                            "rgb(255, 0, 0)",
                        ],
                        hoverOffset: 2,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                            },
                        },
                    ],
                },
            },
        };

        chartBarThree = new Chart(
            document.getElementById("chartBarThree"),
            configPie
        );
    }

    genChart(0,0)
}

dataSearchOne();
dataSearchTwo();
dataSearchThree();