function addperson() {
    var table = document.getElementById("person");
    var length = table.rows.length;
    console.log(length)
    var row = table.insertRow(length++);
    row.innerHTML = "NEW CELL1";
}

var input = ['Name','Sex','Age','Address','Contact No.','Email']

document.getElementById("book").style.display = "none"

function create(train) {
    document.getElementById("book").style.display = "block"
    document.getElementById("create").style.display = "none"
    var x = document.getElementById("no-passenger").value
    document.getElementById("count").value=x;
    x++
    // var form = document.createElement("FORM")
    var div = document.getElementById("container")
    var table = document.createElement("TABLE")
    table.setAttribute("id","passenger")
    var row1 = table.insertRow(0);
    for (let i = 0; i < input.length; i++) {
        var col = document.createElement('th')
        col.innerHTML = input[i]
        row1.appendChild(col)
    }

    for (let index = 1; index < x; index++) {
        var row2 = table.insertRow(index);
        var cell1 = row2.insertCell(0);
        var nameinput = document.createElement("input")
        nameinput.type = "text"
        nameinput.name = index + "name"
        cell1.appendChild(nameinput)

        // var cell2 = row2.insertCell(1);
        // var catinput = document.createElement("select")
        // catinput.name = index + 'catagory';
        // var option = document.createElement("option");
        // option.text = "Fitst class (1A)";
        // option.value = "1A";
        // var option1 = document.createElement("option");
        // option1.text ="Second class (2A)";
        // option1.value = "2A";
        // var option2 = document.createElement("option");
        // option2.text ="Third Class AC(3A)";
        // option2.value = "3A";
        // var option3 = document.createElement("option");
        // option3.text ="First Class (Fc)";
        // option3.value = "Fc";
        // var option4 = document.createElement("option");
        // option4.text =" AC Chair Class (CC)";
        // option4.value = "CC";
        // var option5 = document.createElement("option");
        // option5.text ="Sleeper Class (SL)";
        // option5.value = "SL";
        // var option6 = document.createElement("option");
        // option6.text ="Second Class (2S)";
        // option6.value = "2S";

        // catinput.add(option);
        // catinput.add(option1);
        // catinput.add(option2);
        // catinput.add(option3);
        // catinput.add(option4);
        // catinput.add(option5);
        // catinput.add(option6);
        // cell2.appendChild(catinput)

        var cell3 = row2.insertCell(1);
        var geninput = document.createElement("select")
        var option = document.createElement("option");
        option.text = "Male";
        option.value = "male"
        geninput.add(option);
        var option = document.createElement("option");
        option.text = "Female";
        option.value = "female"
        geninput.add(option);
        geninput.name = index + "gender"
        cell3.appendChild(geninput)

        var cell4 = row2.insertCell(2);
        var ageinput = document.createElement("input")
        ageinput.type = "number";
        ageinput.name = index + "age"
        cell4.appendChild(ageinput)

        var cell5 = row2.insertCell(3);
        var addinput = document.createElement("input")
        addinput.type = "text";
        addinput.name = index + "address"
        cell5.appendChild(addinput)

        var cell6 = row2.insertCell(4);
        var contactinput = document.createElement("input")
        contactinput.type = "number";
        contactinput.name = index + "contact"
        cell6.appendChild(contactinput)

        var cell7 = row2.insertCell(5);
        var emailinput = document.createElement("input")
        emailinput.type = "email";
        emailinput.name = index + "email"
        cell7.appendChild(emailinput)
    }
    div.append(table)

    var td = table.querySelectorAll("td");
    for (var i = 0; i < td.length; i++) {
        td[i].querySelectorAll("input,select").setAttribute("class","form-control");
    }
}

