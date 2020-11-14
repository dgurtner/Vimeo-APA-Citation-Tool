<?php

// so far, this is just the beginnings of a css light switch
// maybe I'll add more to this eventually

?>


<style type="text/css">

.onoffswitch {
  position: relative; 
  width: 45px;
  -webkit-user-select: none; 
  -moz-user-select: none; 
  -ms-user-select: none;
}
.onoffswitch-checkbox {
  display: none;
}
.onoffswitch-label {
  display: block; 
  overflow: hidden; 
  cursor: pointer;
  height: 20px; 
  padding: 0; 
  line-height: 20px;
  border: 2px solid #E3E3E3; 
  border-radius: 20px;
  background-color: #FFFFFF;
  transition: background-color 0.3s ease-in;
}
.onoffswitch-label:before {
  content: "";
  display: block; 
  width: 20px; 
  margin: 0px;
  background: #FFFFFF;
  position: absolute; 
  top: 0; 
  bottom: 0;
  right: 23px;
  border: 2px solid #E3E3E3; 
  border-radius: 20px;
  transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label {
  background-color: #49E845;
}
.onoffswitch-checkbox:checked + .onoffswitch-label, 
.onoffswitch-checkbox:checked + .onoffswitch-label:before {
   border-color: #49E845;
}
.onoffswitch-checkbox:checked + .onoffswitch-label:before {
  right: 0px; 
}

@media only screen and (max-width: 480px) {
  #rapper .onoffswitch,
  #rapper .admin {
    display: none !important;
  }
}

</style>

<p class="admin">ON/OFF (Admin Only!)</p>
<div class="onoffswitch">
  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked onclick="fullshutdown()">
  <label class="onoffswitch-label" for="myonoffswitch">
  <span class="onoffswitch-inner"></span>
  <span class="onoffswitch-switch"></span>
  </label>
</div>

