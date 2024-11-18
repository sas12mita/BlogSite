<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <link rel="stylesheet" href="styles.css"> <!-- External CSS link -->
    <style>
        /* Basic body and text styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Header styling */
        .header {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo-container .logo {
            font-size: 2rem;
            margin: 0;
        }

        .auth-links h5 {
            display: inline-block;
            margin-left: 20px;
            cursor: pointer;
        }

        .auth-links h5:hover {
            text-decoration: underline;
        }

        /* Content area */
        .content {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            text-align: left;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .content h2{
            color: blue;
        }

        .article {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .article h3 {
            margin-bottom: 10px;
            font-size: 1.8rem;
            color: #333;
        }

        .article p {
            margin-bottom: 10px;
            line-height: 1.6;
            color: #555;
        }

        .article .category {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        /* Footer styling */
        /* .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        } */
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo-container">
                <h1 class="logo">Blog</h1>
            </div>
            <div>
            <a href="{{route('login')}}" style="color:white;margin-right:10px">Login</a>
            <a href="{{route('register')}}" style="color:white">register</a>
            </div>
        </div>
    </header>

    <div class="content">
       <center><h2>Welcome to the bladeBlog</h2>
        <p>This is a place where you can read interesting articles.</p>
</center> 
        <!-- Article Section -->
        <div> 
        @forelse($articles as $article)
        <div class="article">
            <h3>{{$article->title}}</h3>
            <p>{{$article->content}}</p>
            <p><strong>Category:</strong> {{ $article->category->categoryName ?? 'Uncategorized' }}</p>
            <p><strong>Uploaded By: {{$article->user->name}}</strong></p>
        </div> 
        @empty
         <h2>No article found</h2>
        @endforelse 
    </div>

    <footer class="footer">
        <p>&copy; 2024 Blog. All rights reserved.</p>
    </footer>
</body>
</html>
