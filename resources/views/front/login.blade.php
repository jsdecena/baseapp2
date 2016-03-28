<form action="{{url('auth/login')}}" method="post">
    <input type="text" name="_token" value="{{csrf_token()}}" />
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Submit</button>
</form>