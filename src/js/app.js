document.addEventListener('DOMContentLoaded', function() {
  eventListeners();
});

function eventListeners() {
  const mobileMenu = document.querySelector('.mobile-menu');

  mobileMenu.addEventListener('click', showMenuResposive);
}

function showMenuResposive() {
  const navigation = document.querySelector('.navigation-main');

  navigation.classList.toggle('display-on');
  
}