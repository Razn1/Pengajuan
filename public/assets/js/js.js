 // Mendapatkan elemen input password dan checkbox
 var passwordInput = document.getElementById("newpassword");
 var showPasswordCheckbox = document.getElementById("showPassword1");

 // Menambahkan event listener untuk checkbox
 showPasswordCheckbox.addEventListener("change", function() {
     // Jika checkbox dicentang, tampilkan password
     if (showPasswordCheckbox.checked) {
         passwordInput.type = "text";
     } else { // Jika checkbox tidak dicentang, sembunyikan password
         passwordInput.type = "password";
     }
 });

 // Mendapatkan elemen input password dan checkbox
 var passwordInput = document.getElementById("newpassword");
 var showPasswordCheckbox = document.getElementById("showPassword2");

 // Menambahkan event listener untuk checkbox
 showPasswordCheckbox.addEventListener("change", function() {
     // Jika checkbox dicentang, tampilkan password
     if (showPasswordCheckbox.checked) {
         passwordInput.type = "text";
     } else { // Jika checkbox tidak dicentang, sembunyikan password
         passwordInput.type = "password";
     }
 });


