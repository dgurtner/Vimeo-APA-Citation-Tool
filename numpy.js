function fullshutdown() {
  setTimeout(actuallyshutdown, 400);
}
function actuallyshutdown() {
  document.getElementById("switch").innerHTML = "body{background-color:#000!important;transition:background-color 0.5s;}body*{display:none!important;}";
  document.getElementById("rapper").innerHTML = "<div id='numpy'><p> </p><p>The Citation Tool is now shut down.</p><p>Give us a call if you need it turned back on.</p><p>619.849.2200 <span>|</span></p></div>";
}
