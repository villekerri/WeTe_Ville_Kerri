
var request = new XMLHttpRequest();
request.open('GET', 'data/books.json', false);
request.send(null);
var data = JSON.parse(request.responseText);
console.log(data);

var books = data.books;

/**
var list = document.createElement('tr');
for (var i=0; i < books.length; i++) {
	console.log(books[i].title);
	var item = document.createElement('td');
	item.innerHTML = books[i].title + ", " + books[i].year;
	list.appendChild(item);
}
document.body.appendChild(list);
**/
var tabl = document.createElement('table');
var rivi = document.createElement('tr');
var headers = ['Title', 'Publishing year', 'ISBN', 'Authors'];
for (var i=0; i < headers.length; i++){
	var taa = document.createElement('th');
	taa.innerHTML = headers[i];
	rivi.appendChild(taa);
}
tabl.appendChild(rivi);
for (var i=0; i < books.length; i++) {
	var rivi = document.createElement('tr');
	//rivi.setAttribute("id", "rivi-" + i);
	rivi.id = "rivi-" + i;
	//console.log(books[i].title);
	var dataa = document.createElement('td');
	var dataa2 = document.createElement('td');
	var dataa3 = document.createElement('td');
	var dataa4 = document.createElement('td');
	dataa.innerHTML = books[i].title;
	dataa2.innerHTML = books[i].year;
	dataa3.innerHTML = books[i].isbn;
	dataa4.innerHTML = books[i].authors;
	rivi.appendChild(dataa);
	rivi.appendChild(dataa2);
	rivi.appendChild(dataa3);
	rivi.appendChild(dataa4);
	tabl.appendChild(rivi);
}
document.body.appendChild(tabl);

document.getElementById('rivi-0').onclick = function() {
	document.getElementById('titteli').innerHTML = books[0].title;
};

document.getElementById('rivi-1').onclick = function() {
	document.getElementById('titteli').innerHTML = books[1].title;
};

document.getElementById('rivi-2').onclick = function() {
	document.getElementById('titteli').innerHTML = books[2].title;
};
document.getElementById('rivi-3').onclick = function() {
	document.getElementById('titteli').innerHTML = books[3].title;
};
document.getElementById('rivi-4').onclick = function() {
	document.getElementById('titteli').innerHTML = books[4].title;
};


