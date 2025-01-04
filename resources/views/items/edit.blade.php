@extends('layout')

@section('content')
    <style>

        .edit-item-container {
            background-color: rgba(255, 255, 255, 0.4);
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            
            margin-top:100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-family: "Times New Roman", Times, serif;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            color: red;
        }
  
        button {
            padding: 10px 20px;
            font-size: 20px;
            border: none;
            width: 20%;
            border-radius: 4px;
            margin-left: 230px;
            margin-top: 27px;
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }

        ul li {
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"], textarea, input[type="date"] {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 17px;
            font-family: "Times New Roman", Times, serif;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 95%;
        }

      body{
            background-image: url('{{ asset('images/background.jpg') }}');
        }

        .error-messages {
            color: #e74c3c;
            font-size: 14px;
            margin-bottom: 15px;
        }

    </style>

    <div class="edit-item-container">
        <h1>Edit Item</h1>

        @if ($errors->any())
            <ul class="error-messages">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $item->name }}" required>
            <textarea name="description" required>{{ $item->description }}</textarea>
            <input type="text" name="supliername" value="{{ $item->supliername }}" required>
            <input type="text" name="quantity" value="{{ $item->quantity}}" required>
            <input type="date" name="purchase_date" value="{{ $item->purchase_date }}" required>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection
