
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

  window.location.href = url + "?w1=" + origin.fichier +
                               "&w2=" + oridin.id;

};

