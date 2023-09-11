<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.card {
  width: 300px;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

h2 {
  color: #00ADB5;
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  text-align: left;
  margin-bottom: 5px;
}

input {
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

button {
  padding: 10px;
  background-color: #00ADB5;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.switch {
  margin-top: 15px;
  font-size: 14px;
}

.switch a {
  color: #00ADB5;
  text-decoration: none;
}

    </style>
</head>
<body>
  
    <div class="container">
    
        <div class="card">
@if (session()->has('error'))
<p align="center">{{session('error')}}</p> 
@endif
          @if (session()->has('success'))
     <p align="center">{{session('success')}}</p> 
     @endif
          <h2>Login Form</h2>
          <form action="/login" method="post">
            @csrf
            @method('post')
            <label for="username">Email </label>
            <input type="text" name="email" id="username" placeholder="Enter your Email" value="{{old('email')}}" required>
            @error('email')
            <small style="color: red;"><i>{{$message}}</i></small>
            @enderror
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            @error('password')
            <small style="color: red;"><i>{{$message}}</i></small>
            @enderror
            <button type="submit">Login</button>
          </form>
          <div class="switch">Don't have an account? <a href="/register">Register here</a></div>
        </div>
      </div>
</body>
</html>