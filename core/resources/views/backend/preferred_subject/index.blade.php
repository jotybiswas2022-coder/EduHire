@extends('backend.app')

@section('content')

<div class="container-fluid py-4">

<div class="mb-3 d-flex justify-content-between align-items-center flex-wrap gap-2">

<a href="{{ route('preferred_subject.create') }}" class="btn btn-primary">
<i class="bi bi-plus-circle"></i> Add Preferred Subject
</a>

<input type="text" id="subjectSearch" class="form-control w-auto"
placeholder="Search subject..." style="min-width:250px;">

</div>


<div class="card shadow-sm">

<div class="card-header bg-primary text-white">
<h5 class="mb-0">Preferred Subjects List</h5>
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped align-middle" id="subjectsTable">

<thead class="table-light">
<tr>
<th width="5%">#</th>
<th>Preferred Subjects</th>
<th width="20%">Action</th>
</tr>
</thead>

<tbody>

@foreach($preferredSubjects as $index => $subject)

<tr>

<td>{{ $index+1 }}</td>

<td class="subjectName">
{{ $subject->preferred_subject_name }}
</td>

<td>

<button class="btn btn-sm btn-primary"
data-bs-toggle="modal"
data-bs-target="#editSubject{{ $subject->id }}">

<i class="bi bi-pencil-square"></i> Edit

</button>


<form action="{{ route('preferred_subject.delete',$subject->id) }}"
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
@foreach($preferredSubjects as $subject)

<div class="modal fade" id="editSubject{{ $subject->id }}">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title">
Edit Preferred Subject
</h5>

<button class="btn-close" data-bs-dismiss="modal"></button>

</div>

<form action="{{ route('preferred_subject.update',$subject->id) }}" method="POST">

@csrf

<div class="modal-body">

<label class="form-label">Subject Name</label>

<input type="text"
name="preferred_subject_name"
class="form-control"
value="{{ $subject->preferred_subject_name }}"
required>

</div>

<div class="modal-footer">

<button type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Cancel

</button>

<button class="btn btn-primary">
Update Subject
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


/* SEARCH */

document.getElementById('subjectSearch').addEventListener('keyup',function(){

let value=this.value.toLowerCase();

let rows=document.querySelectorAll("#subjectsTable tbody tr");

rows.forEach(function(row){

let subject=row.querySelector(".subjectName").textContent.toLowerCase();

row.style.display=subject.includes(value)?"":"none";

});

});



/* DELETE SWEET ALERT */

document.querySelectorAll(".deleteForm").forEach(function(form){

form.addEventListener("submit",function(e){

e.preventDefault();

Swal.fire({

title:"Are you sure?",
text:"This subject will be deleted!",
icon:"warning",
showCancelButton:true,
confirmButtonColor:"#d33",
cancelButtonColor:"#3085d6",
confirmButtonText:"Yes, delete it!"

}).then((result)=>{

if(result.isConfirmed){

form.submit();

}

});

});

});


/* SUCCESS MESSAGE */

@if(session('success'))

Swal.fire({

icon:'success',
title:'Success',
text:"{{ session('success') }}",
timer:2000,
showConfirmButton:false

});

@endif


</script>

@endsection