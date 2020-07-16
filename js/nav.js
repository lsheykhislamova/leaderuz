const openMenu = document.querySelector('#show-menu')
const hideMenuIcon = document.querySelector('#hide-menu')
const sideMenu = document.querySelector('#nav-menu')

openMenu.addEventListener('click', function(){
  sideMenu.classList.add('active')
  hideMenuIcon.classList.remove('hide')
  openMenu.classList.add('hide')
  

})

hideMenuIcon.addEventListener('click', function(){
  sideMenu.classList.remove('active')
  hideMenuIcon.classList.add('hide')
  openMenu.classList.remove('hide')
})