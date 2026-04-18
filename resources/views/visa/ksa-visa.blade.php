<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Saudi Visa</title>

<style>

/* ===== EXACT FINAL MATCH CSS ===== */

body{
    margin:0;
    background:#FFFFFF;
    font-family:Arial, Helvetica, sans-serif;
}

.visa-card{
    width:700px;
    margin:10px auto;
    background:#f8f8f8;
    border-radius:22px;
    box-shadow:0 0 14px rgba(0,0,0,.12);
    overflow:hidden;
}

/* TOP HEADER */
.top{
    padding:18px 12px 6px;
}

.header-flex{
    width:100%;
    text-align:center;
}

.header-img{
    width:100%;
    max-width:676px;
    height:auto;
    display:block;
    margin:0 auto;
}

.left-visa{
    width:110px;
    color:#0e5f4b;
    font-weight:bold;
    font-size:17px;
    line-height:28px;
    margin-top:8px;
}

.left-visa b{
    font-size:34px;
}

.center-lines{
    flex:1;
    margin:16px 18px 0;
}

.center-lines div{
    border-bottom:2px solid #d9d9d9;
    margin-bottom:4px;
}

.logo{
    width:170px;
    margin-top:6px;
}

/* CONTENT */
.content{
    padding:8px 36px 0;
}

.flex-area{
    display:flex;
    gap:28px;
}

.photo-box{
    width:150px;
}

.photo-box img{
    width:135px;
    height:165px;
    object-fit:cover;
    border:1px solid #88c3c8;
    margin-top:14px;
}

.info{
    flex:1;
}

.row-box{
    margin-bottom:8px;
}

.row-top{
    display:flex;
    justify-content:space-between;
    font-size:13px;
    color:#111;
    margin-bottom:2px;
}

.row-value{
    background:#ececec;
    height:22px;
    line-height:22px;
    text-align:center;
    font-size:15px;
    font-weight:bold;
    color:#111;
    border:1px solid #e2e2e2;
}

.mt40{
    margin-top:18px;
}

/* MRZ */
.mrz{
    padding:26px 0 10px;
    text-align:center;
    font-family:"Courier New", monospace;
    font-size:14px;
    line-height:1.65;
    letter-spacing:1px;
    color:#111;
}

/* FOOTER */
.bottom{
    background:#dff1dd;
    text-align:center;
    height:30px;
    line-height:30px;
    color:#1a3550;
    font-size:12px;
    padding:0;
}

</style>

</head>
<body>

<div class="visa-card">

<div class="top">
    <div class="header-flex">
        <img src="{{ asset('uploads/visas/ksa-logo.jpg') }}" class="header-img">
    </div>
</div>

<div class="content">

<div class="flex-area">

<div class="photo-box">
<img src="{{ asset('uploads/visas/'.$visa->photo) }}">
</div>

<div class="info">

<div class="row-box">
<div class="row-top">
<span>Visa No.</span>
<span>رقم التأشيرة</span>
</div>
<div class="row-value">{{ $visa->visa_no }}</div>
</div>

<div class="row-box">
<div class="row-top">
<span>Religion</span>
<span>الديانة</span>
</div>
<div class="row-value">{{ $visa->religion }}</div>
</div>

<div class="row-box">
<div class="row-top">
<span>Passport Expiry Date</span>
<span>تاريخ انتهاء الجواز</span>
</div>
<div class="row-value">{{ date('d/m/Y',strtotime($visa->passport_expiry_date)) }}</div>
</div>

<div class="row-box">
<div class="row-top">
<span>Date of Issue</span>
<span>صالحة اعتبارا من</span>
</div>
<div class="row-value">{{ date('d/m/Y',strtotime($visa->date_of_issue)) }}</div>
</div>

<div class="row-box">
<div class="row-top">
<span>Valid until</span>
<span>صالحة لغاية</span>
</div>
<div class="row-value">{{ date('d/m/Y',strtotime($visa->valid_until)) }}</div>
</div>

</div>

</div>

<div class="mt40">

<div class="row-box">
<div class="row-top">
<span>Nationality</span>
<span>الجنسية</span>
</div>
<div class="row-value">Bangladesh - بنجلاديش</div>
</div>

<div class="row-box">
<div class="row-top">
<span>Date of Birth</span>
<span>تاريخ الميلاد</span>
</div>
<div class="row-value">{{ date('d/m/Y',strtotime($visa->date_of_birth)) }}</div>
</div>

<div class="row-box">
<div class="row-top">
<span>Sex</span>
<span>الجنس</span>
</div>
<div class="row-value">Male - ذكر</div>
</div>

</div>

</div>

<div class="mrz">
1&lt;BGD{{ strtoupper($visa->last_name) }}&lt;&lt;{{ strtoupper($visa->first_name) }}<<<<<<<<<<<<<< <br>
{{ strtoupper($visa->passport_number) }}BGD{{ date('dmY',strtotime($visa->date_of_birth)) }}{{ date('dmY',strtotime($visa->passport_expiry_date)) }}0<<<<<<<<01
</div>

<div class="bottom">
Valid - سارية
</div>

</div>

</body>
</html>