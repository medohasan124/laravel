



<form action='{{url('admin/checklogin')}}' method='post'>

    @csrf

    <lable>email</lable>
    <input type="text" name="email" >

     <lable>password</lable>
    <input type="password" name="password" >

    {{--  <lable>email</lable> --}}
    {{-- <input type="text" name="email" value='{{old('email')}}'>

     <lable>fullName</lable>
    <input type="text" name="fullName" value='{{old('fullName')}}'> --}}

    <input type="submit" value='save'>
    <p><a href='{{url('admin/forgetPassword')}}'>foget password</a></p>
    
</form>