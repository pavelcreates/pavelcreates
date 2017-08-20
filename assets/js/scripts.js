var mWrap = document.getElementById('m-wrapper');
var total = Math.floor(mWrap.scrollHeight / 34);
var pageName = "Pavel Ganapolsky"

for(var i = 0; i <= total; i++){
  mWrap.innerHTML += '<div class="marquee3k" data-speed="0.5"><span>' +
  pageName +
  '</span></div>' +
  '<div class="marquee3k" data-speed="0.5" data-reverse="true"><span>' +
  pageName +
  '</span></div>';
}

function mBack(page) {
  document.getElementsByClassName('marquee3k_copy').innerHTML = page;
}
