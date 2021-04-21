

@if(session()->get('error'))
<p>{{session()->get('error')}}</p>
@endif

@foreach($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach

<form action='{{url('admin/checkfogetPassword')}}' method='post'>

    @csrf

    <lable>email</lable>
    <input type="text" name="email" >


    <input type="submit" value='save'>
    <p><a href='{{url('admin/login')}}'>login</a></p>
    
</form>