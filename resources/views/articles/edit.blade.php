<!-- resources/views/categories/edit.blade.php -->
<x-app-layout>
    <div class="container">
        <header>Edit Category</header>

        <!-- Edit Category Form -->
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{$article ->title}}" required>
                </div>
                <div>
                    <label for="content">Content:</label>
                    <textarea name="content"  value="{{$article ->content}}"  required></textarea>
                </div>
                <div>
                    <label for="category_id">Category:</label>
                    <select name="category_id" required>
                        @foreach($categories as $category)
                        <option style="background-color:black; color:white" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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
