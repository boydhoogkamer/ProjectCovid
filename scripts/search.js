let dataList = document.getElementById('lijst');

let request = new XMLHttpRequest();
request.onreadystatechange = function (response) {
	if (request.readyState === 4 && request.status === 200)    {
			let steden = JSON.parse(request.responseText);

			steden.forEach(function (item) {
				let option = document.createElement('option');
				option.value = item;
				option.setAttribute("id", "searchresults");
				dataList.appendChild(option);
            });
    }
};

request.open('GET', './private/includes/data.php', true);
request.send();