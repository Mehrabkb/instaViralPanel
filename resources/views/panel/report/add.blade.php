@extends('panel.master')
@section('title' , 'ثبت گزارش')
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">
@endsection
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">ثبت گزارش</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('panel.home') }}">داشبرد</a></li>
                            <li class="breadcrumb-item active">ثبت گزارش</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title w-100 text-left">ثبت گزارش</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="{{ route('panel.customer.add') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">انتخاب مشتری</label>
                                        <select name="customer-id" class="form-control">
                                            <option selected disabled>مشتری خود را انتخاب کنید</option>
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->customer_id }}">{{ $customer->customer_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>نام کمپین</label>
                                        <input class="form-control" type="text" placeholder="نام کمپین" name="report-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">وضعیت کمپین</label>
                                        <select class="form-control" name="report-status">
                                            <option value="0">پایان یافته</option>
                                            <option value="1">در حال اجرا</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>فایل زیپ کمپین (اختیاری)</label>
                                        <input class="form-control" type="file"  name="report-zip-file">
                                    </div>
                                    <div class="form-group">
                                        <label> فایل اکسل کمپین (اختیاری)</label>
                                        <input class="form-control" type="file"  name="report-excel-file">
                                    </div>
                                    <div class="form-group">
                                        <label>نوع کمپین (اختیاری)</label>
                                        <input class="form-control" type="text" placeholder="مثل پست تو استوری" name="report-type">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <hr>
                                <hr>
                                <hr>
                                <h3 class="bg-primary py-2 px-3"> آیتم های کمپین

                                </h3>
                                <div class="form-items">
                                    <div class="item w-75 mx-auto">
                                        <div class="card card-dark">
                                            <div class="card-header">
                                                <h3 class="card-title float-left">آیتم</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label> نام پیج</label>
                                                    <input class="form-control" type="text" placeholder="نام پیج" name="social-name[]">
                                                </div>
                                                <div class="form-group">
                                                    <label> لینک پیج</label>
                                                    <input class="form-control" type="text" placeholder="لینک پیج" name="social-link[]">
                                                </div>
                                                <div class="form-group">
                                                    <label>عکس پیج</label>
                                                    <input class="form-control" type="file"  name="social-image[]">
                                                </div>
                                                <div class="form-group">
                                                    <label> تعداد فالور</label>
                                                    <input class="form-control" type="number" placeholder=" تعداد فالور" name="social-follower-count[]">
                                                </div>
                                                <div class="form-group">
                                                    <label> ساعت قرارگیری</label>
                                                    <input class="form-control social-date-registered"  type="text" placeholder="تاریخ">
                                                    <input type="hidden" id="social-date-registered" name="social-date-registered[]" >
                                                </div>
                                                <div class="form-group">
                                                    <label>ویو استوری</label>
                                                    <input class="form-control" type="number" placeholder="ویو استوری" name="social-story-view[]">
                                                </div>
                                                <div class="form-group">
                                                    <label>گزارش اکسل</label>
                                                    <input class="form-control" type="file"  name="social-story-excel-file[]">
                                                </div>
                                                <div class="form-group">
                                                    <label>گزارش ویدیو</label>
                                                    <input class="form-control" type="file"  name="social-story-video-file[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success add-item mx-auto d-block" type="button"> افزودن آیتم</button>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ثبت</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                        {{--                        <!-- Form Element sizes -->--}}
                        {{--                        <div class="card card-success">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <h3 class="card-title">Different Height</h3>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="card-body">--}}
                        {{--                                <input class="form-control form-control-lg" type="text" placeholder=".input-lg">--}}
                        {{--                                <br>--}}
                        {{--                                <input class="form-control" type="text" placeholder="Default input">--}}
                        {{--                                <br>--}}
                        {{--                                <input class="form-control form-control-sm" type="text" placeholder=".input-sm">--}}
                        {{--                            </div>--}}
                        {{--                            <!-- /.card-body -->--}}
                        {{--                        </div>--}}
                        {{--                        <!-- /.card -->--}}

                        {{--                        <div class="card card-danger">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <h3 class="card-title">Different Width</h3>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="card-body">--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-3">--}}
                        {{--                                        <input type="text" class="form-control" placeholder=".col-3">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-4">--}}
                        {{--                                        <input type="text" class="form-control" placeholder=".col-4">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-5">--}}
                        {{--                                        <input type="text" class="form-control" placeholder=".col-5">--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <!-- /.card-body -->--}}
                        {{--                        </div>--}}
                        {{--                        <!-- /.card -->--}}

                        {{--                        <!-- Input addon -->--}}
                        {{--                        <div class="card card-info">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <h3 class="card-title">Input Addon</h3>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="card-body">--}}
                        {{--                                <div class="input-group mb-3">--}}
                        {{--                                    <div class="input-group-prepend">--}}
                        {{--                                        <span class="input-group-text">@</span>--}}
                        {{--                                    </div>--}}
                        {{--                                    <input type="text" class="form-control" placeholder="Username">--}}
                        {{--                                </div>--}}

                        {{--                                <div class="input-group mb-3">--}}
                        {{--                                    <input type="text" class="form-control">--}}
                        {{--                                    <div class="input-group-append">--}}
                        {{--                                        <span class="input-group-text">.00</span>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="input-group">--}}
                        {{--                                    <div class="input-group-prepend">--}}
                        {{--                                        <span class="input-group-text">$</span>--}}
                        {{--                                    </div>--}}
                        {{--                                    <input type="text" class="form-control">--}}
                        {{--                                    <div class="input-group-append">--}}
                        {{--                                        <span class="input-group-text">.00</span>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <h4>With icons</h4>--}}

                        {{--                                <div class="input-group mb-3">--}}
                        {{--                                    <div class="input-group-prepend">--}}
                        {{--                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>--}}
                        {{--                                    </div>--}}
                        {{--                                    <input type="email" class="form-control" placeholder="Email">--}}
                        {{--                                </div>--}}

                        {{--                                <div class="input-group mb-3">--}}
                        {{--                                    <input type="text" class="form-control">--}}
                        {{--                                    <div class="input-group-append">--}}
                        {{--                                        <span class="input-group-text"><i class="fas fa-check"></i></span>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="input-group">--}}
                        {{--                                    <div class="input-group-prepend">--}}
                        {{--                    <span class="input-group-text">--}}
                        {{--                      <i class="fas fa-dollar-sign"></i>--}}
                        {{--                    </span>--}}
                        {{--                                    </div>--}}
                        {{--                                    <input type="text" class="form-control">--}}
                        {{--                                    <div class="input-group-append">--}}
                        {{--                                        <div class="input-group-text"><i class="fas fa-ambulance"></i></div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>--}}

                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-lg-6">--}}
                        {{--                                        <div class="input-group">--}}
                        {{--                                            <div class="input-group-prepend">--}}
                        {{--                        <span class="input-group-text">--}}
                        {{--                          <input type="checkbox">--}}
                        {{--                        </span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <input type="text" class="form-control">--}}
                        {{--                                        </div>--}}
                        {{--                                        <!-- /input-group -->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- /.col-lg-6 -->--}}
                        {{--                                    <div class="col-lg-6">--}}
                        {{--                                        <div class="input-group">--}}
                        {{--                                            <div class="input-group-prepend">--}}
                        {{--                                                <span class="input-group-text"><input type="radio"></span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <input type="text" class="form-control">--}}
                        {{--                                        </div>--}}
                        {{--                                        <!-- /input-group -->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- /.col-lg-6 -->--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /.row -->--}}

                        {{--                                <h5 class="mt-4 mb-2">With buttons</h5>--}}

                        {{--                                <p>Large: <code>.input-group.input-group-lg</code></p>--}}

                        {{--                                <div class="input-group input-group-lg mb-3">--}}
                        {{--                                    <div class="input-group-prepend">--}}
                        {{--                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">--}}
                        {{--                                            Action--}}
                        {{--                                        </button>--}}
                        {{--                                        <ul class="dropdown-menu">--}}
                        {{--                                            <li class="dropdown-item"><a href="#">Action</a></li>--}}
                        {{--                                            <li class="dropdown-item"><a href="#">Another action</a></li>--}}
                        {{--                                            <li class="dropdown-item"><a href="#">Something else here</a></li>--}}
                        {{--                                            <li class="dropdown-divider"></li>--}}
                        {{--                                            <li class="dropdown-item"><a href="#">Separated link</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- /btn-group -->--}}
                        {{--                                    <input type="text" class="form-control">--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /input-group -->--}}

                        {{--                                <p>Normal</p>--}}
                        {{--                                <div class="input-group mb-3">--}}
                        {{--                                    <div class="input-group-prepend">--}}
                        {{--                                        <button type="button" class="btn btn-danger">Action</button>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- /btn-group -->--}}
                        {{--                                    <input type="text" class="form-control">--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /input-group -->--}}

                        {{--                                <p>Small <code>.input-group.input-group-sm</code></p>--}}
                        {{--                                <div class="input-group input-group-sm">--}}
                        {{--                                    <input type="text" class="form-control">--}}
                        {{--                                    <span class="input-group-append">--}}
                        {{--                    <button type="button" class="btn btn-info btn-flat">Go!</button>--}}
                        {{--                  </span>--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /input-group -->--}}
                        {{--                            </div>--}}
                        {{--                            <!-- /.card-body -->--}}
                        {{--                        </div>--}}
                        {{--                        <!-- /.card -->--}}
                        {{--                        <!-- Horizontal Form -->--}}
                        {{--                        <div class="card card-info">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <h3 class="card-title">Horizontal Form</h3>--}}
                        {{--                            </div>--}}
                        {{--                            <!-- /.card-header -->--}}
                        {{--                            <!-- form start -->--}}
                        {{--                            <form class="form-horizontal">--}}
                        {{--                                <div class="card-body">--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>--}}
                        {{--                                        <div class="col-sm-10">--}}
                        {{--                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>--}}
                        {{--                                        <div class="col-sm-10">--}}
                        {{--                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <div class="col-sm-offset-2 col-sm-10">--}}
                        {{--                                            <div class="form-check">--}}
                        {{--                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">--}}
                        {{--                                                <label class="form-check-label" for="exampleCheck2">Remember me</label>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /.card-body -->--}}
                        {{--                                <div class="card-footer">--}}
                        {{--                                    <button type="submit" class="btn btn-info">Sign in</button>--}}
                        {{--                                    <button type="submit" class="btn btn-default float-right">Cancel</button>--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /.card-footer -->--}}
                        {{--                            </form>--}}
                        {{--                        </div>--}}
                        {{--                        <!-- /.card -->--}}

                    </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.min.js"></script>
    <script src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
    <script>
        $('.social-date-registered').persianDatepicker({
            observer: true,
            autoClose: true,
            altField: '#social-date-registered',
            timePicker: {
                enabled: true,
                meridiem: {
                    enabled: true
                }
            }

        })
    </script>
    <script src="{{ asset('panel/script/pages/reportAdd.js') }}"></script>
@endsection
