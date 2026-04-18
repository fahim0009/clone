<!doctype html><html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'></head><body class='bg-light'>
<div class='container mt-5' style='max-width:420px'>
<div class='card p-4'><h3 class='mb-3'>Admin Login</h3>
<form method='POST' action='/admin/login'>@csrf
<input class='form-control mb-2' name='username' placeholder='Username'>
<input class='form-control mb-3' type='password' name='password' placeholder='Password'>
<button class='btn btn-primary w-100'>Login</button>
</form></div></div></body></html>