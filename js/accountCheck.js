		const queryString = window.location.search;
		const urlPar = new URLSearchParams(queryString);
		const accountSuccess = urlPar.get('newacct');
		if (accountSuccess == 1){
			alert("Account creation successful. Welcome to RottenPotatoes!");
		}