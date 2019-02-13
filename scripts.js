function gotoProject(n){
	window.open('Projects/index.php', '_self');};

function addBlogPost(postName, postSnipp){
	var title = document.createElement('p');
	title.className = 'bptitle';
	title.innerHTML = postName;

	var snipp = document.createElement('p');
	snipp.className = 'bppost';
	snipp.innerHTML = postSnipp + '...';

	var tab = document.createElement('div');
	tab.className = 'blogpost';
	tab.appendChild(title);
	tab.appendChild(snipp);


	var link = document.createElement('a');
	link.setAttribute('href', ''); ///////////////////Add link to specific blog post!!!!
	link.appendChild(tab);

	devParent.appendChild(link);
}


var devParent = document.getElementById('devblogs');
var i = 0; 

if (posts.length > 10) {
	while(i<10){
		var name = "(" + posts[i][0] + ") " + posts[i][3];
		var snipp = posts[i][2].substring(0,66);
		addBlogPost(name, snipp);
		i++;
	};
} else{
	while (i < posts.length){
		var name = "(" + posts[i][0] + ") " + posts[i][3];
		var snipp = posts[i][2].substring(0,66);
		addBlogPost(name, snipp);
		i++;
	};
}

