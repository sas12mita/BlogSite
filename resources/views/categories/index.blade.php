<!-- resources/views/categories/index.blade.php -->
<x-app-layout>
    <div class="container">
        <header class="header">Category List</header>

        <!-- Display Categories -->
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $category->categoryName }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn-edit">Edit</a>
                                <!-- Delete Button -->
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        /* Container Styling */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling */
        .header {
            font-size: 32px;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Table Wrapper Styling */
        .table-wrapper {
            margin-top: 20px;
            overflow-x: auto;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            font-size: 16px;
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
            color: #555;
        }

        table tbody tr:hover {
            background-color: #f9f9f9;
        }

        /* Button Styling */
        .btn-edit,
        .btn-delete {
            padding: 8px 12px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        /* Edit Button Styling */
        .btn-edit {
            background-color: #4CAF50; /* Green */
            margin-right: 10px;
        }

        .btn-edit:hover {
            background-color: #45a049;
        }

        /* Delete Button Styling */
        .btn-delete {
            background-color: #f44336; /* Red */
            border: none;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #e53935;
        }
    </style>
</x-app-layout>
