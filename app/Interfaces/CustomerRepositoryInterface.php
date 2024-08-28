<?php

namespace App\Interfaces;

use App\Models\Customer;

interface CustomerRepositoryInterface{
    public function createCustomer(array $customerData);
}
