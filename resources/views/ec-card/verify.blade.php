<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>EC Card Verification</title>

<style>

body{
    margin:0;
    background:#efefef;
    font-family:Arial, Helvetica, sans-serif;
}

.main-card{
    width:230px;
    margin:10px auto;
    background:#f8f8f8;
    border:1px solid #e5e5e5;
}

.top-logo img{
    width:100%;
    display:block;
}

.section{
    padding:10px 10px 14px;
    background:#f7f7f7;
    border-bottom:8px solid #efefef;
}

.profile{
    text-align:center;
}

.profile img{
    width:75px;
    height:90px;
    object-fit:cover;
    margin-top:8px;
}

.profile h2{
    margin:8px 0 2px;
    font-size:13px;
    color:#303030;
    font-weight:bold;
}

.ecno{
    font-size:11px;
    color:#555;
    margin-bottom:3px;
}

.ecdate{
    font-size:10px;
    color:#666;
    margin-bottom:12px;
}

table{
    width:100%;
    border-collapse:collapse;
    font-size:10px;
    background:#fff;
}

table td{
    border:1px solid #dcdcdc;
    padding:4px 5px;
    color:#444;
}

table td:last-child{
    font-weight:bold;
    color:#333;
}

.title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:10px;
}

.title h3{
    margin:0;
    color:#008000;
    font-size:11px;
}

.title img{
    width:26px;
}

.double-logo{
    display:flex;
    gap:4px;
}

</style>

</head>
<body>

<div class="main-card">

<!-- TOP -->
<div class="top-logo">
<img src="{{ asset('uploads/ec-card/header.jpg') }}">
</div>

<!-- PROFILE -->
<div class="section">

<div class="profile">

<img src="{{ asset('uploads/ec-card/profile.jpg') }}">

<h2>IMRAN HOSSAIN</h2>

<div class="ecno">
EC No: SA-I-2026-6128254
</div>

<div class="ecdate">
EC Date: 16/Apr/2026
</div>

</div>

<table>

<tr>
<td>Birth Date</td>
<td>2001-02-28</td>
</tr>

<tr>
<td>Blood Group</td>
<td>O+</td>
</tr>

<tr>
<td>Passport No</td>
<td>A03573737</td>
</tr>

<tr>
<td>Passport Issue Date</td>
<td>2022-04-24</td>
</tr>

<tr>
<td>Passport Expire Date</td>
<td>2032-04-23</td>
</tr>

<tr>
<td>Visa No</td>
<td>6165176245</td>
</tr>

<tr>
<td>Visa Issue Date</td>
<td>2026-04-06</td>
</tr>

<tr>
<td>Visa Expire Date</td>
<td>2026-07-05</td>
</tr>

<tr>
<td>Referral No</td>
<td>130601832</td>
</tr>

<tr>
<td>Employer</td>
<td>Saudi Employer Company</td>
</tr>

<tr>
<td>Country</td>
<td>Saudi Arabia</td>
</tr>

</table>

</div>

<!-- Recruiting Agency -->
<div class="section">

<div class="title">

<h3>Recruiting Agency</h3>

<div class="double-logo">
<img src="{{ asset('uploads/ec-card/gov.png') }}">
<img src="{{ asset('uploads/ec-card/oep.png') }}">
</div>

</div>

<table>

<tr>
<td>Name</td>
<td>AL MABRUK OVERSEAS</td>
</tr>

<tr>
<td>License No</td>
<td>RL-0880</td>
</tr>

<tr>
<td>Phone</td>
<td>01819124015</td>
</tr>

</table>

</div>

<!-- BMET -->
<div class="section">

<div class="title">

<h3>BMET Registration</h3>

<div class="double-logo">
<img src="{{ asset('uploads/ec-card/gov.png') }}">
<img src="{{ asset('uploads/ec-card/oep.png') }}">
</div>

</div>

<table>

<tr>
<td>BMET No</td>
<td>NSM20256047949C</td>
</tr>

<tr>
<td>Name</td>
<td>IMRAN HOSSAIN</td>
</tr>

<tr>
<td>Birth Date</td>
<td>2001-02-28</td>
</tr>

<tr>
<td>Gender</td>
<td>Male</td>
</tr>

<tr>
<td>NID</td>
<td>4664670553</td>
</tr>

</table>

</div>

<!-- Passport -->
<div class="section">

<div class="title">

<h3>Passports</h3>

<div class="double-logo">
<img src="{{ asset('uploads/ec-card/gov.png') }}">
<img src="{{ asset('uploads/ec-card/oep.png') }}">
</div>

</div>

<table>

<tr>
<td>Name</td>
<td>IMRAN HOSSAIN</td>
</tr>

<tr>
<td>Passport No 1</td>
<td>A03573737</td>
</tr>

</table>

</div>

<!-- Address -->
<div class="section">

<div class="title">

<h3>Permanent Address</h3>

<div class="double-logo">
<img src="{{ asset('uploads/ec-card/gov.png') }}">
<img src="{{ asset('uploads/ec-card/oep.png') }}">
</div>

</div>

<table>

<tr>
<td>House/Vill Road</td>
<td>TETULTALA</td>
</tr>

<tr>
<td>Post Office</td>
<td>Panchdona - 1603</td>
</tr>

<tr>
<td>Police Station</td>
<td>MADHABDI</td>
</tr>

<tr>
<td>Upazila</td>
<td>Narsingdi Sadar</td>
</tr>

<tr>
<td>District</td>
<td>Narsingdi</td>
</tr>

<tr>
<td>Division</td>
<td>Dhaka</td>
</tr>

</table>

</div>

<!-- Emergency -->
<div class="section">

<div class="title">

<h3>Emergency Contact</h3>

<div class="double-logo">
<img src="{{ asset('uploads/ec-card/gov.png') }}">
<img src="{{ asset('uploads/ec-card/oep.png') }}">
</div>

</div>

<table>

<tr>
<td>Name</td>
<td>MD ABDUL KADER</td>
</tr>

<tr>
<td>Relation</td>
<td>Father</td>
</tr>

<tr>
<td>Mobile</td>
<td>017XXXXXXXX</td>
</tr>

<tr>
<td>Address</td>
<td>Narsingdi, Dhaka</td>
</tr>

</table>

</div>

</div>

</body>
</html>