
@if(count($errors) > 0)

    @foreach($errors->all() as $error)

        <p>{{$error}}</p>

    @endforeach

@endif



<form action='{{route('valid')}}' method='post'>

    @csrf

    <lable>username</lable>
    <input type="text" name="username" value='{{old('username')}}'>

     <lable>password</lable>
    <input type="password" name="password" value='{{old('password')}}'>

     <lable>email</lable>
    <input type="text" name="email" value='{{old('email')}}'>

     <lable>fullName</lable>
    <input type="text" name="fullName" value='{{old('fullName')}}'>

    <input type="submit" value='save'>
    
</form>