@extends('admin')
@section('title','Quản lý danh hiệu')
@section('h1','Quản lý danh hiệu')
@section('submenu')
	@include('admin.submenu.submenu-title')
@endsection
@section('content')
	<div class="container table-responsive text-sm-center">
  <h2>Quản lý danh hiệu</h2>
  <table class="table" style="overflow-x:auto;">
    <thead>
      <tr>
        <th style="width: 10p%;">ID</th>
        <th style="width: 30p%;">Title</th>
        <th style="width: 40p%;">Option</th>
      </tr>
    </thead>
    <tbody class='usertable'>
     @foreach($title as $row)
      <tr class="table">
       	<td style="width: 10p%;">{{$row->id}}</td>
        <td style="width: 10p%;">{{$row->title_name}}</td>
        <td style="width: 40p%;"><i class="fa fa-cog" aria-hidden="true"></i>
        <i class="fa fa-user-times" aria-hidden="true"></i></td>
      </tr>
      @endforeach()
    </tbody>
  </table>
</div>	
<div class="container">
								<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
@endsection