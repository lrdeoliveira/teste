<?php

namespace Beerandcode\Modulo5\Services;

use Beerandcode\Modulo5\Providers\StripePaymentProvider;

class Checkout
{
    public function __construct(private string $email, private int $amount)
    {
    }
    public function handle()
    {
        $stripeProvider = new StripePaymentProvider();
        return $stripeProvider->charge($this->email, $this->amount);
    }
}
