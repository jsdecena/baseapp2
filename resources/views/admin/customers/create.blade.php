@extends('admin.template.main')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Customer details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.customer.store'), 'role' => 'form'])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>Name</label>
                          <input name="name" type="text" class="form-control" placeholder="Your name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <div class="input-group">
                              <span class="input-group-addon">@</span>
                              <input name="email" type="email" class="form-control" placeholder="Your email" value="{{old('email')}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input name="password" type="Password" class="form-control" placeholder="******">
                        </div>
                        <a href="{{route('admin.customer.index')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-sml btn-primary">Create</button>
                    {!!Form::close()!!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->                
             </div>
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div>
@endsection