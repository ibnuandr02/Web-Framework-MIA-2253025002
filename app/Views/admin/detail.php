<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Blog - KampusXplore</title>
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
      background-color:rgb(255, 0, 0);
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
      background-color:rgb(255, 0, 0);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Edit Blog</h1>
    </div>
    
    <div class="form-container">
      <form>
        
        <div class="form-group">
          <label for="blog-title">Nama Blog</label>
          <p type="text" id="blog-title" value="Isi disini"><?= $blog['judul'] ; ?></p>
        </div>
        
        <div class="form-group">
          <label for="blog-author">Slug</label>
          <p type="text" id="blog-author" value="Slug"><?= $blog['slug']; ?> </p>
        </div>

        <div class="form-group">
          <label for="blog-image">Gambar Utama</label>
          <img src="/img/<?= $blog['gambar']; ?>" style="width: 250px; height: auto;" alt="Gambar Blog">
        </div>
        
        <div class="form-group">
          <label for="blog-content">Konten Blog</label>
          <textarea id="blog-content"readonly><?= $blog['deskripsi']; ?></textarea>
        </div>
        
        <div class="button-group">
          <button type="button" class="cancel-button" onlick="window.history.back()">Kembali</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.querySelector('.cancel-button').addEventListener('click', function() {
      if(confirm('Kembali ke dasboard admin?')) {
        window.location.href = '/admin';
      }
    });
  </script>
</body>
</html>