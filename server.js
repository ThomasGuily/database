/* 
 * University of Mons
 * Faculty of Engineering
 * BAB3 IGhttp://localhost:8888/
 * Course: Data Bases & Big Data
 * All rights reserved.
 */

const http = require('http');

onRequest = function(request, response){
  console.log('Request made.');
};

http
  .createServer(onRequest)
  .listen(8888);
console.log('Server running...');