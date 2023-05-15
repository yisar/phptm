function addtext() {
	var
		face = document.querySelector('#textface').value,
		content = document.querySelector('#content'),
		text = content.value;
	content.value = (text + face);
}