function add() {
  var rIndex,table=document.getElementById("students"),
    newRow = table.insertRow(table.length),
    cell1=newRow.insertCell(0),
    cell2=newRow.insertCell(1),
    cell3=newRow.insertCell(2),
    sname = document.getElementById("surname").value,
    name = document.getElementById("name").value,
    faculty=document.getElementById("faculty").value;

  cell1.innerHTML = name;
  cell2.innerHTML = sname;
  cell3.innerHTML = faculty;

}
const btn = document.querySelector('button');
btn.addEventListener('click',add)
