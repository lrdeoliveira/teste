<?php
namespace Beerandcode\Modulo5\Providers;

class StripePaymentProvider
{
    public function charge(string $email, int $amount)
    {
        echo "Charging {$email} for {$amount} using Stripe";
    }
}