<!DOCTYPE html>
<html>
<head>
  <title>Detail Pengguna</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    h3 {
      color: #333;
    }

    .user-details {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .user-details label {
      font-weight: bold;
    }

    .user-details p {
      margin-top: 5px;
    }

    .user-details .avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .back-btn {
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      padding: 8px 16px;
      background-color: #4CAF50;
      color: #fff;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <center><h3>Detail User</h3></center>
  <div class="user-details">
    <img class="avatar" src="foto2.jpg" alt="Avatar">
    <label for="name">Nama:</label>
    <p id="name">Azziadati</p>

    <label for="role">Role:</label>
    <p id="role">Admin</p>

    <label for="email">Email:</label>
    <p id="email">user1@example.com</p>

    <label for="phone">Phone:</label>
    <p id="phone">1234567890</p>

    <label for="address">Alamat:</label>
    <p id="address">Jl. Mansyir v No. 1</p>

    <a class="back-btn" href="index.blade.php">Kembali</a>
  </div>
</body>
</html>