cat > nodejs_test.js <<'EOF' 
var http = require('http');
var server = http.createServer(function(req, res) {
  res.write("Hello, This is the Node.js Simple Web Server!\n");
  res.end();
}).listen(8080);
EOF
