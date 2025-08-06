<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

      <style>
    body {
      background-image: url('/images/2.webp');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      text-align: center;
      margin-top: 30px;
      color: #333;
      background-color: rgba(255, 255, 255, 0.85);
      padding: 12px 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form {
      background-color: rgba(255, 255, 255, 0.95);
      width: 400px;
      margin-top: 20px;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 93%;
      padding: 12px;
      margin: 10px 0 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    button {
      background-color: #2ecc71;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #27ae60;
    }

    .alert {
      padding: 10px;
      background-color: #f44336;
      color: white;
      margin-bottom: 10px;
      border-radius: 5px;
      font-size: 14px;
    }

    .alert-danger {
      background-color: #e74c3c;
    }

    .success {
      background-color: #2ecc71;
      padding: 10px;
      color: white;
      margin-bottom: 10px;
      border-radius: 5px;
      text-align: center;
    }
  </style>
</head>
<body>

<h2>⭐Register⭐</h2>

<form method="POST" action="{{ route('auth.register') }}">
    @csrf

    <div>
        <label>Name:</label>
        <input type="text" name="name" >
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div>
        <label>Email:</label>
        <input type="email" name="email" >
      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div>
        <label>Password:</label>
        <input type="password" name="password">
      @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit">Register</button>
</form>

@if(session('msg'))
    <p style="color:green">{{ session('msg') }}</p>
@endif

</body>
</html>
