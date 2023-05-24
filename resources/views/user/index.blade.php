<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>PT ARKATAMA</title>

</head>
<body>
  <div class="container-scroller">
  <title>User</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    .avatar {
      width: 20px;
      height: 20px;
      border-radius: 50%;
    }
    
    .action-btn {
      padding: 5px 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 5px;
    }
    
    .detail-btn {
      background-color: #2196F3;
    }
    
    .edit-btn {
      background-color: #FF9800;
    }
    
    .delete-btn {
      background-color: #F44336;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Avatar</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Role</th>
    </tr>
    <tr>
      <td>1</td>
      <td>
        <a href="detail.blade.php?id=1" class="action-btn detail-btn">Detail</a>
        <a href="edit.blade.php?id=1" class="action-btn edit-btn">Edit</a>
        <form method="post" action="index.html" style="display: inline;">
          <input type="hidden" name="id" value="1">
          <button type="submit" class="action-btn delete-btn">Hapus</button>
        </form>
      </td>
      <td><img class="avatar" src="foto2.jpg" alt="Avatar"></td>
      <td>Azziadati</td>
      <td>user1@example.com</td>
      <td>1234567890</td>
      <td>Admin</td>
    </tr>
    <tr>
      <td>2</td>
      <td>
        <a href="detail.blade.php?id=2" class="action-btn detail-btn">Detail</a>
        <a href="edit.blade.php?id=2" class="action-btn edit-btn">Edit</a>
        <a href="index.html" class="action-btn delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
      </td>
      <td><img class="avatar" src="foto2.jpg" alt="Avatar"></td>
      <td>Azziadati</td>
      <td>user2@example.com</td>
      <td>9876543210</td>
      <td>User</td>
    </tr>
    <td>3</td>
      <td>
        <a href="detail.blade.php?id=1" class="action-btn detail-btn">Detail</a>
        <a href="edit.blade.php?id=1" class="action-btn edit-btn">Edit</a>
        <a href="index.html" class="action-btn delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
      </td>
      <td><img class="avatar" src="foto2.jpg" alt="Avatar"></td>
      <td>Azziadati</td>
      <td>user1@example.com</td>
      <td>1234567890</td>
      <td>Admin</td>
    </tr>
    <tr>
      <td>4</td>
      <td>
        <a href="detail.blade.php?id=2" class="action-btn detail-btn">Detail</a>
        <a href="edit.blade.php?id=2" class="action-btn edit-btn">Edit</a>
        <a href="index.html" class="action-btn delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
      </td>
      <td><img class="avatar" src="foto2.jpg" alt="Avatar"></td>
      <td>Azziadati</td>
      <td>user2@example.com</td>
      <td>9876543210</td>
      <td>User</td>
    </tr>
  </table>
  <center>
    <td>
      <a href="create.blade.php" class="action-btn detail-btn">tambah</a>
      <a href="login.html" class="action-btn edit-btn">Keluar</a>
    </td>
  </center>
</body>
</html>