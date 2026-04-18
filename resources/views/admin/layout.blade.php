<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    margin:0;
    background:#f5f6fa;
    font-family:Arial, Helvetica, sans-serif;
}

/* SIDEBAR */
.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    left:0;
    top:0;
    background:#111827;
    color:white;
    padding-top:20px;
}

.sidebar h3{
    text-align:center;
    margin-bottom:30px;
    font-size:24px;
}

.sidebar a{
    display:block;
    color:#ddd;
    padding:14px 20px;
    text-decoration:none;
    transition:0.3s;
}

.sidebar a:hover{
    background:#1f2937;
    color:white;
}

/* HEADER */
.header{
    margin-left:250px;
    height:70px;
    background:white;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 30px;
}

.header h4{
    margin:0;
}

/* CONTENT */
.main-content{
    margin-left:250px;
    padding:30px;
    min-height:calc(100vh - 130px);
}

/* FOOTER */
.footer{
    margin-left:250px;
    background:#fff;
    padding:15px 30px;
    border-top:1px solid #ddd;
}

</style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <h3>Admin Panel</h3>

    <a href="/admin/dashboard">Dashboard</a>

    <a href="/admin/visas">Manage Visas</a>

    <a href="/admin/logout">Logout</a>

</div>

<!-- HEADER -->
<div class="header">

    <h4>Welcome Admin</h4>

    <span>{{ date('d M Y') }}</span>

</div>

<!-- CONTENT -->
<div class="main-content">

    @yield('content')

</div>

<!-- FOOTER -->
<div class="footer">

    © 2026 Admin Panel | Developed by Fahim

</div>

</body>
</html>