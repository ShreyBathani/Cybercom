var arr = JSON.parse(localStorage.getItem('formdata'));
console.log(arr);

document.write("<table border='1'>");
document.write("<tr><th>Name</th><th>Email</th><th>Date of Birth</th></tr>");
 
for(var i =0; i < arr.length ; i++){
    document.write("<tr>");
    for(key in arr[0]){
        document.write("<td>"+arr[i][key]+"</td>");
    }
    document.write("</tr>");
}
document.write("</table>");
