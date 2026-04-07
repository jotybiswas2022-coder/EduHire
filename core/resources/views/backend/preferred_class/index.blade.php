@extends('backend.app')

@section('content')

<div class="container-fluid py-4">

<div class="mb-3 d-flex justify-content-between align-items-center flex-wrap gap-2">

<a href="{{ route('preferred_class.create') }}" class="btn btn-primary">
<i class="bi bi-plus-circle"></i> Add Preferred Class
</a>

<input type="text" id="classSearch" class="form-control w-auto"
placeholder="Search class..." style="min-width:250px;">

</div>

<div class="card shadow-sm">

<div class="card-header bg-primary text-white">
<h5 class="mb-0">Preferred Classes List</h5>
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped align-middle" id="classTable">

<thead class="table-light">
<tr>
<th width="5%">#</th>
<th>Preferred Classes</th>
<th width="20%">Action</th>
</tr>
</thead>

<tbody>

@foreach($preferredClasses as $index => $class)

<tr>

<td>{{ $index+1 }}</td>

<td class="className">
{{ $class->preferred_class_name }}
</td>

<td>

<button class="btn btn-sm btn-primary"
data-bs-toggle="modal"
data-bs-target="#editModal{{ $class->id }}">

<i class="bi bi-pencil-square"></i> Edit

</button>

<form action="{{ route('preferred_class.delete',$class->id) }}"
method="POST"
class="d-inline deleteForm">

@csrf
@method('DELETE')

<button type="submit" class="btn btn-sm btn-danger">
<i class="bi bi-trash"></i> Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

</div>


{{-- EDIT MODALS --}}
@foreach($preferredClasses as $class)

<div class="modal fade" id="editModal{{ $class->id }}">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title">Edit Preferred Class</h5>
<button class="btn-close" data-bs-dismiss="modal"></button>
</div>

<form action="{{ route('preferred_class.update',$class->id) }}" method="POST">

@csrf

<div class="modal-body">

<label class="form-label">Class Name</label>

<input type="text"
name="preferred_class_name"
class="form-control"
value="{{ $class->preferred_class_name }}"
required>

</div>

<div class="modal-footer">

<button type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Cancel

</button>

<button class="btn btn-primary">
Update Class
</button>

</div>

</form>

</div>

</div>

</div>

@endforeach


{{-- SweetAlert CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

document.getElementById("classSearch").addEventListener("keyup",function(){

let value=this.value.toLowerCase();
let rows=document.querySelectorAll("#classTable tbody tr");

rows.forEach(function(row){

let name=row.querySelector(".className").textContent.toLowerCase();

row.style.display=name.includes(value)?"":"none";

});

});



/* DELETE SWEET ALERT */

document.querySelectorAll(".deleteForm").forEach(function(form){

form.addEventListener("submit",function(e){

e.preventDefault();

Swal.fire({

title: "Are you sure?",
text: "This class will be deleted!",
icon: "warning",
showCancelButton: true,
confirmButtonColor: "#d33",
cancelButtonColor: "#3085d6",
confirmButtonText: "Yes, delete it!"

}).then((result)=>{

if(result.isConfirmed){

form.submit();

}

});

});

});



/* SUCCESS ALERT */

@if(session('success'))

Swal.fire({

icon: 'success',
title: 'Success',
text: "{{ session('success') }}",
timer: 2000,
showConfirmButton: false

});

@endif


</script>

@endsection