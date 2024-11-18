<x-app-layout>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    header {
        font-size: 30px;
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
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
<div class="container">
        <header>Insert New Category</header>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            
            <div>
                <label for="categoryName">Category Name:</label>
                <input type="text" id="categoryName" name="categoryName" placeholder="Enter category name" required>
            </div>
            <button type="submit">Add Category</button>
        </form>
    </div>
</x-app-layout>