var myHeaders = new Headers();
myHeaders.append("apikey", "8yj6Ayl57B5picDU1N79GKlc1wI3F1r8");

var requestOptions = {
  method: 'GET',
  redirect: 'follow',
  headers: myHeaders
};

document.querySelector("form").onsubmit = () => {
	
	const amount = document.querySelector("#amount").value;
	const fromCurrency = document.querySelector("#from-currency").value;
	const toCurrency = document.querySelector("#to-currency").value;
	
	console.log(fromCurrency);
	console.log(toCurrency);

	fetch(`https://api.apilayer.com/exchangerates_data/convert?to=${toCurrency}&from=${fromCurrency}&amount=${amount}`, requestOptions)
  .then(response => response.json())
  .then(data => {

		const number = document.querySelector("#number");

		const result = data.result.toFixed(2);

		number.innerHTML = `${amount} ${fromCurrency} is equals to ${result} ${toCurrency}`;



	})
  .catch(error => {
		document.querySelector("#number").innerHTML = error;
  });

  document.querySelector("#amount").value = "";
  document.querySelector("#from-currency").value = "select currency";
  document.querySelector("#to-currency").value = "select currency";
  

	return false;
}