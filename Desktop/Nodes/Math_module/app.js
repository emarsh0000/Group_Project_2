var http = require('http');
var fs = require('fs');
var mylib = require('../library/mylib')
console.log(mylib.add(2,3));
server = http.createServer(function (request, response){
  response.writeHead(200, {'Content-type': 'text/html'});
  console.log('Request', request.url);
  if(request.url === '/cars'){
    fs.readFile('./cars.html', 'utf8', function (errors, contents){
      response.write(contents); 
      response.end();
    });
  } else if(request.url === '/cats'){
    fs.readFile('./cats.html', 'utf8', function (errors, contents){
      response.write(contents);
      response.end();
    });
  } else if(request.url === '/form'){
    fs.readFile('./form.html', 'utf8', function (errors, contents){
      response.write(contents);
      response.end();
    });
  } else if(request.url === '/kayak.jpg'){
   		console.log('someone wants to see a picture!')
   		fs.readFile('./kayak.jpg', function(errors, contents){
   			response.write(contents);
   			response.end();
   		})
    }

  else {
    response.end('File not found!!!');
  }
});
server.listen(9990
	 );
console.log('Server running at port 9990');