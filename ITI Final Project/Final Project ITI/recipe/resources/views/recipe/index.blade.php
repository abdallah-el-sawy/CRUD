<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"></html>
<html>
<head>
    <title>All Recipes</title>

<style>

body {
    background-image: url('/images/2.webp');
    background-size: cover; /* تخلي الصورة تغطي الصفحة */
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed; /* الصورة تثبت في مكانها لما تنزل */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;

}




table {
    width: 80%;
    margin: 30px auto;
    border: 0px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th{
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
    font-weight: bold;
}

td{
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
    font-weight: bold;
}

th {
    background-color: #f5a926ff;
}

a, input[type="submit"] {
    display: block;
    width: 100px;
    padding: 8px;
    margin: 5px auto;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
}
h1 {
    text-align: center;
    color: #333;
    background-color: rgba(247, 246, 246, 0.8);
    padding: 10px;
    border-radius: 10px;
    width: fit-content;
    margin: 20px auto;
    
}



a {
    background-color: #3498db;
    color: white;
}

a:hover {
    background-color: #2980b9;
}

input[type="submit"] {
    background-color: #e74c3c;
    color: white;
    border: none;
    cursor: pointer;
    width:115px;
    height:32px;
    font-weight: bold;
}

input[type="submit"]:hover {
    background-color: #c0392b;
}


.add-new-btn {
    margin-left: 155px;
    margin-top: 20px;
    display: inline-block;
    background-color: #2ecc71;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
}

.add-new-btn:hover {
    background-color: #27ae60;
}

footer {
background-color: rgba(0, 0, 0, 0.7);
color: white;
text-align: center;
padding: 15px 0;
position: relative;
bottom: 0;
width: 100%;
font-size: 14px;
margin-top: 30px;
border-top: 1px solid #ccc;
}

#show{
    background-color: rgba(12, 205, 67, 0.7);
    color: white;
}

#show:hover{
    background-color: rgba(0, 136, 77, 0.7);
}

.deleteall{
    margin-left: 155px;
    margin-top: 20px;
    display: inline-block;
    background-color: #cc2e2eff;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    height:60px;
    width:130px;
    cursor: pointer;
    border-color: #cc2e2eff;

}

.deleteall:hover{
      background-color: #851010ff;
      cursor: pointer;
      border-color: #851010ff;
}


    .logout
    {
    background-color: #fa2121ff;
    padding: 10px;
    color: white;
    margin-bottom: 10px;
    border-radius: 5px;
    text-align: center;
    width:100px;
    margin-left: 1350px;
    }

.logout:hover{
    background-color: #c0392b;
}


.hello {
    background-color: #999b9aff;
    padding: 10px;
    color: white;
    margin-bottom: 10px;
    border-radius: 5px;
    text-align: center;
    width:100px;
    margin-left: 1350px;
}




</style>

</head>

<body>




    <h1>⭐All Recipes⭐</h1>

    @if (session('message'))
        <div class="hello">{{ session('message') }}</div>
    @endif


    <a href="{{ route('auth.logout') }}" class="logout" > Log out </a>

    <a href="{{ route('recipes.create') }}" class="add-new-btn">Add New Recipe</a>

    <form action="{{ route('recipes.deleteAll') }}" method="POST">
    @csrf
    <button type="submit" class="deleteall">Delete All Recipes</button>
    </form>


    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Ingredients</th>
            <th>Steps</th>
            <th>Actions</th>
        </tr>

        @foreach($recipes as $recipe)
        <tr>
            <td>{{ $recipe['name'] }}</td>
            <td>{{ $recipe['ingredients'] }}</td>
            <td>{{ $recipe['steps'] }}</td>
            <td>
                <a href="{{ route('recipes.show', $recipe->id) }}" id="show">Show</a>

                <a href="{{ route('recipes.edit', $recipe->id) }}">Edit</a>
                <!-- route(name,id or any parameter ) -->

                <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>

            </td>
        </tr>
        @endforeach
    </table>

    <footer>
    <p>&copy; 2025 Abdallah Elsawy's App. All rights reserved.</p>
    </footer>

</body>
</html>
