require('./bootstrap');

import Echo from "laravel-echo";
window.io = require('socket.io-client')
window.Echo = new Echo({
   broadcaster : 'socket.io',
   host:window.location.hostname + ':6001'
});
Echo.channel('commentChannel').listen('.commentEvent',(comment)=>{
    console.log(comment)
})
