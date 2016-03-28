<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        @if($customer)
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">{{$customer->name}} </a></li>
                <li><a href="#">|</a></li>
                <li><a href="{{url('logout')}}">Sign Out</a></li>
            </ul>
        @else    
            {!!Form::open(['url' => url('login'), 'class' => 'navbar-form navbar-right'])!!}
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            {!!Form::close()!!}
      @endif
    </div><!--/.navbar-collapse -->
  </div>
</nav>