@extends('backend.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ url('/admin/preferred_subject') }}" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Back to Preferred Subjects
        </a>
    </div>

    <!-- Card Wrapper -->
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Add Preferred Subject</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('preferred_subject.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="preferred_subject_name" class="form-label">Preferred Subject Name</label>
                    <input type="text" id="preferred_subject_name" name="preferred_subject_name" placeholder="Enter preferred subject name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Save
                </button>
            </form>
        </div>
    </div>

</div>

@endsection