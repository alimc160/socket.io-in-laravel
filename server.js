const express = require('express');
const app = express();

const server = require('http').createServer(app);

const  port = 3000;

const io = require('socket.io')(server,{
   cors:{ origin : "*" }
});

io.on('connection',(socket)=>{
    console.log('connected');
    socket.on('sendMsg',(msg)=>{
        io.sockets.emit('sendOnClient',msg);
    });
    socket.on('disconnect',(socket)=>{
        console.log('disconnect');
    });
})
server.listen(port, ()=>{
    console.log(`server running at http://localhost:${port}`);
});
