<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttons Centered with Table</title>
    <style>
        /* Button Container Styling */
        .button-container {
            display: flex;
            gap: 20px; /* Space between buttons */
            justify-content: center;
            margin-top: 10px;
        }

        .button {
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: cornflowerblue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none; /* For anchor buttons */
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Table Container Styling */
        .table-container {
            margin: 20px auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .button-table {
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9rem;
            cursor: pointer;
            text-align: center;
        }

        .button-table.edit {
            background-color: #28a745;
        }

        .button-table.edit:hover {
            background-color: #218838;
        }

        .button-table.delete {
            background-color: #dc3545;
        }

        .button-table.delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <a href="{{route('categories.create')}}" class="button">Add to Category</a>
        <a href="{{route('articles.create')}}" class="button">Add to Article</a>
    </div>
    <div class="button-container">
        <a href="{{route('categories.index')}}" class="button">View Category</a>
        <a href="{{route('articles.index')}}" class="button">View Article</a>
    </div>
    <br><br>
    <center><h1 style="color:red;font-size:30px">Your Articles</h1></center>

    <!-- Table Section -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
               <tr>
               @forelse($articles as $article)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category->categoryName }}</td>

                        <td>{{ $article->content }}</td>
                        <td>
                            <a href="articles/{{$article -> id}}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                <h1>No data found</h1>
                @endforelse
                </tr>
            </tbody>
        </table>
    </div>
</body>
</x-app-layout>
