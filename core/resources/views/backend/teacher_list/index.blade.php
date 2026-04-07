@extends('backend.app')

@section('content')
<div class="container py-4">

    {{-- Header --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-2">
        <h3 class="fw-bold mb-0">
            Teacher List ({{ $teachers->count() }})
        </h3>

        <a href="{{ url('admin/teacher_list/create') }}" class="btn btn-success">
            + Add New Teacher
        </a>
    </div>

    {{-- Search --}}
    <div class="mb-3">
        <input type="text" id="teacherSearch" class="form-control" placeholder="Search by Name, Phone, Status...">
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">

            <div class="table-responsive" style="max-height:500px; overflow-y:auto;">
                <table class="table table-bordered table-hover align-middle text-center mb-0" id="teacherTable">

                    <thead class="table-dark position-sticky top-0">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>View / Edit</th>
                            <th width="180">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $ser = 1; @endphp
                        @foreach($teachers as $teacher)
                            @php
                                $selectedClasses = json_decode($teacher->preferred_class ?? '[]', true);
                                $selectedSubjects = json_decode($teacher->preferred_subject ?? '[]', true);
                            @endphp

                            <tr>
                                <td>{{ $ser++ }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->number }}</td>

                                <td>
                                    @if($teacher->status == 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($teacher->status == 'rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>

                                <td>
                                    <button class="btn btn-sm btn-info"
                                        data-bs-toggle="modal"
                                        data-bs-target="#teacherModal{{ $teacher->id }}">
                                        View / Edit
                                    </button>

                                    <form id="deleteForm{{ $teacher->id }}" action="{{ route('teacher.delete',$teacher->id) }}" method="POST" style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $teacher->id }}">
                                        Delete
                                    </button>
                                </td>

                                <td>
                                    @if($teacher->status == 'pending')
                                        <button class="btn btn-sm btn-primary approve-btn" data-id="{{ $teacher->id }}">
                                            Approve
                                        </button>

                                        <button class="btn btn-sm btn-warning reject-btn" data-id="{{ $teacher->id }}">
                                            Reject
                                        </button>
                                    @endif
                                </td>
                            </tr>

                            {{-- =========================
                            TEACHER VIEW + EDIT MODAL
                            ========================= --}}
                            <div class="modal fade" id="teacherModal{{ $teacher->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                    <form action="{{ route('teacher.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Teacher Profile</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row g-3">

                                                    {{-- Left: Image --}}
                                                    <div class="col-md-3 text-center">
                                                        @if($teacher->image)
                                                            <img src="{{ config('app.storage_url').$teacher->image }}" class="img-fluid rounded mb-2">
                                                        @endif
                                                        <input type="file" name="image" class="form-control">
                                                    </div>

                                                    {{-- Right: Info --}}
                                                    <div class="col-md-9">
                                                        <div class="row g-3">

                                                            {{-- PERSONAL INFORMATION --}}
                                                            <h5 class="mb-2">Personal Information</h5>
                                                            <div class="col-md-6">
                                                                <label>Name</label>
                                                                <input type="text" name="name" value="{{ $teacher->name }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Gender</label>
                                                                <input type="text" name="gender" value="{{ $teacher->gender }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Father's Name</label>
                                                                <input type="text" name="father_name" value="{{ $teacher->father_name }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Mother's Name</label>
                                                                <input type="text" name="mother_name" value="{{ $teacher->mother_name }}" class="form-control">
                                                            </div>

                                                           <div class="col-md-6">
                                                                <label>Date of Birth</label>
                                                                <input type="date" name="dob" value="{{ $teacher->dob ? \Carbon\Carbon::parse($teacher->dob)->format('Y-m-d') : '' }}" class="form-control">
                                                            </div>

                                                            {{-- CONTACT INFORMATION --}}
                                                            <h5 class="mt-3 mb-2">Contact Information</h5>
                                                            <div class="col-md-6">
                                                                <label>Phone</label>
                                                                <input type="text" name="number" value="{{ $teacher->number }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                                <input type="email" name="email" value="{{ $teacher->email }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Division</label>
                                                                <input type="text" name="division" value="{{ $teacher->division }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>District</label>
                                                                <input type="text" name="district" value="{{ $teacher->district }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Current Address</label>
                                                                <input type="text" name="current_address" value="{{ $teacher->current_address }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Permanent Address</label>
                                                                <input type="text" name="permanent_address" value="{{ $teacher->permanent_address }}" class="form-control">
                                                            </div>

                                                            {{-- EDUCATION --}}
                                                            <h5 class="mt-3 mb-2">Education</h5>
                                                            <div class="col-md-4">
                                                                <label>SSC Board</label>
                                                                <input type="text" name="ssc_board" value="{{ $teacher->ssc_board }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>SSC Result</label>
                                                                <input type="text" name="ssc_result" value="{{ $teacher->ssc_result }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>SSC Year</label>
                                                                <input type="text" name="ssc_year" value="{{ $teacher->ssc_year }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>HSC Result</label>
                                                                <input type="text" name="hsc_result" value="{{ $teacher->hsc_result }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Bachelor Degree</label>
                                                                <input type="text" name="bachelor_degree" value="{{ $teacher->bachelor_degree }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Master Degree</label>
                                                                <input type="text" name="master_degree" value="{{ $teacher->master_degree }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Subject Major</label>
                                                                <input type="text" name="subject_major" value="{{ $teacher->subject_major }}" class="form-control">
                                                            </div>

                                                            {{-- TEACHING INFORMATION --}}
                                                            <h5 class="mt-3 mb-2">Teaching Information</h5>
                                                            <div class="col-md-6">
                                                                <label>Experience (Years)</label>
                                                                <input type="number" name="experience" value="{{ $teacher->experience }}" class="form-control">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Previous School</label>
                                                                <input type="text" name="previous_school" value="{{ $teacher->previous_school }}" class="form-control">
                                                            </div>

                                                            {{-- PREFERRED CLASS --}}
                                                            <div class="col-md-6">
                                                                <label class="form-label">Preferred Class</label>
                                                                @php
                                                                    $selectedClasses = old('preferred_class', $selectedClasses ?? []);
                                                                @endphp
                                                                <select class="form-select" name="preferred_class[]" multiple>
                                                                    @foreach ($preferred_classes as $preferred_class)
                                                                        <option value="{{ $preferred_class->id }}"
                                                                            {{ in_array($preferred_class->id, $selectedClasses) ? 'selected' : '' }}>
                                                                            {{ $preferred_class->preferred_class_name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <small class="text-muted">Hold Ctrl (Windows) or Cmd (Mac) to select multiple classes</small>
                                                            </div>

                                                            {{-- PREFERRED SUBJECT --}}
                                                            <div class="col-md-6">
                                                                <label class="form-label">Preferred Subject</label>
                                                                @php
                                                                    $selectedSubjects = old('preferred_subject', $selectedSubjects ?? []);
                                                                @endphp
                                                                <select class="form-select" name="preferred_subject[]" multiple>
                                                                    @foreach ($preferred_subjects as $preferred_subject)
                                                                        <option value="{{ $preferred_subject->id }}"
                                                                            {{ in_array($preferred_subject->id, $selectedSubjects) ? 'selected' : '' }}>
                                                                            {{ $preferred_subject->preferred_subject_name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <small class="text-muted">Hold Ctrl (Windows) or Cmd (Mac) to select multiple subjects</small>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Expected Salary</label>
                                                                <input type="number" name="salary" value="{{ $teacher->salary }}" class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-success">
                                                    Update Teacher
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function(){

    // Delete Button
    document.querySelectorAll('.delete-btn').forEach(btn=>{
        btn.addEventListener('click', function(){
            let id = this.dataset.id;
            Swal.fire({
                title:'Delete Teacher?',
                icon:'warning',
                showCancelButton:true,
                confirmButtonText:'Yes Delete'
            }).then((result)=>{
                if(result.isConfirmed){
                    document.getElementById('deleteForm'+id).submit();
                }
            });
        });
    });

    // Approve Button
    document.querySelectorAll('.approve-btn').forEach(btn=>{
        btn.addEventListener('click',function(){
            let id = this.dataset.id;
            window.location.href="/admin/teacher_list/approve/"+id;
        });
    });

    // Reject Button
    document.querySelectorAll('.reject-btn').forEach(btn=>{
        btn.addEventListener('click',function(){
            let id = this.dataset.id;
            window.location.href="/admin/teacher_list/reject/"+id;
        });
    });

    // Search
    const searchInput=document.getElementById('teacherSearch');
    const rows=document.querySelectorAll('#teacherTable tbody tr');
    searchInput.addEventListener('keyup',function(){
        let q=this.value.toLowerCase();
        rows.forEach(row=>{
            row.style.display=row.innerText.toLowerCase().includes(q)?'':'none';
        });
    });

});
</script>

@endsection