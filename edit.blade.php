<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Edit Page</h3>

<div>

  <form action="/movies/{{$movie->id}}" method="post">
    @method('put')
    @csrf

    <label for="title">Title:</label>
    <input type="text" id="fname" name="title" value="{{ $movie->title }}">

    <label for="description">Description:</label>
    <input type="text" id="lname" name="description" value="{{ $movie->description }}">

    <label for="hours">Hours:</label>
    <input type="text" id="lname" name="hours" value="{{ $movie->hours }}">


    <input type="submit" value="update">
  </form>
</div>

</body>
</html>


