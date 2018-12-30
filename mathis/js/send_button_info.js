
function send_info(element_id) {
  // fileName : The file from which the user clicked.
  // refName  : The button/link they clicked.
  // let fileName = location.href.split("/").slice(-1); 
  // let fileName = window.location.pathname;
  // let refName  = event.srcElement.id;
  // alert(fileName + '\n' + refName);
  let url = window.location.pathname;
  let filename = url.substring(url.lastIndexOf('/')+1);
  alert(element_id);
};

