<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <!-- Bootstrap core CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Login</title>
    </head>
    <body>
        <form class="form-signin" action="{{url('proses_login')}}" method="POST" id="logForm">
            <h1 class="h3 mb-3 font-weight-normal text-center">Welcome</h1>
            {{ csrf_field() }}
            <div class="form-group">
                @error('login_gagal')
                    {{-- <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                <label class="small mb-1" for="inputEmailAddress">Username</label>
                <input
                    class="form-control"
                    id="inputEmailAddress"
                    name="username"
                    type="text"
                    placeholder="Masukkan Username"/>
                @if($errors->has('username'))
                <span class="error">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input
                    class="form-control"
                    id="inputPassword"
                    type="password"
                    name="password"
                    placeholder="Masukkan Password"/>
                @if($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                </div>
            </div>
            <div
                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                {{-- <a class="small" href="#">Forgot Password?</a> --}}
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
    </body>
</html>