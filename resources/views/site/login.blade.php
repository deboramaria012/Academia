<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessão</title>
    <style>
       body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #3498db, #CCCCCC);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #6e6d6d;
            border-radius: 6px;
            background-color: #f8f8f8;
            color: #464444;
        }

        button {
            background-color: #418143;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #53ac57;
        }

    </style>
</head>
<body>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="email" name="email" placeholder="Informe seu usuario" value="{{ old('email') }}">
        {{ $errors->has('email') ? $errors->first('email') : ''}}

        <label for="contrasena">Senha:</label>
        <input type="password"  name="password" placeholder="Informe sua senha" value="{{ old('password') }}">
        {{ $errors->has('password') ? $errors->first('password') : ''}}


        <button type="submit">Login</button>
    </form>

</body>
</html>
