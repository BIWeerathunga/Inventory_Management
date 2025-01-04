
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.4); 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            height: 550px;
            width: 700px;
            margin-left: 400px; 
            margin-top: 90px;
            position: relative;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            width: 50%;
            border-radius: 4px;
            border: 3px solid black;
        }
        label {
            font-size: 23px;
            margin-left: 40px;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
        }
        .topic {
            font-size: 35px;
            text-align: center;
            margin-top:0px;
            color: blue;
            font-family: "Times New Roman", Times, serif;
        }
        .user-icon {
            margin-top:-100px;
            font-size: 30px; 
            color: #007BFF; 
            margin-left:320px;
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            width: 20%;
            border-radius: 4px;
            margin-left: 260px;
            margin-top: 27px;
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .start {
            font-size: 20px;
            margin-top: -10px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        }
        .end {
            font-size: 20px;
            margin-top: 30px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
            margin-left: -15px;
        }
        a{
            color:red;
        }
        input.name{
            margin-left: 62px;
        }
        input.email {
            margin-left: 60px;
        }
        input.password {
            margin-left: 25px;
        }
        input.confirm {
            margin-left: 20px;
        }
        </style>
</head>
<body>
    <div class="container">
    <i class="fas fa-user user-icon"></i>
        <h2 class="topic">Register</h2>
        <p class="start">“Create an account to get started and access all our services.”</p>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input id="name" class="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div>
                <label for="email">Email:</label>
                <input id="email" class="email" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input id="password" class="password" type="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input id="password_confirmation" class="confirm" type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p class="end">Already have an account? <a href="{{ route('login') }}">Login</a>  here.</p>
    </div>
</body>
</html>
