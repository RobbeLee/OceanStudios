const nav = document.querySelector('.nav'),
	  header = document.querySelector('header'),
	  navObserver = new IntersectionObserver(updateNav, {rootMargin: "-60% 0px 0px 0px"})

function updateNav(entries) {
	entries.forEach(entry => (!entry.isIntersecting) ? nav.classList.add('nav-scroll') : nav.classList.remove('nav-scroll'))
}

navObserver.observe(header)