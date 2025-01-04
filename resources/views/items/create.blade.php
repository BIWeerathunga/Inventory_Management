@extends('layout')

@section('content')
    <h1>Add Item</h1>

    @if ($errors->any())
        <ul class="error-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('items.store') }}" method="POST" class="form-container">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"  required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description"  required></textarea>
        </div>
        <div class="form-group">
            <label for="supliername">Supplier Name</label>
            <input type="text" id="supliername" name="supliername"  required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity"  required>
        </div>
        <div class="form-group">
            <label for="purchase_date">Purchase Date</label>
            <input type="date" id="purchase_date" name="purchase_date" required>
        </div>
        <button type="submit" class="submit-btn">Add Item</button>
    </form>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('{{ asset('images/background.jpg') }}');
        margin: 0;
        padding: 0;
    }
    
    h1 {
        text-align: center;
        color: #333;
        margin-top:60px;
    }
    label {
            font-size: 17px;
            margin-left: 0px;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
        }
    .form-container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
      
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.4);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 3px solid black;
        border-radius: 4px;
        font-size: 16px;
    }

    .form-group textarea {
        height: 100px;
    }

    .submit-btn {
        width: 30%;
        padding: 12px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-weight:bold;
        font-family: "Times New Roman", Times, serif;
        font-size: 18px;
        cursor: pointer;
        margin-left:200px;
    }
 
    .submit-btn:hover {
        background-color: #218838;
    }

    .error-list {
        color: red;
        margin-bottom: 20px;
        list-style: none;
        padding: 0;
    }

    .error-list li {
        margin-bottom: 5px;
    }
</style>

