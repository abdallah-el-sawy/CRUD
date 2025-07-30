<html>
  <head>
      <title>Index page</title>
<style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f8f9fa;
          margin: 20px;
        }

        h3 {
          color: #333;
        }

        a {
          margin-right: 10px;
          text-decoration: none;
          color: #007bff;
        }

        a:hover {
          text-decoration: underline;
        }

        table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
          background-color: #fff;
        }

        th, td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
        }

        th {
          background-color: #007bff;
          color: white;
        }

        form {
          display: inline;
        }

        input[type="submit"] {
          background-color: #dc3545;
          color: white;
          border: none;
          padding: 5px 10px;
          cursor: pointer;
          border-radius: 4px;
        }

        input[type="submit"]:hover {
          background-color: #c82333;
        }
      </style>
  </head>
  <body>
    <h3>Welcome to Index page</h3>

    <a href="/movies/create">Create New Movie</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Hours</th>
      </tr>

        @foreach ($movies as $movie)
        <tr>
          <td>{{ $movie['id'] }}&nbsp;&nbsp;&nbsp;</td>
          <td>{{ $movie['title'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>{{ $movie['description'] }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>{{ $movie['hours'] }}&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>
            <a href="/movies/{{ $movie['id'] }}">show</a>
            <a href="/movies/{{ $movie['id'] }}/edit">Edit</a>
            <form method="post" action="/movies/{{ $movie['id'] }}'">
              @method('delete')
              @csrf
              <input type="submit" value="delete">
            </form>
          </td>
        </tr>
        @endforeach
    </table>
  </body>
</html>
