const links = document.querySelectorAll(".left__menu__link")
const content = document.querySelectorAll(".panel__body__table")
const addButton = document.querySelector(".add__button__block")
links.forEach(element => {
    // links.forEach(el =>{el.classList.remove("active")})
    // content.forEach(el =>{el.style.display="none"})
    element.addEventListener("click", (e) => {
        e.preventDefault()
         links.forEach(el =>{el.classList.remove("active")})
    content.forEach(el =>{el.style.display="none"})
        content.forEach(el =>{
            if(e.target.id === el.id){
                e.target.classList.add("active")
                el.style.display="block"
                addButton.style.display="block"
            }
        })
    })
})
windows = document.querySelectorAll(".form")
windows.forEach(element =>{
    element.addEventListener("click", (e) =>{
        if(e.target.style.display === "flex"){
            e.target.style.display = "none"
        }
    })
})

window.onload = function() {
    const visibilitis = document.querySelectorAll(".left__menu__block")
    const work = document.querySelector("#work")
    console.log(work.innerHTML)
    if(work.innerHTML === "Продавец"){
        document.querySelector(".admin__left__menu").style.display="none"
        document.querySelector(".welcome").style.display="none"
        document.querySelectorAll("#orders")[1].style.display="block"
        const add = document.querySelector(".add__button__block")
        add.style.display="block"
        add.querySelector(".add").style.display="none"       
    }
    if(work.innerHTML === "Бухгалтер"){
        const chids = document.querySelectorAll(".left__menu__link")
        chids.forEach(elem => {
            elem.closest(".left__menu__block").style.display = "none"
            if ((elem.id == "orders")) {
                elem.closest(".left__menu__block").style.display="block"
            }
              if ((elem.id == "testdrive")) {
                elem.closest(".left__menu__block").style.display="block"
            }
              if ((elem.id == "repair")) {
                elem.closest(".left__menu__block").style.display="block"
            }
            elem.closest(".admin__left__menu").style.justifyContent="space-around"
        })     
    }
    if(work.innerHTML === "Механик"){
        document.querySelector(".admin__left__menu").style.display="none"
        document.querySelector(".welcome").style.display="none"
        document.querySelectorAll("#repair")[1].style.display="block"
        const add = document.querySelector(".add__button__block")
        add.style.display="block"
        add.querySelector(".add").style.display="none"       
    }
    if(work.innerHTML === "Тест-драйв"){
        document.querySelector(".admin__left__menu").style.display="none"
        document.querySelector(".welcome").style.display="none"
        document.querySelectorAll("#testdrive")[1].style.display="block"
        const add = document.querySelector(".add__button__block")
        add.style.display="block"
        add.querySelector(".add").style.display="none"       
    }
}
const chek = document.querySelectorAll("#chek")

chek.forEach(element => {
    element.addEventListener("click", (e) => {
        const button = e.target.querySelector("button")
        button.click()
    })
})

const add = document.querySelectorAll(".add")
add.forEach(elem => {
    elem.addEventListener("click", (element) => {
        element.preventDefault()
        const form = element.target.closest(".panel__body__table")
        const addForm = form.querySelector("form").style.display="flex"
        // console.log(addForm)
        // form.querySelector("form").style.display="flex"
    })
})

const edit = document.querySelectorAll(".icon-edit")
edit.forEach(elem => {
    elem.addEventListener("click", element => {
        element.preventDefault()
        const form = element.target.closest(".table__title")
        const editForm = form.querySelector("form").style.display="flex"
    })
})