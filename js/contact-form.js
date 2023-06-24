document.addEventListener("DOMContentLoaded", function () {
	const form = document.getElementById("contactForm");
	if (!form) return;

	form.setAttribute("action", ajaxContactForm.ajaxURL);

	const submit = form.querySelector('input[type="submit"]');
	submit.addEventListener("click", function (ev) {
		ev.preventDefault();
		ev.stopPropagation();

		const formData = new FormData(form);
		formData.append("action", "contact_form");
		formData.append("_ajax_nonce", ajaxContactForm.nonce);

		if (!validateForm(formData)) {
			form.classList.add("invalid");
			return;
		} else {
			form.classList.remove("invalid");
		}
		const query = Array.from(formData.entries())
			.map(([k, v]) => {
				return `${k}=${encodeURIComponent(v)}`;
			})
			.join("&");

		fetch(ajaxContactForm.ajaxURL, {
			method: "POST",
			credentials: "include",
			headers: {
				"Content-Type":
					"application/x-www-form-urlencoded;charset=UTF-8",
			},
			body: query,
		})
			.then((res) => res.json())
			.then((data) => {
				if (!data.success) {
					form.classList.add("error");
				} else {
					form.querySelectorAll("input").forEach((input) => {
						if (input.getAttribute("type") === "submit") return;
						input.value = "";
					});
					form.querySelector("textarea").value = "";
					form.classList.add("success");
					setTimeout(() => {
						form.classList.remove("success");
					}, 1e4);
				}
			});
	});

	function validateForm(formData) {
		return Array.from(formData.entries()).reduce(
			(isValid, [key, value]) => {
				return isValid && validateField(key, value);
			},
			true
		);
	}

	function validateField(key, value) {
		switch (key) {
			case "email":
				return /^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/.test(
					String(value)
				);
			case "name":
				return String(value).length > 2;
			case "message":
				return String(value).length > 10;
			default:
				return true;
		}
	}
});
