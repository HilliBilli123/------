const links = document.querySelectorAll(".left__menu__link")
const content = document.querySelectorAll(".element")
links.forEach(element =>{
    element.addEventListener("click", (e) => {
        e.preventDefault()
        links.forEach(el =>{el.classList.remove("active")})
        e.target.classList.add("active")
        content.forEach(el =>{el.classList.remove("element-active")})
        content.forEach(el =>{
            if(e.target.id === el.id){
                el.classList.add("element-active")
            }
        })
    })
})