var sessiondata = JSON.parse(localStorage.getItem('sessiondata')) || [];

var userel = document.getElementById('sessiontable');
var temp = "<table> <tr><th>Name</th><th>Login Time</th><th>Logout Time</th></tr>"; 
//var temp ="";
for(var i = 0; i < sessiondata.length ; i++){
    temp += "<tr>";
    for(key in sessiondata[i]){
        temp += "<td>"+sessiondata[i][key]+"</td>";
        //userel.innerHTML += temp;
    }
    temp += "</tr>";
}
temp += "</table>";
userel.innerHTML = temp;