<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Received</title>
    <style>
        html {
            font-family: sans-serif;

            background-color: black;
            color: white;
        }

        * {
            box-sizing: border-box;
        }

        body {
            padding: 2em;
        }
    </style>
</head>

<body>
    <p>Name: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Message:</p>
    {{ nl2br(e($contact->message)) }}
</body>

</html>
