let dataList = document.getElementById('lijst');

let request = new XMLHttpRequest();
request.onreadystatechange = function (response) {
	if (request.readyState === 4 && request.status === 200)    {
			let users = JSON.parse(request.responseText);
			console.log(users);
			users.forEach(function (item) {
				let option = document.createElement('option');
				option.value = item.user_name;
				option.setAttribute("id", "searchresults");
				dataList.appendChild(option);
            });
    }
};

request.open('GET', 'index.php?page=jsondata', true);
request.send();