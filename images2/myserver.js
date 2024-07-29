var h = require('http');

h.createServer(function (req, res)
 {

res.writeHead(200, {'Content-Type': 'text/html'});
res.write("Starting... JavaWeb Server .. ");
res.write("<h1>Sunil Web Server  is Ready</h1>");
res.write("<h3>Usefull Information </h3>");
res.end();
  
}).listen(8080); 