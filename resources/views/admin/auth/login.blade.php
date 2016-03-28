<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BaseApp 2 | Log in</title>
    <!-- bower::css-->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <!-- endbower::css-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{url('/')}}"><b>Base</b>APP 2</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        
        @include('messages')

        <form action="{{url('admin/login')}}" method="post">
            <input type="hidden" name="_token" value="{!!csrf_token()!!}">
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
            <span class="fa fa-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="fa fa-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8"></div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- bower:js-->
    <script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
    <!-- endbower:js-->
  </body>
</html>
