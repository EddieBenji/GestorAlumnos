<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="../../assets/css/site.css">
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/zxml.js"></script>
    <script type="text/javascript">
        function sendRequest() {
            var oForm = document.forms[0];
            var sBody = getRequestBody(oForm);
            var oXmlHttp = XMLHttpRequest.createRequest();
            oXmlHttp.open("post", oForm.action, true);
            oXmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            oXmlHttp.onreadystatechange = function () {
                if (oXmlHttp.readyState == 4) {
                    if (oXmlHttp.status == 200) {
                        var response = oXmlHttp.responseText;
                        if (!response.contains('Error')) {
                            window.location.href = response;
                        } else {
                            displayResult(response);
                        }
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
            var divError = document.getElementById("error");
            divError.innerHTML = sMensaje;
        }
    </script>
</head>
<body>
<div id="login">
    <header>
        <h3>Entrada a la aplicación</h3>
    </header>
    <section>
        <form action="../controllers/proxy-usuario.php" method="post" id="login-form"
              onsubmit="sendRequest(); return false;">
            <input type="hidden" name="source" value="login">

            <div id="error">
            </div>
            <div>
                <label for="user">Nombre de usuario:</label>
                <input type="text" name="user" id="user" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <button type="submit">Ingresar</button>
            </div>
        </form>
    </section>
</div>
<?php
include_once('footer.php');
?>
