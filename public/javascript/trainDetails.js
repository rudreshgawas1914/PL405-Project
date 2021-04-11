let dropdown = document.getElementById('trainname-dropdown');
dropdown.length = 0;

let defaultOption = document.createElement('option');
defaultOption.text = 'Choose Train Name';

dropdown.add(defaultOption);
dropdown.selectedIndex = 0;

const globaldata = []
const stationdata = []

const url = 'https://raw.githubusercontent.com/datameet/railways/master/trains.json';
const request = new XMLHttpRequest();
request.open('GET', url, true);

request.onload = function() {
  if (request.status === 200) {
    const data = JSON.parse(request.responseText);
    let option;
    var names = [];
    console.log(data);
	globaldata.push(['trno','name','startno','start','endno','end']);
	for (let i = 1; i < data.features.length; i++) {
        names[i] = data.features[i].properties.name;
		globaldata.push([
		  	data.features[i].properties.number,
		  	data.features[i].properties.name,
            data.features[i].properties.from_station_code,
		 	data.features[i].properties.from_station_name,
            data.features[i].properties.to_station_code,
		 	data.features[i].properties.to_station_name
		])
    }
    names.sort
    names = find_duplicate_in_array(names);
    for (let i = 1; i < names.length; i++) {
      option = document.createElement('option');
      option.text = names[i];
      option.value = names[i];
      dropdown.add(option);
    }
   } else {
    // Reached the server, but it returned an error
  }   
}

request.onerror = function() {
  console.error('An error occurred fetching the JSON from ' + url);
};

request.send();

const stationurl = "https://raw.githubusercontent.com/datameet/railways/master/stations.json";
const stationrequest = new XMLHttpRequest();
stationrequest.open('GET',stationurl,true);
stationrequest.onload = function() {
    if (stationrequest.status === 200) {
        const station = JSON.parse(stationrequest.responseText);
        stationdata.push(['code','address','name','state']);
        for (let i = 1; i < station.features.length; i++) {
            stationdata.push([
                station.features[i].properties.code,
                station.features[i].properties.name,
                station.features[i].properties.address,
                station.features[i].properties.state
            ])
        }
    } else {
     // Reached the server, but it returned an error
   }   
}
stationrequest.onerror = function() {
    console.error('An error occurred fetching the JSON from ' + stationurl);
}; 
stationrequest.send();

document.getElementById("trainname-dropdown").onchange = changeListener;
document.getElementById("source-dropdown").onchange = switchStationListener;

var from_dropdown = document.getElementById("source-dropdown");
var to_dropdown = document.getElementById("destination-dropdown");
var from_con = document.getElementById("source_con");
var to_con = document.getElementById("destination_con");

var from_time = document.getElementById("source_time");
var to_time = document.getElementById("destination_time");
to_time.disabled=true;
from_time.disabled=true;

var from = [];
var to = [];

var train_id = document.getElementById("trainid_box");
train_id.type = "hidden";
// var source_id = document.getElementById("trainid_box");
// source_id.type = "hidden";
// var destination_id = document.getElementById("trainid_box");
// destination_id.type = "hidden";

function switchStationListener(){
    for (let i = 0; i < from.length; i++) {
        var from_temp,to_temp;
        if (this.value==from[i]) {
            to_dropdown.value = to[i];
        }
    }
}


function changeListener(){
    from=[]
    to=[]
    from_dropdown.length = 0
    to.innerHTML= ""
    to.value=null

    var value = this.value
    if (value!=defaultOption.text)
    {
        from_dropdown.disabled = false;
        from_time.disabled=false;
        // console.log(globaldata)
        var j=0;
        for (let i = 1; i < globaldata.length; i++) {
            if(globaldata[i][1]==value){
                    console.log(globaldata[i]);

                    train_id.value = globaldata[i][0];
                    // source_id.value = globaldata[i][2];
                    // destination_id.value = globaldata[i][4];

                    from[j]=(globaldata[i][3]);
                    to[j]=(globaldata[i][5]);

                    var opt = document.createElement('option');
                    opt.value = from[j];
                    opt.innerHTML = from[j];
                    from_dropdown.appendChild(opt);

                    to_dropdown.innerHTML = to[j];
                    to_dropdown.value = to[j];

                    set_country(globaldata[i][2],globaldata[i][4])

                    // console.log(from,to);
                    // if(to[j]==to[j-1]) to.pop()
                    // if(from[j]==from[j-1]) from.pop()
                    j++;
            }
        }
    }else if(value==defaultOption.text){
        from_dropdown.disabled = true;
        from_time.disabled=true;
    }else{
        from_dropdown.disabled = true;
        from_time.disabled=true;
    }
}

function set_country(from_code,to_code){
    console.log(stationdata[1][1])
    for (let i = 0; i < stationdata.length; i++) {
        if(from_code==stationdata[i][0])
        {
            console.log(stationdata[i][3])
            from_con.innerHTML = stationdata[i][3];
            from_con.value = stationdata[i][3];
        }
        if(to_code==stationdata[i][0])
        {
            to_con.innerHTML = stationdata[i][3];
            to_con.value = stationdata[i][3];
        }
    }
}

var d = new Date().toISOString().substr(0, 19);
from_time.min = d.toString();

$('#source_time').change(function() {
    to_time.disabled=false;
    to_time.min = from_time.value;
})

function find_duplicate_in_array(array){
    const count = {}
    const result = []
    array.forEach(item => {
        if (count[item]) {
           count[item] +=1
           return
        }
        count[item] = 1
    })
    
    for (let prop in count){
        if (count[prop] >=2){
            result.push(prop)
        }
    }		
// console.log(count)
 return result;	
}

function submitValidation() {
    if((train_id=="")&&(from_time=="")&&(to_time=="")&&(from_dropdown=="")&&(to_dropdown=="")){
        alert("Fields are incomplete");
        return false;
    }
}