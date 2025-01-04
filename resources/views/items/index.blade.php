@extends('layout')

@section('content')
<div class="navbar">
        <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <a href="#" class="home">Home</a>
       
        <a href="{{ route('login') }}" class="about">About</a>
        <a href="{{ route('register') }}" class="contact">Contact</a>
        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
        <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
    </div>
    <h1 class="topic">All Items</h1>


    <div class="create-item-container">
        <a href="{{ route('items.create') }}" class="create-item-btn">Create Item</a>
    </div>

    
    @if ($message = Session::get('success'))
        <p class="success-message">{{ $message }}</p>
    @endif

    
    <table class="items-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td class="item-actions">
                        <a href="{{ route('items.show', $item->id) }}" class="action-btn view-btn">View</a>
                        <a href="{{ route('items.edit', $item->id) }}" class="action-btn edit-btn">Edit</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        background-image: url('{{ asset('images/background.jpg') }}');
        margin: 0;
        padding: 0;
    }
    .navbar {
            background-color: #89CFF0;
            overflow: hidden;
            position: fixed;
            width: 100%;
            top: 0;
            margin-left:200px:
            z-index: 1000;
            display: flex;
            align-items: center;
            padding: 10px 20px;
        }
        .navbar a {
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            font-size: 19px;
            display: flex;
            align-items: center; 
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar .back-icon {
            font-size: 24px; 
            margin-right: 20px; 
            margin-top: 5px; 
        }

    h1 {
        text-align: center;
        color: #333;
        margin-top: 20px;
        font-family: "Times New Roman", Times, serif;
    }

    .create-item-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .create-item-btn {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }

    .create-item-btn:hover {
        background-color: #0056b3;
    }

    .success-message {
        text-align: center;
        color: green;
        font-size: 16px;
        margin-bottom: 20px;
    }
    a.home{
        margin-left:450px;
    }

    .items-table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .items-table th, .items-table td {
        padding: 10px;
        border: 1px solid black;
        text-align: center;
    }

    .items-table th {
        background-color: #f4f4f4;
        font-weight: bold;
        border: 1px solid black;
        font-family: "Times New Roman", Times, serif;
    }

    .items-table td {
        font-size: 16px;
        color: #333;
        border: 1px solid black;
        font-family: "Times New Roman", Times, serif;
    }
    table {
    border: 3px solid black;
    border-collapse: collapse; 
}


    .item-actions {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .action-btn {
        padding: 8px 16px;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
        font-family: "Times New Roman", Times, serif;
        color: white;
        cursor: pointer;
    }

    .view-btn {
        height:17px;
        background-color: #17a2b8;
    }

    .view-btn:hover {
        background-color: #138496;
    }

    .edit-btn {
        height:17px;
        background-color: #ffc107;
    }

    .edit-btn:hover {
        background-color: #e0a800;
    }

    .delete-btn {
        background-color: #dc3545;
        border: none;
    }
    .topic{
             margin-top:100px;
    }

    .delete-btn:hover {
        background-color: #c82333;
    }

    .delete-form {
        display: inline;
    }
</style>

