const btn1 = document.querySelector('[data-item="1"]'),
	  btn2 = document.querySelector('[data-item="2"]'),
	  btn3 = document.querySelector('[data-item="3"]'),
	  btn4 = document.querySelector('[data-item="4"]'),
	  btn5 = document.querySelector('[data-item="5"]'),
	  btn6 = document.querySelector('[data-item="6"]')

const successPopup = document.querySelector('.success'),
	  failPopup = document.querySelector('.failed')
	
let btns = [btn1, btn2, btn3, btn4, btn5, btn6]

let addItemURL = "http://oceanstudios.test/public/shop/api/addItem/"

btns.forEach(btn => {
	btn.addEventListener('click', () => {
		let id = btn.dataset.item,
			amount = `amount-${id}`,
			size = `size-${id}`

		amount = document.querySelector(`#${amount}`).value

		if (parseInt(id) < 4) size = document.querySelector(`#${size}`).value
		else size = 'null'

		makeAjaxCall(addItemURL, `${id}/${amount}/${size}`, "GET")
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