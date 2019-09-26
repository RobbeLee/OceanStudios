const btn1 = document.querySelector('[data-item="1"]'),
	  btn2 = document.querySelector('[data-item="2"]'),
	  btn3 = document.querySelector('[data-item="3"]'),
	  btn4 = document.querySelector('[data-item="4"]'),
	  btn5 = document.querySelector('[data-item="5"]'),
	  btn6 = document.querySelector('[data-item="6"]')

const successPopup = document.querySelector('.success'),
	  failPopup = document.querySelector('.failed')
	
let btns = [btn1, btn2, btn3, btn4, btn5, btn6]

let addItemURL = "/shop/addItem?"

btns.forEach(btn => {
	btn.addEventListener('click', () => {
		let id = btn.dataset.item,
			amount = `amount-${id}`,
			size = `size-${id}`

		amount = document.querySelector(`#${amount}`).value
		size = document.querySelector(`#${size}`).value

		makeAjaxCall(addItemURL, `${id}&${amount}&${size}`, "GET")
			.then(() => {
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
		xmlhttp.open(methodType, url, true)
		xmlhttp.send()
		xmlhttp.onreadystatechange = function () {
			if (xmlhttp.readyState === 4) {
				if (xmlhttp.status === 200) {
					let serverResponse = xmlhttp.responseText
					resolve(serverResponse)
				} else {
					reject(xmlhttp.status)
					console.log("xmlhttp failed")
				}
			}
		}
	})
	return promiseObj
}

function errorHandler(statusCode) {
	console.log("failed with status", status)
}