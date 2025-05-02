<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Konten- KampusXplore</title>
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
      max-width: 800px;
      margin: 30px auto;
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
    
    .form-container {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 25px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #2c3e50;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }
    
    .form-group textarea {
      min-height: 150px;
      resize: vertical;
    }
    
    .button-group {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 20px;
    }
    
    .save-button {
      background-color: #3498db;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .cancel-button {
      background-color: #95a5a6;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .save-button:hover {
      background-color: #2980b9;
    }
    
    .cancel-button:hover {
      background-color: #7f8c8d;
    }
  </style>
</head>
<body>
    <div class="container">
    <div class="header">
      <h1>Edit konten</h1>
    </div>
    
    <div class="form-container">
      <form id="blogForm" enctype="multipart/form-data" action="/admin/update/<?= $blog['id']; ?>" method="post">
        <?= csrf_field(); ?>

        <input type="hidden" name="gambarLama" value="<?= $blog['gambar']; ?>">

        <div class="form-group">
          <label for="judul">Nama Universitas</label>
          <input 
            type="text" 
            id="judul" 
            name="judul" 
            class="<?= session('errors.judul') ? 'is-invalid' : ''; ?>" 
            placeholder="Nama blog" 
            value="<?= old('judul', $blog['judul']); ?>" 
            autofocus
          >
          <div class="invalid-feedback">
            <?= session('errors.judul') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="gambar">Gambar</label>
          <div style="margin-bottom:10px;">
            <!-- Preview gambar -->
            <img src="/img/<?= old('gambar', $blog['gambar']); ?>" class="img-thumbnail img-preview" id="preview-img" style="max-width: 150px;">
          </div>
          <input 
            type="file" 
            class="<?= session('errors.gambar') ? 'is-invalid' : ''; ?>" 
            id="gambar" 
            name="gambar" 
            onchange="previewImg()"
          >
          <div class="invalid-feedback">
            <?= session('errors.gambar') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="deskripsi">Isi konten</label>
          <textarea 
            id="deskripsi" 
            name="deskripsi" 
            class="<?= session('errors.deskripsi') ? 'is-invalid' : ''; ?>" 
            placeholder="Isi konten blog"><?= old('deskripsi', $blog['deskripsi']); ?></textarea>
          <div class="invalid-feedback">
            <?= session('errors.deskripsi') ?>
          </div>
        </div>

        <div class="button-group">
          <a href="/admin" class="cancel-button">Batal</a>
          <button type="submit" class="save-button">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function previewImg() {
      const gambar = document.querySelector('#gambar');
      const imgPreview = document.querySelector('#preview-img');

      const fileGambar = new FileReader();
      fileGambar.readAsDataURL(gambar.files[0]);

      fileGambar.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
</body>
</html>