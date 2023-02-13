<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to use JavaScript appendChild()</title>
</head>
<body>
<p id="temps"> </p>
<p id="tempsdeux"></p>

    <script>
    // L'interface Performance donne accès à des informations liées aux performances de la page
let t0 = performance.now();
var table = document.createElement("table");

//for each data row
var tr = document.createElement("tr");

//for each data row's column add below
var td = document.createElement("td");
for(n=0;  n<10000; n++){

td.innerText="1ere case de la 1er ligne";
tr.appendChild(td);

//end of the row
table.appendChild(tr);
document.body.appendChild(table);
console.log("ping pong " + ms + " millisecondes");

}
// code à mesurer
let t1 = performance.now();

let ms = (t1 - t0).toFixed(1);
document.getElementById('temps').textContent = "ping pong " + ms + " millisecondes";

t0 = performance.now();
let s = '';
for(n=0;  n<10000; n++){

  s += '<table>'+
          '<tr><td>1re case de la 1er ligne </td></tr>'+
          '</table';
}
document.body.innerHTML= s ;


t1 = performance.now();

ms = (t1 - t0).toFixed(1);
console.log("ping pong deux" + ms + " millisecondes");



    </script>
</body>
</html>