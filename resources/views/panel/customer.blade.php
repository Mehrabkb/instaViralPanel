@extends('panel.master')
@section('title', 'مشتریان')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">مشتریان</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('panel.home') }}">داشبرد</a></li>
                            <li class="breadcrumb-item active">مشتریان</li>
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
                                <h3 class="card-title w-100 text-left">ورود اطلاعات مشتریان</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="{{ route('panel.customer.add') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نام و نام خانوادگی مشتری</label>
                                        <input type="text" name="customer-name" class="form-control" id="exampleInputEmail1" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نام تجاری مشتری</label>
                                        <input type="text" name="customer-brand" class="form-control" id="exampleInputEmail1" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نام پیج مشتری</label>
                                        <input type="text" name="customer-instagram-page" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                </div>
                                <!-- /.card-body -->

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
                    <!--/.col (left) -->
                    <!-- right column -->
{{--                    <div class="col-md-6">--}}
{{--                        <!-- general form elements disabled -->--}}
{{--                        <div class="card card-warning">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">General Elements</h3>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <form role="form">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- text input -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Text</label>--}}
{{--                                                <input type="text" class="form-control" placeholder="Enter ...">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Text Disabled</label>--}}
{{--                                                <input type="text" class="form-control" placeholder="Enter ..." disabled>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- textarea -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Textarea</label>--}}
{{--                                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Textarea Disabled</label>--}}
{{--                                                <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <!-- input states -->--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="control-label" for="inputSuccess"><i class="fas fa-check"></i> Input with--}}
{{--                                            success</label>--}}
{{--                                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="control-label" for="inputWarning"><i class="far fa-bell"></i> Input with--}}
{{--                                            warning</label>--}}
{{--                                        <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="control-label" for="inputError"><i class="far fa-times-circle"></i> Input with--}}
{{--                                            error</label>--}}
{{--                                        <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">--}}
{{--                                    </div>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- checkbox -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="checkbox">--}}
{{--                                                    <label class="form-check-label">Checkbox</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="checkbox" checked>--}}
{{--                                                    <label class="form-check-label">Checkbox checked</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="checkbox" disabled>--}}
{{--                                                    <label class="form-check-label">Checkbox disabled</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- radio -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="radio" name="radio1">--}}
{{--                                                    <label class="form-check-label">Radio</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="radio" name="radio1" checked>--}}
{{--                                                    <label class="form-check-label">Radio checked</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="radio" disabled>--}}
{{--                                                    <label class="form-check-label">Radio disabled</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- select -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Select</label>--}}
{{--                                                <select class="form-control">--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Select Disabled</label>--}}
{{--                                                <select class="form-control" disabled>--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- Select multiple-->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Select Multiple</label>--}}
{{--                                                <select multiple class="form-control">--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Select Multiple Disabled</label>--}}
{{--                                                <select multiple class="form-control" disabled>--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                        <!-- general form elements disabled -->--}}
{{--                        <div class="card card-secondary">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Custom Elements</h3>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <form role="form">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- checkbox -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="custom-control custom-checkbox">--}}
{{--                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">--}}
{{--                                                    <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="custom-control custom-checkbox">--}}
{{--                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>--}}
{{--                                                    <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="custom-control custom-checkbox">--}}
{{--                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>--}}
{{--                                                    <label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- radio -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="custom-control custom-radio">--}}
{{--                                                    <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">--}}
{{--                                                    <label for="customRadio1" class="custom-control-label">Custom Radio</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="custom-control custom-radio">--}}
{{--                                                    <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>--}}
{{--                                                    <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="custom-control custom-radio">--}}
{{--                                                    <input class="custom-control-input" type="radio" id="customRadio3" disabled>--}}
{{--                                                    <label for="customRadio3" class="custom-control-label">Custom Radio disabled</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- select -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Custom Select</label>--}}
{{--                                                <select class="custom-select">--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Custom Select Disabled</label>--}}
{{--                                                <select class="custom-select" disabled>--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- Select multiple-->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Custom Select Multiple</label>--}}
{{--                                                <select multiple class="custom-select">--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Custom Select Multiple Disabled</label>--}}
{{--                                                <select multiple class="custom-select" disabled>--}}
{{--                                                    <option>option 1</option>--}}
{{--                                                    <option>option 2</option>--}}
{{--                                                    <option>option 3</option>--}}
{{--                                                    <option>option 4</option>--}}
{{--                                                    <option>option 5</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <div class="custom-control custom-switch">--}}
{{--                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">--}}
{{--                                            <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">--}}
{{--                                            <input type="checkbox" class="custom-control-input" id="customSwitch3">--}}
{{--                                            <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with custom colors danger/success</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="custom-control custom-switch">--}}
{{--                                            <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">--}}
{{--                                            <label class="custom-control-label" for="customSwitch2">Disabled custom switch element</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="customRange1">Custom range</label>--}}
{{--                                        <input type="range" class="custom-range" id="customRange1">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="customRange1">Custom range (custom-range-danger)</label>--}}
{{--                                        <input type="range" class="custom-range custom-range-danger" id="customRange1">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="customRange1">Custom range (custom-range-teal)</label>--}}
{{--                                        <input type="range" class="custom-range custom-range-teal" id="customRange1">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="customFile">Custom File</label>--}}
{{--                                        <div class="custom-file">--}}
{{--                                            <input type="file" class="custom-file-input" id="customFile">--}}
{{--                                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                    </div>--}}
                    <!--/.col (right) -->
                </div>
                <!-- Small boxes (Stat box) -->
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>150</h3>--}}

{{--                                <p>New Orders</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-bag"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

{{--                                <p>Bounce Rate</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-stats-bars"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>44</h3>--}}

{{--                                <p>User Registrations</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-person-add"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>65</h3>--}}

{{--                                <p>Unique Visitors</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-pie-graph"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
                <!-- /.row -->
                <!-- Main row -->
{{--                <div class="row">--}}
{{--                    <!-- Left col -->--}}
{{--                    <section class="col-lg-7 connectedSortable">--}}
{{--                        <!-- Custom tabs (Charts with tabs)-->--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header d-flex p-0">--}}
{{--                                <h3 class="card-title p-3">--}}
{{--                                    <i class="fas fa-chart-pie mr-1"></i>--}}
{{--                                    Sales--}}
{{--                                </h3>--}}
{{--                                <ul class="nav nav-pills ml-auto p-2">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="tab-content p-0">--}}
{{--                                    <!-- Morris chart - Sales -->--}}
{{--                                    <div class="chart tab-pane active" id="revenue-chart"--}}
{{--                                         style="position: relative; height: 300px;">--}}
{{--                                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>--}}
{{--                                    </div>--}}
{{--                                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">--}}
{{--                                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- /.card-body -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}

{{--                        <!-- DIRECT CHAT -->--}}
{{--                        <div class="card direct-chat direct-chat-primary">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Direct Chat</h3>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>--}}
{{--                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"--}}
{{--                                            data-widget="chat-pane-toggle">--}}
{{--                                        <i class="fas fa-comments"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <!-- Conversations are loaded here -->--}}
{{--                                <div class="direct-chat-messages">--}}
{{--                                    <!-- Message. Default to the left -->--}}
{{--                                    <div class="direct-chat-msg">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-left">Alexander Pierce</span>--}}
{{--                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            Is this template really for free? That's unbelievable!--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                    <!-- Message to the right -->--}}
{{--                                    <div class="direct-chat-msg right">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-right">Sarah Bullock</span>--}}
{{--                                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            You better believe it!--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                    <!-- Message. Default to the left -->--}}
{{--                                    <div class="direct-chat-msg">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-left">Alexander Pierce</span>--}}
{{--                                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            Working with AdminLTE on a great new app! Wanna join?--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                    <!-- Message to the right -->--}}
{{--                                    <div class="direct-chat-msg right">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-right">Sarah Bullock</span>--}}
{{--                                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            I would love to.--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                </div>--}}
{{--                                <!--/.direct-chat-messages-->--}}

{{--                                <!-- Contacts are loaded here -->--}}
{{--                                <div class="direct-chat-contacts">--}}
{{--                                    <ul class="contacts-list">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Count Dracula--}}
{{--                            <small class="contacts-list-date float-right">2/28/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">How have you been? I was...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Sarah Doe--}}
{{--                            <small class="contacts-list-date float-right">2/23/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">I will be waiting for...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Nadia Jolie--}}
{{--                            <small class="contacts-list-date float-right">2/20/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">I'll call you back at...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Nora S. Vans--}}
{{--                            <small class="contacts-list-date float-right">2/10/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">Where is your new...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            John K.--}}
{{--                            <small class="contacts-list-date float-right">1/27/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">Can I take a look at...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Kenneth M.--}}
{{--                            <small class="contacts-list-date float-right">1/4/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">Never mind I found...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                    </ul>--}}
{{--                                    <!-- /.contacts-list -->--}}
{{--                                </div>--}}
{{--                                <!-- /.direct-chat-pane -->--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer">--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="input-group">--}}
{{--                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">--}}
{{--                                        <span class="input-group-append">--}}
{{--                      <button type="button" class="btn btn-primary">Send</button>--}}
{{--                    </span>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-footer-->--}}
{{--                        </div>--}}
{{--                        <!--/.direct-chat -->--}}

{{--                        <!-- TO DO List -->--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="ion ion-clipboard mr-1"></i>--}}
{{--                                    To Do List--}}
{{--                                </h3>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <ul class="pagination pagination-sm">--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">1</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">3</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <ul class="todo-list" data-widget="todo-list">--}}
{{--                                    <li>--}}
{{--                                        <!-- drag handle -->--}}
{{--                                        <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <!-- checkbox -->--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo1" id="todoCheck1">--}}
{{--                                            <label for="todoCheck1"></label>--}}
{{--                                        </div>--}}
{{--                                        <!-- todo text -->--}}
{{--                                        <span class="text">Design a nice theme</span>--}}
{{--                                        <!-- Emphasis label -->--}}
{{--                                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>--}}
{{--                                        <!-- General tools such as edit or delete-->--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>--}}
{{--                                            <label for="todoCheck2"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Make the theme responsive</span>--}}
{{--                                        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo3" id="todoCheck3">--}}
{{--                                            <label for="todoCheck3"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo4" id="todoCheck4">--}}
{{--                                            <label for="todoCheck4"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo5" id="todoCheck5">--}}
{{--                                            <label for="todoCheck5"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Check your messages and notifications</span>--}}
{{--                                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo6" id="todoCheck6">--}}
{{--                                            <label for="todoCheck6"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer clearfix">--}}
{{--                                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                    </section>--}}
{{--                    <!-- /.Left col -->--}}
{{--                    <!-- right col (We are only adding the ID to make the widgets sortable)-->--}}
{{--                    <section class="col-lg-5 connectedSortable">--}}

{{--                        <!-- Map card -->--}}
{{--                        <div class="card bg-gradient-primary">--}}
{{--                            <div class="card-header border-0">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="fas fa-map-marker-alt mr-1"></i>--}}
{{--                                    Visitors--}}
{{--                                </h3>--}}
{{--                                <!-- card tools -->--}}
{{--                                <div class="card-tools">--}}
{{--                                    <button type="button"--}}
{{--                                            class="btn btn-primary btn-sm daterange"--}}
{{--                                            data-toggle="tooltip"--}}
{{--                                            title="Date range">--}}
{{--                                        <i class="far fa-calendar-alt"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button"--}}
{{--                                            class="btn btn-primary btn-sm"--}}
{{--                                            data-card-widget="collapse"--}}
{{--                                            data-toggle="tooltip"--}}
{{--                                            title="Collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <!-- /.card-tools -->--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div id="world-map" style="height: 250px; width: 100%;"></div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body-->--}}
{{--                            <div class="card-footer bg-transparent">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <div id="sparkline-1"></div>--}}
{{--                                        <div class="text-white">Visitors</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <div id="sparkline-2"></div>--}}
{{--                                        <div class="text-white">Online</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <div id="sparkline-3"></div>--}}
{{--                                        <div class="text-white">Sales</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                </div>--}}
{{--                                <!-- /.row -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}

{{--                        <!-- solid sales graph -->--}}
{{--                        <div class="card bg-gradient-info">--}}
{{--                            <div class="card-header border-0">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="fas fa-th mr-1"></i>--}}
{{--                                    Sales Graph--}}
{{--                                </h3>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">--}}
{{--                                        <i class="fas fa-times"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <canvas class="chart" id="line-chart" style="height: 250px;"></canvas>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer bg-transparent">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"--}}
{{--                                               data-fgColor="#39CCCC">--}}

{{--                                        <div class="text-white">Mail-Orders</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"--}}
{{--                                               data-fgColor="#39CCCC">--}}

{{--                                        <div class="text-white">Online</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"--}}
{{--                                               data-fgColor="#39CCCC">--}}

{{--                                        <div class="text-white">In-Store</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                </div>--}}
{{--                                <!-- /.row -->--}}
{{--                            </div>--}}
{{--                            <!-- /.card-footer -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}

{{--                        <!-- Calendar -->--}}
{{--                        <div class="card bg-gradient-success">--}}
{{--                            <div class="card-header border-0">--}}

{{--                                <h3 class="card-title">--}}
{{--                                    <i class="far fa-calendar-alt"></i>--}}
{{--                                    Calendar--}}
{{--                                </h3>--}}
{{--                                <!-- tools card -->--}}
{{--                                <div class="card-tools">--}}
{{--                                    <!-- button with a dropdown -->--}}
{{--                                    <div class="btn-group">--}}
{{--                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">--}}
{{--                                            <i class="fas fa-bars"></i></button>--}}
{{--                                        <div class="dropdown-menu float-right" role="menu">--}}
{{--                                            <a href="#" class="dropdown-item">Add new event</a>--}}
{{--                                            <a href="#" class="dropdown-item">Clear events</a>--}}
{{--                                            <div class="dropdown-divider"></div>--}}
{{--                                            <a href="#" class="dropdown-item">View calendar</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">--}}
{{--                                        <i class="fas fa-times"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <!-- /. tools -->--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body pt-0">--}}
{{--                                <!--The calendar -->--}}
{{--                                <div id="calendar" style="width: 100%"></div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                    </section>--}}
{{--                    <!-- right col -->--}}
{{--                </div>--}}
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
