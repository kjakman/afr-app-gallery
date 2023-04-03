// var app = require('express')();
// var http = require('http').Server(app);
// var io = require('socket.io')(http);
// var Redis = require('ioredis');
// var redis = new Redis();
//var users = [];
// var groups = [];
// var express = require('express');
// var router = express.Router();
// const axios = require('axios');

// SSLCertificateFile /etc/letsencrypt/live/connect-ec÷-live.dci.in/fullchain.pem

var https = require('https'),     
    fs =    require('fs');        

var options = {
    key:    fs.readFileSync('/etc/letsencrypt/live/connect-ec-live.dci.in/privkey.pem'),
    cert:   fs.readFileSync('/etc/letsencrypt/live/connect-ec-live.dci.in/fullchain.pem')
};
var server = https.createServer(options);
var io = require('socket.io')(server);
var Redis = require('ioredis');
var redis = new Redis();
var users = [];
var groups = [];
var express = require('express');
var router = express.Router();
const axios = require('axios');


//server.listen(3000);



server.listen(8005, function () {
    console.log('Listening to port 8005');
});

redis.subscribe('private-channel', function() {
    console.log('subscribed to private channel');
});

redis.subscribe('group-channel', function() {
    console.log('subscribed to group channel');
});

redis.subscribe('like-channel', function() {
    console.log('subscribed to like-channel');
});

redis.subscribe('report-channel', function() {
    console.log('subscribed to report-channel');
});


redis.subscribe('delete-message-channel', function() {
    console.log('subscribed to delete-message-channel');
});

redis.subscribe('open-channel', function() {
    console.log('subscribed to open channel');
});

redis.subscribe('interview-channel', function() {
    console.log('subscribed to interview channel');
});

redis.subscribe('job-application-channel', function() {
    console.log('subscribed to job-application-channel');
});

redis.subscribe('read-channel', function() {
    console.log('subscribed to read-channel');
});

redis.on('message', function(channel, message) {

    message = JSON.parse(message);
    console.log("jemimam ---");
    console.log(message);

    if (channel == 'private-channel' || channel == 'group-channel' || channel == 'chat-tag-channel' || channel == 'delete-message-channel' || channel == 'like-channel' || channel == 'report-channel' || channel == 'open-channel' || channel == 'read-channel'|| channel == 'interview-channel') {
        let data = message.data.data;
        io.emit(channel + ':' + message.event, data);
    }
    
});
    io.on('connection', function (socket) {
        console.log("user connected");
        socket.on("user_connected", function (user_id) {
            users[user_id] = socket.id;
            io.emit('updateUserStatus', users);
            // console.log("user connected "+ user_id);
    });

    socket.on('disconnect', function(data) {

        console.log("user disconnected!");

        var i = users.indexOf(socket.id);
        users.splice(i, 1, 0);
        io.emit('updateUserStatus', users);
        console.log(users);
        

    });


    //:LEAVE:Client Supplied Room
    socket.on('userleavegroup',function(data){  
      try{
        console.log('[socket]','leave room :', data.chat_subgroup_id);
        socket.leave(data.chat_subgroup_id);
        io.emit('userleavegroup', data);
        updateActiveUser(data.chat_subgroup_id,0)
      }catch(e){
        console.log('[error]','leave chat_subgroup_id :', e);
        socket.emit('error','couldnt perform requested action');
      }
    })


    socket.on('typing', function(data){
         io.emit('display', data)
    })


    socket.on('read', function(data){
         io.emit('read', data)
         read_status(data)
         console.log("read")
    })



    socket.on('online', function(data){
         io.emit('online', data)
         online_status(data)
         console.log("online status")
    })




    socket.on('joinGroupv1', function(data) {
        // console.log(data);
        // data['socket_id'] = socket.id;
        // console.log(data['socket_id']);
        // console.log("joined in group");
        console.log(data,'joinGroupv1')
        if (groups[data.chat_subgroup_id]) {

            //console.log("group already exist");
            var userExist = checkIfUserExistInGroup(data.sender_able_id, data.chat_subgroup_id);

            if (!userExist) {
                groups[data.chat_subgroup_id].push(data);
                // updateActiveUser(data.chat_subgroup_id,1)
                socket.join(data.room);
            } else {
                var index = groups[data.chat_subgroup_id].map(function(o) {
                    return o.sender_able_id;
                }).indexOf(data.sender_able_id);

                groups[data.chat_subgroup_id].splice(index,1);
                groups[data.chat_subgroup_id].push(data);
                socket.join(data.room);
                
            }
        } else {
            //console.log("nwe group");
           // console.log("joined in group");

            groups[data.chat_subgroup_id] = [data];
            socket.join(data.room);
        }

        const newArr = groups.filter((a) => a);

        updateActiveUser(data.chat_subgroup_id,1)

        // console.log('socket-id: '+ socket.id+' - user-id: '+data.sender_able_id);
        // io.emit('hash', [...new Map(newArr[0].map((x) => [x[sender_able_id], x])).values()]);
        io.emit('hash', newArr);
        
         console.log(+'---->'+newArr); 
        // console.log(groups);
    })
});

function checkIfUserExistInGroup(user_id, group_id) {
    var group = groups[group_id];
    var exist = false;
    if (groups.length > 0) {
        for (var i = 0; i < group.length; i++) {
            if (group[i]['user_id'] == user_id) {
                exist = true;
                break;
            }
        }
    }

    return exist;
}

function getSocketIdOfUserInGroup(user_id, group_id) {
 var group = groups[group_id];
    if (groups.length > 0) {
        for (var i = 0; i < group.length; i++) {
            if (group[i]['user_id'] == user_id) {
                return group[i]['socket_id'];
            }
        }
    }
}

function updateActiveUser(chat_subgroup_id,incrementOrDecrement) {

    axios
        .post('https://connect-ec-live.dci.in/api/chat-sub-groups/update', {
        id:chat_subgroup_id,
        increment_or_decrement:incrementOrDecrement
    })
    .then(res => {
        // console.log(`statusCode: ${res.status}`)
        //console.log(res.data.message)

        // console.log(`${res.status}`)
    })
    .catch(error => {
        console.error(error)
    })
}


    function read_status(data) {

    console.log('read_status update---');
    console.log(data);
    
    axios
        .post('https://connect-ec-live.dci.in/api/private-chats/update', {
        user_type:data.user_type,
        sender_id:data.sender_id,
        receiver_type:data.receiver_type,
        receiver_id:data.receiver_id,
        chat_message_id:data.chat_message_id,
    })
    .then(res => {
        // console.log(`statusCode: ${res.status}`)
        //console.log(res.data.message)

        // console.log(`${res.status}`)
    })
    .catch(error => {
        console.error(error)
    })
}

function online_status(data) {


    console.log("online_status datas");
    console.log(data);
    axios
        .post('http://connect-ec-live.dci.in/api/online-status/update', {
        user_type:data.user_type,
        user_id:data.user_id,
        status:data.status,
    })
    .then(res => {
        // console.log(`statusCode: ${res.status}`)
        //console.log(res.data.message)

        // console.log(`${res.status}`)
    })
    .catch(error => {
        console.error(error)
    })
}
