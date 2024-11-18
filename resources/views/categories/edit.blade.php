<!-- resources/views/categories/edit.blade.php -->
<x-app-layout>
    <div class="container">
        <header>Edit Category</header>

        <!-- Edit Category Form -->
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="categoryName">Category Name:</label>
                <input type="text" id="categoryName" name="categoryName" value="{{$category ->categoryName}}" placeholder="Enter category name" required>
            </div>

            <button type="submit">Update Category</button>
        </form>
    </div>

    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            font-size: 32px;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px 15px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</x-app-layout>
