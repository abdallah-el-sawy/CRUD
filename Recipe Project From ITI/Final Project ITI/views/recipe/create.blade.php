<!DOCTYPE html>
<html>
<head>
  <title>Create Recipe</title>
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
      margin-left: auto;
      margin-right: auto;
    }

    form {
      background-color: rgba(255, 255, 255, 0.95);
      width: 500px;
      margin: 30px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    label {
      width: 90%;
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #444;
    }

    input[type="text"] {
      width: 80%;
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 14px;
      height: 60px; 
    }

    input[type="submit"] {
      background-color: #2ecc71;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
    }
    #name {
  width: 95%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 14px;
  height: 20px; 
}

#ingredients,
#steps {
  width: 95%;
  padding: 12px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 14px;
  height: 80px; 
}


    input[type="submit"]:hover {
      background-color: #27ae60;
    }
      .alert {
    padding: 10px;
    background-color: #f44336; /* أحمر */
    color: white;
    margin-bottom: 15px;
    border-radius: 5px;
    font-size: 14px;
  }

  .alert-danger {
    background-color: #e74c3c;
  }
  </style>
</head>

<body>

  <h3>⭐Create New Recipe⭐</h3>

  <div>
    <form action="{{ route('recipes.store') }}" method="post">
      @csrf

      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror


      <label for="ingredients">Ingredients</label>
      <input type="text" id="ingredients" name="ingredients" required>
      @error('ingredients')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror


      <label for="steps">Steps</label>
      <input type="text" id="steps" name="steps" required>
      @error('steps')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror


      <input type="submit" value="Submit">
    </form>
  </div>

</body>
</html>
