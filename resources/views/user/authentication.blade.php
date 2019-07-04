<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SiqWare - Web Application by siqware's team</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{asset('admin-ui/material/main_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('admin-ui/material/main_assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('admin-ui/material/main_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script
        src="{{asset('admin-ui/material/main_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

    <script src="{{asset('admin-ui/material/assets/js/app.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/demo_pages/form_select2.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/demo_pages/login.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">
<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Form -->
            <div class="card">
                <ul class="nav nav-tabs nav-justified alpha-grey mb-0">
                    <li class="nav-item"><a href="#login-tab1" class="nav-link border-y-0 border-left-0 active"
                                            data-toggle="tab"><h6 class="my-1">Sign in</h6></a></li>
                    <li class="nav-item"><a href="#login-tab2" class="nav-link border-y-0 border-right-0"
                                            data-toggle="tab"><h6 class="my-1">Register</h6></a></li>
                </ul>

                <div class="tab-content card-body">
                    <div class="tab-pane fade show active" id="login-tab1">
                        <!-- Login card -->
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center mb-3">
                                <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Login to your account</h5>
                                <span class="d-block text-muted">Your credentials</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       placeholder="User Email">
                                <div class="form-control-feedback">
                                    <i class="icon-mail5 text-muted"></i>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password" placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled"
                                               {{ old('remember') ? 'checked' : '' }} data-fouc>
                                        Remember
                                    </label>
                                </div>

                                <a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sign in <i
                                        class="icon-circle-right2 ml-2"></i></button>
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">or sign in with</span>
                            </div>

                            <div class="form-group text-center">
                                <button type="button"
                                        class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2">
                                    <i class="icon-facebook"></i></button>
                                <button type="button"
                                        class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2">
                                    <i class="icon-dribbble3"></i></button>
                                <button type="button"
                                        class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2">
                                    <i class="icon-github"></i></button>
                                <button type="button"
                                        class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2">
                                    <i class="icon-twitter"></i></button>
                            </div>

                            <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a
                                    href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                        </form>
                        <!-- /login card -->
                    </div>

                    <div class="tab-pane fade" id="login-tab2">
                        <form action="{{route('authentication.store')}}" method="post" class="flex-fill">
                            @csrf
                            <div class="text-center mb-3">
                                <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Create account</h5>
                                <span class="d-block text-muted">All fields are required</span>
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Your information</span>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <select data-placeholder="Gender" name="gender" class="form-control @error('gender') is-invalid @enderror select"
                                                required data-fouc>
                                            <option></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        <div class="form-control-feedback">
                                            <i class="fas fa-transgender text-muted"></i>
                                        </div>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                <div class="form-control-feedback">
                                    <i class="icon-mail5 text-muted"></i>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="password" class="form-control" name="password" placeholder="Your password" required>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Your Company information</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" placeholder="Company's name"
                                       required>
                                <div class="form-control-feedback">
                                    <i class="icon-home text-muted"></i>
                                </div>
                                @error('company')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <select required data-placeholder="Organization Type" name="company_type[]"
                                        class="form-control select select-multiple-tokenization" multiple="multiple"
                                        data-fouc>
                                    <option></option>
                                    <option value="CO">Organization</option>
                                    <option value="ID">Shopping</option>
                                    <option value="WY">Institute</option>
                                </select>
                                <div class="form-control-feedback">
                                    <i class="icon-home2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Company's Location"
                                       required>
                                <div class="form-control-feedback">
                                    <i class="icon-map text-muted"></i>
                                </div>
                                @error('location')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="accept_term" class="form-input-styled" data-fouc
                                               required>
                                        Accept <a href="#">terms of service</a>
                                    </label>
                                    @error('accept_term')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i
                                        class="icon-plus3"></i></b> Setup
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /form -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
