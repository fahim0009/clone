@extends('admin.layout')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Manage Visas</h2>

        <button class="btn btn-primary" onclick="toggleForm()">
            + Add New Visa
        </button>
    </div>

    {{-- ADD FORM --}}
    <div class="card shadow-sm mb-4" id="visaFormBox" style="display:none;">
        <div class="card-header bg-primary text-white">
            Add New Visa
        </div>

        <div class="card-body">

            <form method="POST" action="/admin/visas" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label>Visa No</label>
                        <input type="text" name="visa_no" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Passport Number</label>
                        <input type="text" name="passport_number" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Religion</label>
                        <input type="text" name="religion" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Passport Expiry</label>
                        <input type="date" name="passport_expiry_date" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Date of Issue</label>
                        <input type="date" name="date_of_issue" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Valid Until</label>
                        <input type="date" name="valid_until" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                </div>

                <button class="btn btn-success">
                    Save Visa
                </button>

            </form>

        </div>
    </div>

    {{-- TABLE --}}
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            Visa List
        </div>

        <div class="card-body p-0">

            <table class="table table-bordered table-striped mb-0">
                <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Visa No</th>
                    <th>Name</th>
                    <th>Passport</th>
                    <th>Issue Date</th>
                    <th>Valid Until</th>
                    <th>Status</th>
                    <th width="170">Action</th>
                </tr>
                </thead>

                <tbody>

                @forelse($visas as $visa)

                    <tr>
                        <td>{{ $visa->id }}</td>
                        <td>{{ $visa->visa_no }}</td>
                        <td>{{ $visa->first_name }} {{ $visa->last_name }}</td>
                        <td>{{ $visa->passport_number }}</td>
                        <td>{{ $visa->date_of_issue }}</td>
                        <td>{{ $visa->valid_until }}</td>

                        <td>
                            @if($visa->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>

                        <td>
                            <a href="/admin/visas/{{ $visa->id }}/edit"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="/admin/visas/{{ $visa->id }}"
                                  method="POST"
                                  style="display:inline-block">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this visa?')">
                                    Delete
                                </button>
                            </form>
                   <a target="_blank"
                        href="{{ url('/Home/GetPrintFromQRCode?AppNo='.$visa->visa_no.'&Passport='.$visa->passport_number.'&NatIso=BGD&nonce='.md5(rand()).'&hash='.hash('sha256',$visa->visa_no)) }}">
                        View
                        </a>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="8" class="text-center text-danger fw-bold py-4">
                            No Records Found
                        </td>
                    </tr>

                @endforelse

                </tbody>
            </table>

        </div>
    </div>

</div>

<script>
function toggleForm() {
    let box = document.getElementById("visaFormBox");

    if (box.style.display === "none" || box.style.display === "") {
        box.style.display = "block";
    } else {
        box.style.display = "none";
    }
}
</script>

@endsection