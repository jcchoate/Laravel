<template>
    <div>
        <form action="your-server-side-code" method="POST">
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_jSh67kuQVT7bOkqRTBe2n0tL00jIDu6PE8"
                data-amount="999"
                data-name="home.jaredchoatepro"
                data-description="Example charge"
                data-zip-code="true"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto">
            </script>
        </form>
    </div>
</template>