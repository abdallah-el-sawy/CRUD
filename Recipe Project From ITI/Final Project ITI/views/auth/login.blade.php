<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
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

    .register-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .register-link a {
      color: #3498db;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
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

<h2>⭐Login Page⭐</h2>

@if (session('msg'))
  <div class="success">{{ session('msg') }}</div>
@endif

@if ($errors->has('msg'))
  <div class="alert alert-danger">
    {{ $errors->first('msg') }}
  </div>
@endif

<form method="POST" action="/login">
  @csrf

  <input type="email" name="email" placeholder="Email"><br>
  @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <input type="password" name="password" placeholder="Password"><br>
  @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <button type="submit">Login</button>

  <div class="register-link">
      Don't Have account? <a href="{{ route('auth.showregister') }}">Register</a>
  </div>
</form>

</body>
</html>
