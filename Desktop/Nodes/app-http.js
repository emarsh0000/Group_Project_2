var http = require('http');

console.log('n\n\nHTTP OBJECT', http);
server = http.createServer(function (request, response){
	//console.log('\n\n\nRequest Output\n', request);
	//console.log('\n\n\nRequest Output\n', response);
	response.writeHead(200, {'Content-type': 'text/html'});
	response.end('FLOPPY BUNNIES!!!');
});
server.listen(9999);
console.log('Server running at port AWESOME!(no, actually 9999.)');
