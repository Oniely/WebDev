var myHeaders = new Headers();
myHeaders.append("apikey", "8yj6Ayl57B5picDU1N79GKlc1wI3F1r8");

var requestOptions = {
	method: 'GET',
	redirect: 'follow',
	headers: myHeaders
};

document.querySelector("form").onsubmit = () => {
	const currency = document.querySelector("#currency").value.toUpperCase();
	const result = document.querySelector("#result");
	
	// add currency to the symbols thro website
	// https://apilayer.com/marketplace/exchangerates_data-api#
	// live demo
	fetch(`https://api.apilayer.com/exchangerates_data/latest?symbols=${currency}&base=USD`, requestOptions)
		.then(response => response.json())
		.then(data => {
			// try console.log(date.rates) or (date.rates.PHP) only use the latter if u choose to specify the currency through original link
			const rate = data.rates;
			const value = rate[currency];
			
			result.innerHTML = `1 USD to ${currency} is ${value.toFixed(2)}`;
		})
		.catch(error => {
			result.innerHTML = "Invalid Currency.";
		})


	document.querySelector("#currency").value = "";

	return false;
};