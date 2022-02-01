require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


window.showPage = function(pageId){
    document.querySelectorAll('.subpage').forEach(item => {
        item.style.display = "none"
      })
      document.getElementById(pageId).style.display = "block"
}
