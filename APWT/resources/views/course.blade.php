@extends('top.cover')
@include('top.topnav')
<br>
@section('content')
<table class="table table-border">
    
    @foreach($courses as $course)
        <tr>
            <td><a href="{{route('login')}}">{{$course->course_name}}</td>
        </tr>
    @endforeach
</table>
@endsection 