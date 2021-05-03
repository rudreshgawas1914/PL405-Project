function checkseat(button,id,seats){
	var card = button.parentElement.parentElement.parentElement;
	var div = card.querySelectorAll(".display-cat");
	console.log(div)
	div[0].style.display = "block";
}