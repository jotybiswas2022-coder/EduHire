@extends('backend.app')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold mb-0">Add New Teacher</h3>
        <a href="{{ url('admin/teacher_list') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">

            <form action="{{ url('admin/teacher_list/store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- PERSONAL INFORMATION -->
                <h5 class="mt-3 mb-3 text-primary">
                    <i class="fa-solid fa-user"></i> ব্যক্তিগত তথ্য
                </h5>

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name"
                               value="{{ old('name') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Father's Name</label>
                        <input type="text" class="form-control" name="father_name"
                               value="{{ old('father_name') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" name="mother_name"
                               value="{{ old('mother_name') }}">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob"
                               value="{{ old('dob') }}">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="">Select</option>
                            <option value="Male" {{ old('gender')=='Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender')=='Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Profile Photo</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                </div>

                <!-- CONTACT INFORMATION -->
                <h5 class="mt-5 mb-3 text-primary">
                    <i class="fa-solid fa-address-book"></i> যোগাযোগ তথ্য
                </h5>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" name="number"
                               value="{{ old('number') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email"
                               value="{{ old('email') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Division</label>
                        <select class="form-select" name="division">
                            <option value="">Select Division</option>
                            @foreach(['Dhaka','Chattogram','Khulna','Rajshahi','Barishal','Sylhet','Rangpur','Mymensingh'] as $division)
                                <option value="{{ $division }}" {{ old('division')==$division ? 'selected' : '' }}>
                                    {{ $division }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">District</label>
                        <input type="text" class="form-control" name="district"
                               value="{{ old('district') }}">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Current Address</label>
                        <input type="text" class="form-control" name="current_address"
                               value="{{ old('current_address') }}">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Permanent Address</label>
                        <input type="text" class="form-control" name="permanent_address"
                               value="{{ old('permanent_address') }}">
                    </div>
                </div>

                <!-- EDUCATIONAL QUALIFICATION -->
                <h5 class="mt-5 mb-3 text-primary">
                    <i class="fa-solid fa-graduation-cap"></i> শিক্ষাগত যোগ্যতা
                </h5>

                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">SSC Board</label>
                        <input type="text" class="form-control" name="ssc_board"
                               value="{{ old('ssc_board') }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">SSC Result / GPA</label>
                        <input type="text" class="form-control" name="ssc_result"
                               value="{{ old('ssc_result') }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">SSC Passing Year</label>
                        <input type="text" class="form-control" name="ssc_year"
                               value="{{ old('ssc_year') }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">HSC Result / GPA</label>
                        <input type="text" class="form-control" name="hsc_result"
                               value="{{ old('hsc_result') }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Bachelor Degree</label>
                        <input type="text" class="form-control" name="bachelor_degree"
                               value="{{ old('bachelor_degree') }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Master Degree</label>
                        <input type="text" class="form-control" name="master_degree"
                               value="{{ old('master_degree') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Subject / Major</label>
                        <input type="text" class="form-control" name="subject_major"
                               value="{{ old('subject_major') }}">
                    </div>
                </div>

                <!-- TEACHING INFORMATION -->
                <h5 class="mt-5 mb-3 text-primary">
                    <i class="fa-solid fa-chalkboard-user"></i> শিক্ষকতা সংক্রান্ত তথ্য
                </h5>

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Preferred Class</label>
                        @php
                            $selectedClasses = old('preferred_class') ?? [];
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

                    <div class="col-md-6">
                        <label class="form-label">Preferred Subject</label>
                        @php
                            $selectedSubjects = old('preferred_subject') ?? [];
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
                        <label class="form-label">Teaching Experience (Years)</label>
                        <input type="number" class="form-control" name="experience"
                               value="{{ old('experience') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Previous Institution</label>
                        <input type="text" class="form-control" name="previous_school"
                               value="{{ old('previous_school') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Salary (BDT)</label>
                        <input type="number" class="form-control" name="salary"
                               value="{{ old('salary') }}" placeholder="Enter your expected salary">
                    </div>

                </div>

                <!-- SUBMIT BUTTON -->
                <div class="mt-5 text-center">
                    <button class="btn btn-primary px-5 py-2 rounded-pill">
                        <i class="fa-solid fa-floppy-disk"></i> Create Profile
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

{{-- SweetAlert success --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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