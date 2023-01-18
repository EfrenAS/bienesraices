document.addEventListener('DOMContentLoaded', function() {
  eventListeners();
  activeDarkMode();
});

function eventListeners() {
  const mobileMenu = document.querySelector('.mobile-menu');

  mobileMenu.addEventListener('click', showMenuResposive);
}

function showMenuResposive() {
  const navigation = document.querySelector('.navigation-main');

  navigation.classList.toggle('display-on');
}

function activeDarkMode () {
  const darkModebtn = document.querySelector('.dark-mode-btn');

  darkModebtn.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
  })
}