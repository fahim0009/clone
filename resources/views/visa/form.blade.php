<!doctype html><html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'></head><body class='p-4'><div class='container'>
<form method='POST' action='{{ isset($visa)?url('/admin/visas/'.$visa->id):url('/admin/visas') }}'>
@csrf @if(isset($visa)) @method('PUT') @endif
<input name='visa_no' class='form-control mb-2' placeholder='Visa No' value='{{ $visa->visa_no ?? '' }}'>
<input name='first_name' class='form-control mb-2' placeholder='First Name' value='{{ $visa->first_name ?? '' }}'>
<input name='last_name' class='form-control mb-2' placeholder='Last Name' value='{{ $visa->last_name ?? '' }}'>
<input name='passport_number' class='form-control mb-2' placeholder='Passport Number' value='{{ $visa->passport_number ?? '' }}'>
<input name='religion' class='form-control mb-2' placeholder='Religion' value='{{ $visa->religion ?? '' }}'>
<button class='btn btn-success'>Save</button>
</form></div></body></html>