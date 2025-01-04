
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
            height: 450px;
            width: 670px;
            margin-left: 400px; 
            margin-top: 130px;
            position: relative;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            width: 60%;
            border-radius: 4px;
            border: 5px solid black;
        }
        .topic {
            font-size: 35px;
            text-align: center;
            margin-top:0px;
            color: blue;
            font-family: "Times New Roman", Times, serif;
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
        label {
            font-size: 23px;
            margin-left: 40px;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
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
        input.email {
            margin-left: 65px;
        }
        input.password {
            margin-left: 30px;
        }
        .user-icon {
            margin-top:-100px;
            font-size: 30px; 
            color: #007BFF; 
            margin-left:320px;
        }
        a{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fas fa-user user-icon"></i> 
        <h2 class="topic">Login</h2>
        <p class="start">"Enter your credentials below to access your account."</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input id="email" class="email" type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input id="password" class="password" type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p class="end">Don’t have an account? <a href="{{ route('register') }}">Sign up</a> to get started.</p>
    </div>
</body>
</html>
