function myFunction() {
    links = document.getElementById('myLinks')
    hamburgerImg = document.getElementById("hamburgerIcon")
    if (links.style.display === 'block') {
      links.style.display = 'none'
      hamburgerImg.src = "media/icon/menu-bars.png"
    } else if (window.innerWidth < 900) {
      links.style.display = 'block'
      hamburgerImg.src = "media/icon/close.png"
    }
}