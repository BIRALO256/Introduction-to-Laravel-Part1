<h1>hello from the form page</h1>
<h2>User Form</h1>
<!-- {{$errors}} -->
    <!-- @if($errors->any())
        @foreach($errors->all() as $jovic)
        <p>{{$jovic}}</p>
        @endforeach
    @endif    -->

<form action="FORM" methode ="POST">
 @csrf
<input type="text" name = "username" placeholder="enter your user name">
<br>
<span style="color:red">@error('username'){{$message}}@enderror</span>
<br>
<input type="number" name ="age" placeholder="enter your age">
<br>
<span style="color:red">@error('age'){{$message}}@enderror</span>
<br>
<input type ="Email" name= "email" placeholder ="enter your email">
<br>
<span style="color:red">@error('email'){{$message}}@enderror</span>
<br>
<button type="submit"> login </button>

</form>