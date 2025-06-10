<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJBaka FFXIV Overlay</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            background: transparent;
            overflow: hidden;
        }

        #logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 200px;
        }
    </style>
</head>
<body>
    @if($logoPath)
        <img id="logo" src="{{ asset($logoPath) }}" alt="Logo">
    @else
        <p> Kein Logo ausgewählt.</p>
    @endif
</body>
</html>
