<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagem</title>
    <style>
        body {
            font-family: Vineta BT, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #6495ED;
            color: #0000FF;
        }

        div {
            padding: 20px 0;
            font-size: 24px;
            color: #0000FF;
        }

        form {
            margin: 20px auto;
            width: 60%;
            text-align: left;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #444;
            background-color: #E0FFFF;
            color: #00FFFF;
            resize: none;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #008080;
            color: #0000CD;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #87CEFA; /* Tom mais escuro de laranja */
        }
    </style>
</head>
<body>
    <div>Nova Postagem</div>

    <form action="/salva-post" method="POST">
        @csrf
        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Escreva sua postagem..." required></textarea>

        <button type="submit">Postagem</button>
    </form> 
</body>
</html>
