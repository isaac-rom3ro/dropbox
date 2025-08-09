<?php

    # We use interfaces, when there is a need to implement a function in several forms 
    interface PaymentGateway {
        public function charge(float $amount): bool;
    }

    class StripeGateway implements PaymentGateway {
        public function charge(float $amount): bool {
            // Stripe API call...
            return true;
        }
    }

    class PayPalGateway implements PaymentGateway {
        public function charge(float $amount): bool {
            // PayPal API call...
            return true;
        }
    }