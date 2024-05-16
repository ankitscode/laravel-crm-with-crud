if (
    document.querySelector("[toast-list]") ||
    document.querySelector("[data-choices]") ||
    document.querySelector("[data-provider]")
) {
    const script1 = document.createElement('script');
    script1.type = 'text/javascript';
    script1.src = 'https://cdn.jsdelivr.net/npm/toastify-js';
    document.body.appendChild(script1);

    const script2 = document.createElement('script');
    script2.type = 'text/javascript';
    script2.src = 'libs/choices.js/public/assets/scripts/choices.min.js';
    document.body.appendChild(script2);

    const script3 = document.createElement('script');
    script3.type = 'text/javascript';
    script3.src = 'libs/flatpickr/flatpickr.min.js';
    document.body.appendChild(script3);
}
