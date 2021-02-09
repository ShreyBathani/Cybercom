<!DOCTYPE html>
<html>
    <head>
        <title>Ajax post data</title>
    </head>
    <body>
        Type a Name:<br><br>
        <input type="text" id="name"><br><br>
        <input type="button" value="submit" onclick="insert()">
        <br><br>
        <div id="message"></div>
    
        <script>
            function insert(){
                var name = document.getElementById('name').value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("message").innerHTML = this.responseText;
                    }
                };
                xhttp.open("POST", "post.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('name='+name);
                document.getElementById('name').value = '';
            }
        </script>
    </body>
</html>