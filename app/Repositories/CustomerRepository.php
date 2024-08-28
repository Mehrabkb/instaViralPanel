<?php

namespace App\Repositories;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface{
    public function createCustomer(array $customerData)
    {
        // TODO: Implement addCustomer() method.
        return Customer::create($customerData);

    }
}
