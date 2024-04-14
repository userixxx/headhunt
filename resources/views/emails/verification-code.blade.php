<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code</title>
</head>
<body>
<img style="width: 900px;" src="{{ $message->embed(public_path('images/M4Xch6F7SQU.jpg')) }}" alt="СпецВУЗ">
<h1>Код верификации</h1>
<p>Ваш код: <strong>{{ $verificationCode }}</strong></p>
<p>Сделано в рамках хакатона для <strong>Фгану НИИ Специализированные вычислительные устройства защиты и автоматика <3</strong></p>
</body>
</html>
