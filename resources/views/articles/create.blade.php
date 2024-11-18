<x-app-layout>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Article</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f9;
            }

            .container {
                max-width: 600px;
                margin: 30px auto;
                padding: 20px;
                background: white;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            header {
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 10px;
                color: #218838;
            }

            form {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            label {
                font-weight: bold;
                margin-bottom: 5px;
                color: #333;
            }

            input[type="text"],
            textarea,
            select {
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 16px;
                width: 100%;
                box-sizing: border-box;
            }

            input[type="file"] {
                padding: 5px;
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

            .form-group {
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>

    <body>
    <center><a href="{{route('articles.index')}}"><button style="background-color:cornflowerblue;padding:10px;margin-top:10px">View Article</button> </a></center>

        <div class="container">
            <header>Create Article</header>
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" required>
                </div>
                <div>
                    <label for="content">Content:</label>
                    <textarea name="content" required></textarea>
                </div>
                <div>
                    <label for="category_id">Category:</label>
                    <select name="category_id" value="choose category" required>
                        <option></option>
                        @foreach($categories as $category)
                        <option  value="{{ $category->id }}">{{ $category->categoryName }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- <div>
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo" accept="image/*">
                </div> -->
                <button type="submit">Create Article</button>
            </form>

        </div>
    </body>
</x-app-layout>