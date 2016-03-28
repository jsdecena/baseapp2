@extends('admin.template.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    @include('messages')
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Employees</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            @if($users)
                                <table class="table">
                                    <tr>
                                      <th class="col-md-1">#</th>
                                      <th class="col-md-2">Name</th>
                                      <th class="col-md-2">Email</th>
                                      <th class="col-md-1">Created</th>
                                      <th class="col-md-2">Actions</th>
                                    </tr>
                                    @foreach($users as $user)
                                        <tr>
                                          <td>{{$user->id}}</td>
                                          <td><a href="{{route('admin.employee.edit', $user->id)}}">{{$user->name}}</a></td>
                                          <td>{{$user->email}}</td>
                                          <td>{{$user->created_at->format('d M Y')}}</td>
                                          <td>
                                                {!!Form::open(['url' => route('admin.employee.destroy', $user->id), 'method' => 'delete' ])!!}
                                                    <a href="{{route('admin.employee.edit', $user->id)}}" class="btn btn-sml btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                                    <button type="submit" class="btn btn-sml btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-timex"></i> Delete</button>
                                                {!!Form::close()!!}
                                          </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <p class="alert alert-warning">No users to show</p>
                            @endif
                        </div><!-- /.box-body -->
                        @include('admin.template.pagination', ['pages' => $users])                        
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div>
@endsection