
/* FUNÇÃO PARA EXIBIR OU ESCONDER SUBMENUS DO SIDEBAR - COLLAPSE */
function toggleSubMenu(id) {
  var submenu = document.getElementById(id);
  submenu.classList.toggle('active');
}

document.addEventListener('click', function(event) {
  var submenus = document.querySelectorAll('.submenu');
  submenus.forEach(function(submenu) {
    if (event.target.closest('.btn-sidebar-link') !== submenu.previousElementSibling) {
      submenu.classList.remove('active');
    }
  });
});
