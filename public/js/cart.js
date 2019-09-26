const successPopup = document.querySelector('.success'),
	  failPopup = document.querySelector('.failed')
	
let btns = document.querySelectorAll('button');

let removeItemURL = "http://oceanstudios.test/public/shop/api/removeItem/"

btns.forEach(btn => {
	btn.addEventListener('click', () => {
		if (!btn.dataset.id) return

		let id = btn.dataset.id

		let amount = parseInt(document.querySelector(`#amount-${id}`).dataset.amount) - 1

		if (amount < 0) return

		makeAjaxCall(removeItemURL, `${id}`, "GET")
			.then(() => {
				document.querySelector(`#amount-${id}`).dataset.amount = amount
				document.querySelector(`#amount-${id}`).innerHTML = `x${amount}`

				successPopup.style.display = "block"
				successPopup.classList.add('active')
				setTimeout(() => {
					successPopup.classList.remove('active')
					setTimeout(() => {
						successPopup.style.display = "none"
					}, 250)
				}, 3000)
			})
			.catch(() => {
				failPopup.style.display = "block"
				failPopup.classList.add('active')
				setTimeout(() => {
					failPopup.classList.remove('active')
					setTimeout(() => {
						failPopup.style.display = "none"
					}, 250)
				}, 3000)
			})
	})
})

function makeAjaxCall(url, parameters, methodType) {
	let promiseObj = new Promise(function (resolve, reject) {
		let xmlhttp = new XMLHttpRequest()
		console.log(url+parameters)
		xmlhttp.open(methodType, url+parameters, true)
		xmlhttp.send()
		xmlhttp.onreadystatechange = function () {
			if (xmlhttp.readyState === 4) {
				if (xmlhttp.status === 200) {
					let serverResponse = xmlhttp.responseText
					console.log(xmlhttp.responseText)
					resolve(serverResponse)
				} else {
					reject(xmlhttp.status)
					console.log(xmlhttp.status)
					console.log(xmlhttp.responseText)
					console.log("xmlhttp failed")
				}
			}
		}
	})
	return promiseObj
}