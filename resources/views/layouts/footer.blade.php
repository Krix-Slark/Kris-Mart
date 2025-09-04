<style>
    .div.p {
        font-size: 16px;
    }
</style>

<div class="py-4 mb-4 mt-5 bg-dark d-flex flex-row justify-content-center align-items-center gap-2">
    <form class="d-flex gap-2" onsubmit="subscribeUser(event)">
        <input type="text" class="form-control w-75 text-center text-muted" style="font-size: 18px;" placeholder="phone number or email address"
            required>
        <button type="submit" class="btn btn-light py-2 fw-600" style="fontsize:20px;">SUBSCRIBE</button>
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

            <h3 class=" fw-400 mb-3" style="font-size: 20px;">Delivery Services</h3>
            <img src="{{ asset('images/delivery.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/delivery1.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/delivery2.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/delivery3.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">

            <h3 class="mt-5 fw-400 mb-3" style="font-size:20px;">Payment Methods</h3>
            <img src="{{ asset('images/wavepay.jpg') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/kpay.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/truemoney.png') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">
            <img src="{{ asset('images/aya.webp') }}" alt="Delivery Services" class="img-fluid me-3"
                style="background-size:cover; width: 50px; height: 50px; overflow: hidden;">

        </div>

        <!-- Customer Care -->
        <div
            class="customer-care-text col-12 col-md-4 justify-content-center justify-content-md-start align-items-center align-items-md-start mb-5">
            <h3 class="fw-400 mb-4" style="font-size:20px;">Customer Care</h3>
            <p class="text-muted mt-2">Need help? Our support team is available 24/7.</p>
            <p class="text-muted mt-2">Chat with us instantly for quick assistance.</p>
            <p class="text-muted mt-2">Email: <a href="mailto:support@kris-mart.com"
                    class="text-decoration-none">devslark15@gmail.com </a>Contact Us</p>
            <p class="text-muted mt-2">Check our FAQ for quick answers. <a href="#" class=""><i
                        class="fas fa-circle-info fs-5 
                        
                        "></i></a>
            </p>
            <p class="text-muted mt-2">We value your feedback to improve our services.</p>

            


        </div>

        <!-- <div class="col-12 col-md-1"></div> -->
        <!-- About Us -->
        <div
            class="col-12 col-md-3 justify-content-center justify-content-md-start align-items-center align-items-md-start ">
            
            <a href="#" class="me-4 ms-5" title="YouTube"><i class="fab fa-youtube fs-2 text-danger"></i></a>
            <a href="#" class="me-4 " title="X"><i class="fab fa-x-twitter fs-2 text-dark"></i></a>
            <a href="#" class="me-4" title="Facebook"><i class="fa-brands fa-facebook fs-2 text-primary"></i></a>
            <a href="#" class="me-4 " title="Instagram"><i
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