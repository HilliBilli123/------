const links = document.querySelectorAll(".left__menu__link")
const content = document.querySelectorAll(".panel__body__table")
const addButton = document.querySelector(".add")
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
                addButton.closest(".add__button__block").style.display="block"
                addButton.addEventListener("click",(e) =>{
                    e.preventDefault()
                    const addButtons = e.target.closest(".add__button__block")
                    const block = addButtons.querySelector(".form")
                    const blockContent = block.querySelector(".from__content__add")
                    // console.log(el.children)
                    let childs = el.children
                    let childss = childs[0].children
                    let childss1 = Array.from(childss)
                    childss1.shift()
                    // childss1.pop()
                    // childss1.pop()
                    // console.log(childss1)
                    blockContent.innerHTML = ""
                    blockContent.insertAdjacentHTML("beforeEnd",`<input name="table" value="${el.id}" style="display:none;"/>`)
                    childss1.forEach(element => {
                        console.log(element.innerHTML)
                        blockContent.append(element.innerHTML)
                        blockContent.insertAdjacentHTML("beforeEnd",`<input name="item[]"/>`)
                        block.style.display="flex"
                    })
                    blockContent.insertAdjacentHTML("beforeEnd",`<button class="add__button__block__a" type="submit">Добавить</button>`)
                })
            }
        })
    })
})
const editBtn = document.querySelectorAll(".icon-edit")
editBtn.forEach(element => {
    element.addEventListener("click", (e) => {
        e.preventDefault()
        const tableName = e.target.closest(".panel__body__table")
        const block = e.target.closest(".body__table__line")
        const childss = block.children
        const childs = Array.from(childss)
        const addBlc = e.target.closest(".table__title")
        console.log(addBlc)
        addBlc.insertAdjacentHTML("beforeEnd", `
            <form class="form" action="inc/edit.php" method="post">
                <div class="from__content__add">
                </div>
            </form>`)
        const blockAdd = addBlc.querySelector(".from__content__add")
        blockAdd.insertAdjacentHTML("beforeEnd", `<input name="id" value="${childs[0].innerHTML}"/>`)
        blockAdd.insertAdjacentHTML("beforeEnd", `<input name="table" value="${tableName.id}"/>`)
        childs.shift()
        // childs.pop()
        // childs.pop()
        childs.forEach(element => {
            console.log(element.innerHTML)
            blockAdd.insertAdjacentHTML("beforeEnd",`<input name="item[]" value="${element.innerHTML}"/>`)
        })
        blockAdd.insertAdjacentHTML("beforeEnd",`<button class="add__button__block__a" type="submit">Добавить</button>`)
        const open = addBlc.querySelector(".form")
        open.style.display="flex"
        console.log(childs)
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
}
const chek = document.querySelectorAll("#chek")

chek.forEach(element => {
    element.addEventListener("click", (e) => {
        const button = e.target.querySelector("button")
        button.click()
    })
})