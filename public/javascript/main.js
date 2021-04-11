// function loginregFrom () {
//     $('#login-form-link').click(function(e) {
//         console.log("Login");
// 		$("#login-form").delay(100).fadeIn(100);
//  		$("#register-form").fadeOut(100);
// 		$('#register-form-link').removeClass('active');
// 		$(this).addClass('active');
// 		e.preventDefault();
// 	});
// 	$('#register-form-link').click(function(e) {
//         console.log("reg");
// 		$("#register-form").delay(100).fadeIn(100);
//  		$("#login-form").fadeOut(100);
// 		$('#login-form-link').removeClass('active');
// 		$(this).addClass('active');
// 		e.preventDefault();
// 	});
// };

// loginregFrom();

// let url = 'https://raw.githubusercontent.com/datameet/railways/master/trains.json';


// fetch(url)
// .then(res => res.json())
// .then((out) => {
// 	var data = out.features;
// 	var start = [];
// 	// console.log('Checkout this JSON! ', data);

// 	for (let index = 0; index < data.length; index++) {
// 		var name = data[index].properties.name;
// 		start[index]=data[index].properties.from_station_name;
// 		// console.log(index,name);
// 	}
// 	console.log(find_duplicate_in_array(start));
// })
// .catch(err => { throw err });

// function find_duplicate_in_array(array){
// 	const count = {}
// 	const result = []
// 	array.forEach(item => {
// 		if (count[item]) {
// 		   count[item] +=1
// 		   return
// 		}
// 		count[item] = 1
// 	})
	
// 	for (let prop in count){
// 		if (count[prop] >=2){
// 			result.push(prop)
// 		}
// 	}
	
// 	console.log(count)
// 	return result;	
// 	}




function trainDetails(){
	let dropdown = document.getElementById('trainname-dropdown');
dropdown.length = 0;

let defaultOption = document.createElement('option');
defaultOption.text = 'Choose Train Name';

dropdown.add(defaultOption);
dropdown.selectedIndex = 0;

const url = 'https://raw.githubusercontent.com/datameet/railways/master/trains.json';

const request = new XMLHttpRequest();
request.open('GET', url, true);

request.onload = function() {
  if (request.status === 200) {
    const data = JSON.parse(request.responseText);
    let option;

	const sorteddata = [];
	sorteddata.push(['name','start','end']);
	for (let i = 1; i < data.features.length; i++) {
		sorteddata.push([
			data.features[i].properties.number,
			data.features[i].properties.name,
			data.features[i].properties.from_station_name,
			data.features[i].properties.to_station_name
		])
	  }
	console.log(sorteddata);

    for (let i = 1; i < sorteddata.length; i++) {
      option = document.createElement('option');
      option.text = sorteddata[i][1]
      option.value = data.features[i].properties.number;
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
		
		console.log(count)
	 	return result;	
	}
}