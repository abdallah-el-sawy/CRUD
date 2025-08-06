
</head>
<!DOCTYPE html>
<html>
<head>
  <title>Show Page</title>
  
  <style>
  body {
    background-image: url('/images/2.webp'); 
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  h3 {
      text-align: center;
      margin-top: 30px;
      color: #333;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 10px;
      width: fit-content;
      border-radius: 10px;
      margin-left: 680px;
      font-weight: bold;
      
  }

  .recipe-box {
    background-color: rgba(255, 255, 255, 0.95);
    width: 450px;
    margin: 40px auto;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 18px rgba(0,0,0,0.1);
  }

  .recipe-box h4 {
    margin-bottom: 10px;
    color: #34495e;
  }

  .recipe-item {
    margin-bottom: 15px;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
    font-size: 16px;
  }

  .recipe-item:last-child {
    border-bottom: none;
  }

  .back-btn {
    display: block;
    width: 130px;
    margin: 30px auto 10px auto;
    text-align: center;
    padding: 12px;
    background-color: #3498db;
    color: white;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
  }

  .back-btn:hover {
    background-color: #2980b9;
  }
</style>

</head>
<body>

  <h3>⭐Recipe Details⭐</h3>

  <div class="recipe-box">
    <div class="recipe-item">• Name : {{ $recipe['name'] }}</div>
    <div class="recipe-item">• Ingredients : {{ $recipe['ingredients'] }}</div>
    <div class="recipe-item">• Steps : {{ $recipe['steps'] }}</div>
  </div>

  <a href="{{ route('recipes.index') }}" class="back-btn">Back</a>

</body>
</html>
