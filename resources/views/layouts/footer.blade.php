<style>
    .div.p {
        font-size: 16px;
    }
</style>

<div class="py-4 mb-4 mt-4 bg-dark d-flex flex-row justify-content-center align-items-center gap-2">
    <form class="d-flex gap-2" onsubmit="subscribeUser(event)">
        <input type="text" class="form-control w-75 fs-4 text-center " placeholder="Phone number or email address"
            required>
        <button type="submit" class="btn btn-light py-2 ">SUBSCRIBE</button>
    </form>
</div>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
    <div id="subscribeToast" class="toast align-items-center text-white bg-success border-0" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body" id="toastBody">
                Subscribed successfully!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>

<footer class="container d-flex flex-column">
    <div class="row mb-0">
        <!-- Get Our App -->
        <div
            class="col-12 col-md-4 justify-content-center justify-content-md-start align-items-center align-items-md-start mb-5">
            <h3 class="fw-bold mb-4 ">Get Our App</h3>
            <i class="fas fa-store fs-1 ms-4 mb-2"></i>
            <p class="text-dark-50  fs-4">Kris-Mart</p>
            <p class=" text-muted mt-4">Download our app for the best shopping experience!</p>
            <p class="text-muted mt-3">Available on iOS and Android</p>
            <p class="text-muted mt-3">Have feedback? <a href="#" class=" ms-2">
                    Let us know!</a></p>
            <h3 class="mt-5 fw-bold mb-3">Delivery Services</h3>
            <img src="{{ asset('images/delivery.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/delivery1.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/delivery2.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/delivery3.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">



        </div>

        <!-- Customer Care -->
        <div
            class="col-12 col-md-4 justify-content-center justify-content-md-start align-items-center align-items-md-start mb-5">
            <h3 class="fw-bold mb-4 ">Customer Care</h3>
            <p class="text-muted mt-2">Need help? Our support team is available 24/7.</p>
            <p class="text-muted mt-2">Chat with us instantly for quick assistance.</p>
            <p class="text-muted mt-2">Email: <a href="mailto:support@kris-mart.com"
                    class="text-decoration-none">devslark15@gmail.com </a>Contact Us</p>
            <p class="text-muted mt-2">Check our FAQ for quick answers. <a href="#" class=""><i
                        class="fas fa-circle-info fs-5 "></i></a>
            </p>
            <p class="text-muted mt-2">We value your feedback to improve our services.</p>

            <h3 class="mt-5 fw-bold mb-3">Payment Methods</h3>
            <img src="{{ asset('images/wavepay.jpg') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/kpay.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/truemoney.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/aya.webp') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">


        </div>

        <!-- About Us -->
        <div
            class="col-12 col-md-4 justify-content-center justify-content-md-start align-items-center align-items-md-start ">
            <h3 class="fw-bold mb-4">About Us</h3>
            <p class="text-muted mt-2">Kris-Mart brings quality products to your doorstep.</p>
            <p class="text-muted mt-2">Shopping made simple, fast, and secure.</p>
            <p class="text-muted mt-2">Reliable delivery across the country.</p>
            <p class="text-muted mt-2">Customer satisfaction is our top priority.</p>
            <p class="text-muted mt-2">Join us for exclusive deals and updates.</p>
            <a href="#" class="me-4" title="YouTube"><i class="fab fa-youtube fs-2 text-danger"></i></a>
            <a href="#" class="me-4" title="X"><i class="fab fa-x-twitter fs-2 text-dark"></i></a>
            <a href="#" class="me-4" title="Facebook"><i class="fa-brands fa-facebook fs-2 text-primary"></i></a>
            <a href="#" class="me-4" title="Instagram"><i
                    class="fa-brands fa-square-instagram fs-2 text-danger"></i></a>

        </div>

    </div>
</footer>
<script>
    function subscribeUser(event) {
        event.preventDefault();
        const inputField = event.target.querySelector("input");
        const inputValue = inputField.value.trim();
        const toastEl = document.getElementById('subscribeToast');
        const toastBody = document.getElementById('toastBody');

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phonePattern = /^\d{11}$/;

        let valid = false;

        if (emailPattern.test(inputValue)) {
            toastEl.className = "toast align-items-center text-white bg-success border-0";
            toastBody.textContent = "Subscribed successfully with email: " + inputValue;
            valid = true;
        } else if (phonePattern.test(inputValue)) {
            toastEl.className = "toast align-items-center text-white bg-success border-0";
            toastBody.textContent = "Subscribed successfully with phone: " + inputValue;
            valid = true;
        } else {
            toastEl.className = "toast align-items-center text-white bg-danger border-0";
            toastBody.textContent = "Please enter a valid email or 11-digit phone number!";
        }

        // show toast
        const toast = new bootstrap.Toast(toastEl);
        toast.show();

        // clear input only if valid
        if (valid) inputField.value = "";
    }

</script>