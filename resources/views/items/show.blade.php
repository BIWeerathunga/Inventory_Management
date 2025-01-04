
@extends('layout')

@section('content')
    <style>
        .item-details-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top:200px;
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            width: 20%;
            border-radius: 4px;
            margin-left: 230px;
            margin-top: 27px;
            background-color: #007BFF;
            font-family: "Times New Roman", Times, serif;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }

        .item-details-container h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .item-details-container p {
            font-size: 18px;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .item-details-container p span {
            font-weight: bold;
            color: #000;
        }

        .item-details-container .item-meta {
            font-size: 16px;
            color: #777;
            margin-top: 20px;
        }
        body{
            background-image: url('{{ asset('images/background.jpg') }}');
        }
    
    </style>

    <div class="item-details-container">
        <h1>{{ $item->name }}</h1>
        <p><span>Description:</span> {{ $item->description }}</p>
        <p><span>Supplier Name:</span> {{ $item->supliername }}</p>
        <p><span>Quantity:</span> {{ $item->quantity }}</p>
        <p><span>Purchase Date:</span> {{ $item->purchase_date }}</p>
        <form action="{{ route('items.index') }}">
    <button type="submit">Back</button>
</form>
    
    </div>
@endsection
