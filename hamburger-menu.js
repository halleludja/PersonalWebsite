document.addEventListener('DOMContentLoaded', () => {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const navList = document.querySelector('.nav-list');
  
    hamburgerBtn.addEventListener('click', () => {
      navList.classList.toggle('active');
    });
  });  