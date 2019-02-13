

function cardhover(n){
	var cardHead = document.getElementsByClassName("card-header")[n];
	var cardBody = document.getElementsByClassName("card")[n];
	cardHead.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
	cardBody.style.backgroundColor = "#e5e5e5";
}

function cardout(n){
	var card = document.getElementsByClassName("card-header")[n];
	var cardBody = document.getElementsByClassName("card")[n];
	card.style.backgroundColor = "rgba(0, 0, 0, 0.03)"; 
	cardBody.style.backgroundColor = "#fff";
}


function update(n){
	var title = document.getElementById('display-4');
	var date = document.getElementById('lead');
	var body = document.getElementById('bpBody');

	title.innerHTML = "";
	date.innerHTML = "";
	body.innerHTML = "";

	title.innerHTML = posts[n][3];
	date.innerHTML = posts[n][0];
	body.innerHTML = posts[n][2];

}

/*
posts[i][0] =>Date
posts[i][1] =>viewability
posts[i][2] =>post
posts[i][3] =>title
*/


function main(){
	for (var i = 0; i < posts.length; i++) {
		//CREATING CARDS

		var cardBar = document.getElementById('postrow');

		var newTitle = document.createElement('h5');
		newTitle.className = 'card-title';
		newTitle.innerHTML = posts[i][0];

		var newText = document.createElement('p');
		newText.className = 'card-text';
		newText.innerHTML = posts[i][2].substring(0,92) + '...';


		var newHead = document.createElement('div');
		newHead.className = 'card-header';
		newHead.innerHTML = posts[i][3];

		
		var newBody = document.createElement('div');
		newBody.className ='card-body';
		newBody.appendChild(newTitle);
		newBody.appendChild(newText);
		
		var newCard = document.createElement('div');
		newCard.className = 'card bg-light mb-3';
		newCard.setAttribute('onclick','update(' + i + ')');
		newCard.setAttribute('onmouseover','cardhover(' + i + ')');
		newCard.setAttribute('onmouseout','cardout(' + i + ')');
		newCard.appendChild(newHead);
		newCard.appendChild(newBody);

		var newCell = document.createElement('td');
		newCell.appendChild(newCard)

		cardBar.appendChild(newCell);
	}
}

main();

	