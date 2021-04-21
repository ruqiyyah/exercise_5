@extends('master')
@section('title', 'List')
@section('content')
 <h1>E-books list</h1>
 <ul>
 @foreach($list as $list)
 <li>{{ $list }} </li>
 @endforeach
 </ul>
 
 
 
 <style>
table {
  width: 100%;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: pink;
  color: black;
    }
   
</style>
 <table>
 <tr>
<th>Title</th>
<th>ISBN</th>
<th>Category</th>
<th>Number of page</th>
</tr>

<tr>
<th>The fault in our stars</th>
<th>9781455869749</th>
<th>Love & Romance</th>
<th>313</th>
</tr>

<tr>
<th>Five feet apart</th>
<th>9781534437357</th>
<th>Romance</th>
<th>288</th>
</tr>
 </table>
@endsection