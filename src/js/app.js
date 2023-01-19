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
  const isSystemDarkMode = window.matchMedia('prefers-color-scheme: dark');

  if (isSystemDarkMode.matches) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
    console.log('Todo bien');
  }


  isSystemDarkMode.addEventListener('change', function() {
    if (isSystemDarkMode.matches) {
      document.body.classList.add('dark-mode');
    } else {
      document.body.classList.remove('dark-mode');
      //console.log('Todo bien');
    } 
  });

  darkModebtn.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
  })
}