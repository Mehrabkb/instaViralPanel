<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\CustomerRepositoryInterface;
use App\Interfaces\PagesRepositoryInterface;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    protected $customerRepository;
    protected $pageRepository;
    public function __construct(CustomerRepositoryInterface $customerRepository , PagesRepositoryInterface $pageRepository)
    {
        $this->middleware('UserLoginMiddleware');
        $this->customerRepository = $customerRepository;
        $this->pageRepository = $pageRepository;
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
    public function pages(Request $request){
        switch ($request->method()){
            case 'GET':
                $pages = $this->pageRepository->allPages();
                return view('panel.pages' , compact('pages'));
        }
    }
    public function pageAdd(Request $request){
        switch ($request->method()){
            case 'POST':
                $validate = $request->validate([
                    'instagram-id' => 'required|max:255|unique:pages,page_instagram_id',
                    'page-title' => 'required|max:255',
                    'instagram-avatar' => 'required|image|mimes:jpeg,jpg,png|max:4000',
                    'follower' => 'required|integer'
                ],[
                    'instagram-id.required' => 'آیدی اینستاگرام نمیتواند خالی باشد',
                    'instagram-id.max' => 'آیدی اینستاگرام نمیتواند بیشتر از 255 کاراکتر باشد',
                    'instagram-id.unique' => 'این پیج قبلا ثبت شده است',
                    'page-title.required' => 'عنوان پیج نمیتواند خالی باشد',
                    'page-title.max' => 'عنوان پیج نمیتواند بیشتر از 255 کاراکتر باشد',
                    'instagram-avatar.required' => 'بارگزاری عکس برای پیج الزامی میباشد',
                    'instagram-avatar.mimes' => 'فایل باید با فرمت صحیح وارد شود',
                    'instagram.avatar.size' => 'سایز عکس نمیتواند بیشتر از 4 مگابایت باشد',
                    'follower.required' => 'تعداد فالور الزامی می باشد',
                    'follower.integer' => 'تعداد فالور را با عدد وارد کنید'
                ]);
                if($validate){
                    $instagram_id = htmlspecialchars($request->input('instagram-id'));
                    $page_title = htmlspecialchars($request->input('page-title'));
                    $instagram_avatar = htmlspecialchars($request->input('instagram-avatar'));
                    $follower = htmlspecialchars($request->input('follower'));
                    $imageName = time().'.'.$request['instagram-avatar']->extension();
                    $request['instagram-avatar']->move(public_path('images') , $imageName);
                    $pageData = [
                        'page_instagram_id' => $instagram_id,
                        'page_title' => $page_title,
                        'image' => 'images/'.$imageName,
                        'follower' => $follower
                    ];
                    if($this->pageRepository->addPage($pageData)){
                        return redirect()->back()->with(['success' => 'با موفقیت ثبت شد']);
                    }
                    return redirect()->back()->withErrors('مشکلی پیش آمده است');
                }
        }
    }
}
