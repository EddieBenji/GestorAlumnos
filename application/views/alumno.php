<?php
include_once('menu.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Alumnos</title>
    <script src="../../assets/js/zxml.js"></script>
    <script type="application/javascript">
        function mostrarAltas() {
            var oXmlHttp = zXmlHttp.createRequest();
            oXmlHttp.open("get", "form_alta_alumno.php", true);
            oXmlHttp.onreadystatechange = function () {
                if (oXmlHttp.readyState == 4) {
                    if (oXmlHttp.status == 200) {
                        mostrarCRUD(oXmlHttp.responseText);
                        //displayCustomerInfo(oXmlHttp.responseText);
                    } else {
                        mostrarCRUD(oXmlHttp.statusText);
                        //displayCustomerInfo("Ocurrió un error:\n" + oXmlHttp.statusText);
                    }
                }
            };
            oXmlHttp.send();
            var divResultado = document.getElementById("resultado");
            divResultado.innerHTML = "";
        }

        function mostrarModificaciones() {
            var oXmlHttp = zXmlHttp.createRequest();
            oXmlHttp.open("get", "form_modificacion_alumno.php", true);
            oXmlHttp.onreadystatechange = function () {
                if (oXmlHttp.readyState == 4) {
                    if (oXmlHttp.status == 200) {
                        mostrarCRUD(oXmlHttp.responseText);
                        //displayCustomerInfo(oXmlHttp.responseText);
                    } else {
                        mostrarCRUD(oXmlHttp.statusText);
                        //displayCustomerInfo("Ocurrió un error:\n" + oXmlHttp.statusText);
                    }
                }
            };
            oXmlHttp.send();
            var divResultado = document.getElementById("resultado");
            divResultado.innerHTML = "";
        }

        function mostrarConsultas() {
            var oXmlHttp = zXmlHttp.createRequest();
            oXmlHttp.open("get", "form_busqueda_alumno.php", true);
            oXmlHttp.onreadystatechange = function () {
                if (oXmlHttp.readyState == 4) {
                    if (oXmlHttp.status == 200) {
                        mostrarCRUD(oXmlHttp.responseText);
                        //displayCustomerInfo(oXmlHttp.responseText);
                    } else {
                        mostrarCRUD(oXmlHttp.statusText);
                        //displayCustomerInfo("Ocurrió un error:\n" + oXmlHttp.statusText);
                    }
                }
            };
            oXmlHttp.send();
            var divResultado = document.getElementById("resultado");
            divResultado.innerHTML = "";
        }

        function mostrarBajas() {
            var oXmlHttp = zXmlHttp.createRequest();
            oXmlHttp.open("get", "form_baja_alumno.php", true);
            oXmlHttp.onreadystatechange = function () {
                if (oXmlHttp.readyState == 4) {
                    if (oXmlHttp.status == 200) {
                        mostrarCRUD(oXmlHttp.responseText);
                        //displayCustomerInfo(oXmlHttp.responseText);
                    } else {
                        mostrarCRUD(oXmlHttp.statusText);
                        //displayCustomerInfo("Ocurrió un error:\n" + oXmlHttp.statusText);
                    }
                }
            };
            oXmlHttp.send();
            var divResultado = document.getElementById("resultado");
            divResultado.innerHTML = "";
        }

        function mostrarCRUD(contenido) {
            var crudSection = document.getElementById("crud-content");
            crudSection.innerHTML = contenido;
        }

        function sendRequest() {
            var oForm = document.forms[0];
            var sBody = getRequestBody(oForm);
            var oXmlHttp = zXmlHttp.createRequest();
            oXmlHttp.open("post", oForm.action, true);
            oXmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            oXmlHttp.onreadystatechange = function () {
                if (oXmlHttp.readyState == 4) {
                    if (oXmlHttp.status == 200) {
                        var response = oXmlHttp.responseText;
                        displayResult(response);
                    } else {
                        displayResult("Ocurrió un error:\n" + oXmlHttp.statusText);
                    }
                }
            };
            oXmlHttp.send(sBody);
        }

        function getRequestBody(oForm) {
            var aParams = [];

            for (var i = 0; i < oForm.elements.length; i++) {
                var sParam = encodeURIComponent(oForm.elements[i].name);
                sParam += "=";
                sParam += encodeURIComponent(oForm.elements[i].value);
                aParams.push(sParam);
            }

            return aParams.join("&");
        }

        function displayResult(sMensaje) {
            var divResultado = document.getElementById("resultado");
            divResultado.innerHTML = sMensaje;
        }
    </script>
</head>
<body id="alumno">
<section id="menu-actions">
    <ul>
        <li>
            <a href="" onclick="mostrarAltas(); return false;">Altas</a>
        </li><li class="active">
            <a href="" onclick="mostrarConsultas(); return false;">Consultas</a>
        </li><li>
            <a href="" onclick="mostrarModificaciones(); return false;">Modificaciones</a>
        </li><li>
            <a href="" onclick="mostrarBajas(); return false;">Bajas</a>
        </li>
    </ul>
    <hr>
</section>
<section id="crud-content">
    <h5>Seleccione una opción del menu</h5>
</section>
<div id="resultado"></div>
<?php
include_once('footer.php');
?>
