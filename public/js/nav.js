const nav = document.querySelector('.nav'),
	  header = document.querySelector('.top-el'),
	  navObserver = new IntersectionObserver(updateNav, {rootMargin: "-99% 0px 0px 0px"})

function updateNav(entries) {
	entries.forEach(entry => {
		(!entry.isIntersecting) ? nav.classList.add('nav-scroll') : nav.classList.remove('nav-scroll')
	})
}

navObserver.observe(header)