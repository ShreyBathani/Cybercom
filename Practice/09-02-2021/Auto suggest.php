<!DOCTYPE html>
<html>
    <head>
        <title>Auto Suggest</title>
    </head>
    <body>
        <form id="search" name="search" autocomplete="off">
            Type a Name:<br><br>
            <input type="text" name="name" onkeyup="findmatch(this.value)">
        </form><br>
        <b>Suggestion:</b><br>
        <div id="match"></div>
    
        <script>
            function findmatch(str){
                if(str.length == 0 || str.trim() == ''){
                    document.getElementById("match").innerHTML = '';
                }
                else{
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            document.getElementById("match").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("GET", "suggestion.php?str=" + str, true);
                    xhttp.send();
                }
            }
        </script>
    </body>
</html>