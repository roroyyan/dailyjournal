<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Royyan project</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('./img/bgbgbg.jpg');">   
    <nav class=" p-4">
        <div class="container mx-auto flex justify-between mb-10 items-center p-4 bg-opacity-50">
          <section>
            <a href="index.php" class="text-left ml-6 p-2 text-white rounded hover:bg-blue-600 bg-opacity-50"><b>Kembali</b></a>
          </section>
        </div>
      </nav>

  <div class="flex items-center justify-center h-full">
    <div class=" bg-opacity-10 p-8 rounded-lg shadow-lg max-w-md w-full">
      <h2 class="text-2xl font-bold text-white text-center mb-6">LOG1N</h2>
      
      <form action="login.php" method="POST" enctype="multipart/form-data">

        <div class="mb-4">
          <label for="nama" class="block text-white font-bold mb-2">Username:</label>
          <input type="text" id="nama" name="user" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
          <label for="password" class="block text-white font-bold mb-2">Password:</label>
          <input type="password" id="password" name="pass" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div>
          <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">Login</button>
        </div>
      </form>
    </div>
  </div>




  <footer class="bg-gray-800 p-2  text-center text-white">
    <p>&copy;Copyright © 2024 RO All Rights Reserved</p>
  </footer>
</body>
</html>
<?php
}
?> 