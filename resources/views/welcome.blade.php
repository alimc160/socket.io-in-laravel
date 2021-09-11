<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </style>
</head>
<body>
<div>
    <button id="send">send msg</button>
</div>
<script src="https://cdn.socket.io/4.1.2/socket.io.min.js"></script>
<script>
    const ip_address = '127.0.0.1';
    const socket_port = '3000';
    let socket = io(ip_address + ':' + socket_port);
    socket.on('connection');
    document.addEventListener('click',(e)=>{
        const message = 'message send';
        socket.emit('sendMsg',message);
    });
    socket.on('sendOnClient',(msg)=>{
        console.log(msg);
    });
</script>
</body>
</html>
