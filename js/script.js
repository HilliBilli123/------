const button = document.querySelectorAll(".order__menu__links")
const order = document.querySelectorAll(".order__block")
const menu = document.querySelectorAll(".order__menu__links")
button.forEach(element => {
    order.forEach(e => {
            element.addEventListener("click", (baha) =>{
                e.classList.remove("_active")
                if (e.id === baha.target.id) {
                    e.classList.add("_active")
                }
            })
    })
    menu.forEach(e => {
        element.addEventListener("click", (baha) =>{
            e.classList.remove("menu__links__active")
            if (e.id === baha.target.id) {
                e.classList.add("menu__links__active")
            }
        })
    })
})

const aboutBtn = document.querySelectorAll(".about__menu__links")
const about = document.querySelectorAll(".about__block")
const aboutActive = document.querySelectorAll(".about__menu__links")
aboutBtn.forEach(element => {
    about.forEach(e => {
            element.addEventListener("click", (baha) =>{
                e.classList.remove("about__active")
                if (e.id === baha.target.id) {
                    e.classList.add("about__active")
                }
            })
    })
    aboutActive.forEach(e => {
        element.addEventListener("click", (baha) =>{
            e.classList.remove("about__menu__active")
            if (e.id === baha.target.id) {
                e.classList.add("about__menu__active")
            }
        })
    })
})
const year = document.querySelector("option:checked")

const gode = document.querySelectorAll("#gode")
gode.forEach(el => {
    el.value = year.className
})

const select = document.querySelectorAll("select")
select.forEach(element =>{
    element.addEventListener("change",(e) =>{
        const year = document.querySelector("option:checked")
        const gode = document.querySelectorAll("#gode")
        gode.forEach(el => {
            console.log(year.className)
            el.value = year.className
        })
       
    })
})
