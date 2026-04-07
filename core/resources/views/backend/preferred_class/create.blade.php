@extends('backend.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ url('/admin/preferred_class') }}" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Back to Preferred Classes
        </a>
    </div>

    <!-- Card Wrapper -->
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Add Preferred Class</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('preferred_class.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="preferred_class_name" class="form-label">Preferred Class Name</label>
                    <input type="text" id="preferred_class_name" name="preferred_class_name" placeholder="Enter preferred class" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Save
                </button>
            </form>
        </div>
    </div>

</div>

@endsection