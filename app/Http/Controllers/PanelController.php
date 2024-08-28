<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    protected $customerRepository;
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->middleware('UserLoginMiddleware');
        $this->customerRepository = $customerRepository;
    }
    public function home(Request $request){
        switch ($request->method()){
            case 'GET':
                return view('panel.home');
        }
    }
    public function customer(Request $request){
        switch ($request->method()){
            case 'GET':
                $customers = $this->customerRepository->allCustomers();
                return view('panel.customer' , compact('customers'));
        }
    }
    public function customerAdd(Request $request){
        switch ($request->method()){
            case 'POST':
                $validate = $request->validate([
                    'customer-name' => 'required|max:255',
                    'customer-brand' => 'required|max:255',
                    'customer-instagram-page' => 'required|max:255|unique:customers,customer_instagram_page',
                ],[
                    'customer-name.required' => 'نام مشتری الزامی می باشد',
                    'customer-name.max' => 'طول نام مشتری نمی تواند بیشتر 255 کاراکتر باشد',
                    'customer-brand.required' => 'نام تجاری مشتری الزامی می باشد',
                    'customer-brand.max' => 'طول نام تجاری مشتری نمی تواند بیشتر 255 کاراکتر باشد',
                    'customer-instagram-page.required' => 'نام پیج مشتری الزامی می باشد',
                    'customer-instagram-page.max' => 'طول نام پیج مشتری نمی تواند بیشتر 255 کاراکتر باشد',
                    'customer-instagram-page.unique' => 'صفحه ی مشتری قبل وارد شده است'
                ]);
                if($validate){
                    $customer_name = htmlspecialchars($request->input('customer-name'));
                    $customer_brand = htmlspecialchars($request->input('customer-brand'));
                    $customer_instagram_page = htmlspecialchars($request->input('customer-instagram-page'));
                    $customerData = [
                        'customer_name' => $customer_name,
                        'customer_brand' => $customer_brand,
                        'customer_instagram_page' => $customer_instagram_page,
                    ];
                    if($this->customerRepository->createCustomer($customerData)){
                        return redirect()->back()->with(['success' => 'با موفقیت ثبت شد']);
                    }
                    return redirect()->back()->withErrors(['مشکلی رخ داده است']);
                }
        }
    }
    public function reportAdd(Request $request){
        switch ($request->method()){
            case 'GET':
                $customers = $this->customerRepository->allCustomers();
                return view('panel.report.add' , compact('customers'));
        }
    }
}
