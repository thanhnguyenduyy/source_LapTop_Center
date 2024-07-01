var io = require('socket.io')(6001)
console.log('Connected to port 6001')
io.on('error',function(socket){
	console.log('error')
})
io.on('connection',function(socket){
	console.log('Co nguoi vua ket noi'+socket.id)
})
var Redis = require('ioredis')
var redis = new Redis(1000)
redis.psubscribe("*",function(error,count){
	//
})
redis.on('pmessage',function(pattern,channel,user){
	console.log(channel)
	console.log(user)
	console.log(pattern)

	user = JSON.parse(user)
	io.emit(channel+":"+user.event,user.data.user)
	console.log('Sent')
})