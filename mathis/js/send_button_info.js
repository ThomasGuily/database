
function send_info(params) {
  // This function should be called with a list of three
  // parameters, in the following order:
  //    [element_id, origin, destination]

  // Origin constructor:
  function Origin(id, fichier) {
    this.id   = id,
    this.file = fichier
  }
  
  const origin = new Origin(params[0], params[1]);
  const url    = params[2];

  httpc.open("POST", url, true);
  httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  httpc.setRequestHeader("Content-Length", [origin.id, origin.file].length);
  // POST request MUST have a Content-Length header (as per HTTP/1.1)

  httpc.onreadystatechange = function() { //Call a function when the state changes.
    if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
      alert(httpc.responseText); // some processing here, or whatever you want to do with the response
    }
  };

  httpc.post([origin.id, origin.file]);

};

