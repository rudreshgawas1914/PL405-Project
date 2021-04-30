function editArrivalTime(id,button,arival,departure){
	var div = button.parentElement;
	button.previousElementSibling.innerHTML = ""
	button.remove()

	// var current = new Date().toISOString().substr(0, 19);
	var a = arival.split(" ")
	arival = a[0]+'T'+a[1]

	var d = departure.split(" ")
	departure = d[0]+'T'+d[1]

	var form = document.createElement('form');
	form.setAttribute('action',"train-statusArrival/"+id);
	var input = document.createElement("input")
	input.type = "datetime-local"
	input.step="1"
	input.setAttribute("class","form-control text-center")
	input.min = arival;
	input.max = departure;
	input.name = "newtime"

	var submit = document.createElement('button');
	submit.innerHTML = "Change"
	submit.type = "submit"
	submit.setAttribute("class","btn btn-primary")

	form.append(input)
	form.append(submit)
	div.append(form)
	console.log(div)
}


function editDepartureTime(id,button,arival){
	var div = button.parentElement;
	button.previousElementSibling.innerHTML = ""
	button.remove()

	var a = arival.split(" ")
	arival = a[0]+'T'+a[1]

	var form = document.createElement('form');
	form.setAttribute('action',"train-statusDeparture/"+id);
	var input = document.createElement("input")
	input.type = "datetime-local"
	input.step="1"
	input.setAttribute("class","form-control text-center")
	input.min = arival;
	input.name = "newtime"

	var submit = document.createElement('button');
	submit.innerHTML = "Change"
	submit.type = "submit"
	submit.setAttribute("class","btn btn-primary")

	form.append(input)
	form.append(submit)
	div.append(form)
	console.log(div)
}