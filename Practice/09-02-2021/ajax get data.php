<!DOCTYPE html>
<html>
    <head>
        <title>Ajax get data</title>
    </head>
    <body>
        <input type="submit" onclick="load()">
        <div id="data"></div>
    
    <script>
        function load(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("data").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get.php", true);
            xhttp.send();
        }
    </script>
    </body>
</html>
