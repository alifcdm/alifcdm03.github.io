<?php  
if( isset($_POST["submit"]) ){
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "admin"){
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    }else{
        // jika salah, tampilkan pesan salah
        $error = true;
    }
}
?>