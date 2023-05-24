<!DOCTYPE html>
<html>
<head>
  <title>Tambah User</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    h3 {
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <center><h3>Tambah User</h3></center>
  <form id="addForm" method="POST" action="index.html">
    <div>
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div>
      <label for="role">Role:</label>
      <input type="text" id="role" name="role" required>
    </div>

    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>

    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>

    <div>
      <label for="address">Alamat:</label>
      <textarea id="address" name="address" required></textarea>
    </div>

    <div>
      <label for="photo">Foto:</label>
      <input type="file" id="photo" name="photo" accept="image/*" required>
    </div>

    <button type="submit">Simpan</button>
  </form>

  <script>
    document.getElementById('editForm').addEventListener('submit', function(event) {
      event.preventDefault(); 

      var form = this;
      window.location.href = "index.blade.php";
    });
  </script>
</body>
</html>