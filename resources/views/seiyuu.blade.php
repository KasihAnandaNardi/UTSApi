<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Seiyuu</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }
    h1 {
      color: #333;
    }
    form {
      margin-bottom: 20px;
    }
    input[type="text"] {
      padding: 8px;
      width: 300px;
    }
    button {
      padding: 8px 15px;
      background-color: #007BFF;
      color: white;
      border: none;
      cursor: pointer;
    }
    .card {
      background-color: white;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      display: flex;
      align-items: center;
    }
    .card img {
      height: 80px;
      width: 80px;
      border-radius: 50%;
      margin-right: 15px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <h1>Daftar Seiyuu</h1>

  <form method="GET" action="{{ route('seiyuu.index') }}">
    <input type="text" name="q" value="{{ $keyword }}" placeholder="Cari seiyuu...">
    <button type="submit">Cari</button>
  </form>

  @foreach($seiyuuList as $seiyuu)
    <div class="card">
      <img src="{{ $seiyuu['images']['jpg']['image_url'] ?? 'https://via.placeholder.com/80' }}" alt="{{ $seiyuu['name'] }}">
      <div>
        <strong>{{ $seiyuu['name'] }}</strong><br>
        <small>ID: {{ $seiyuu['mal_id'] }}</small>
      </div>
    </div>
  @endforeach

</body>
</html>
