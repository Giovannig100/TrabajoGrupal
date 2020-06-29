<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ajax</title>
    </head>
    <body>
        <h1>Cargar datos de tabla usuario</h1>
        <article id="Datos">
            
        </article>
        <button id="btn">Traer datos</button>
        <script>
            var btn=document.getElementById("btn");
            btn.addEventListener("click",Ejecutar);
            var request=new XMLHttpRequest();
            function Ejecutar(){
                alert();
            request.onreadystatechange=function Request(){
                if(request.readyState == 4 && request.status == 200){
                    document.getElementById("Datos").innerHTML=request.responseText;
                }
            }
        };
            request.open("GET","Conexion.php",true);
            request.send();
        </script>
    </body>
</html>
