<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard KampusXplore</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      background-color: #f5f5f5;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .header h1 {
      color: #2c3e50;
    }
    
    .add-button {
      background-color: #3498db;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .add-button:hover {
      background-color: #2980b9;
    }
    
    .table-container {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 20px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      color: #2c3e50;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    }
    
    .action-button {
      padding: 5px 10px;
      margin-right: 5px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .edit-button {
      background-color: #f39c12;
      color: white;
    }

    .detail-button {
      background-color:rgb(18, 243, 29);
      color: white;
    }
    
    .delete-button {
      background-color: #e74c3c;
      color: white;
    }
    
    .edit-button:hover {
      background-color: #d35400;
    }

    .detail-button:hover {
      background-color:rgb(29, 114, 33);
    }
    
    .delete-button:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Dashboard KampusXplore</h1>
      <a href="create" class="add-button">Tambah Konten Baru</a>
    </div>
    
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul Blog</th>
            <th>Media</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($blog as $b) : ?> 
<tr>
    <td><?= $i++; ?></td>   
    <td><?= $b['judul']; ?></td>
    <td><img src="/img/<?= $b['gambar']; ?>" width="50" class="rounded"></td>
    <td><?= $b['deskripsi']; ?></td>
    <td>
        <div style="display: flex; gap: 6px; align-items: center;">
            <!-- Tombol Detail -->
            <button onclick="location.href='/admin/detail/<?= $b['slug']; ?>'" class="action-button detail-button">
                Detail
            </button>

            <!-- Tombol Edit -->
            <button onclick="location.href='/admin/edit/<?= $b['slug']; ?>'" class="action-button edit-button">
                Edit
            </button>

            <!-- Tombol Hapus -->
            <form action="/admin/delete/<?= $b['id']; ?>" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapus?')">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="action-button delete-button">
                    <i class="fas fa-trash-alt"></i> Hapus
                </button>
            </form>
        </div>
    </td>
</tr>
<?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>