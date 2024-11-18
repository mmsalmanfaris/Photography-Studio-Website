window.onloadTurnstileCallback = function () {
    document.querySelector(".booking-section").style.display = "none";
    if (typeof turnstile !== 'undefined') {
        turnstile.ready(function () {
            turnstile.render(".cf-turnstile", {
                sitekey: "0x4AAAAAAA0RjmJcphJ27X-L",
                callback: function (token) {
                    console.log(`Challenge Success ${token}`);
                    setTimeout(() => {
                        document.querySelector(".booking-section").style.display = "block";
                        document.querySelector(".cf-turnstile").style.display = "none";
                    }, 10);
                },
            });
        });
    } else {
        console.error("Turnstile is not defined. Make sure the Turnstile library is loaded.");
    }
};