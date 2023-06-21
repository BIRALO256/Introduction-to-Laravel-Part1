<x-header/>

<h1>this blade is all about blades and how hey are used </h1>
<a href="form">click here to continue to Form tempate</a>
@include ('iiner')
@foreach($data as $x)
<h1>{{$x}}</h1>
@endforeach
