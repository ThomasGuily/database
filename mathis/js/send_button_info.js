
function send_info() {
  // fileName : The file from which the user clicked.
  // refName  : The button/link they clicked.
  let fileName = location.href.split("/").slice(-1); 
  let refName  = event.srcElement.id;
  alert(refName);
};

