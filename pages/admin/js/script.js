const links = document.querySelectorAll(".left__menu__link")
const content = document.querySelectorAll(".panel__body__table")
const addButton = document.querySelector(".add__button__block__a")
links.forEach(element =>{
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
                    console.log(el.children)
                    let childs = el.children
                    let childss = childs[0].children
                    let childss1 = Array.from(childss)
                    childss1.shift()
                    childss1.pop()
                    childss1.pop()
                    console.log(childss1)
                    block.insertAdjacentHTML("beforeEnd",`<input name="table" value="${el.id}" style="display:none;"/>`)
                    childss1.forEach(element => {
                        console.log(element.innerHTML)
                        block.append(element.innerHTML)
                        block.insertAdjacentHTML("beforeEnd",`<input name="item[]"/>`)
                        block.style.display="block"
                    })
                    block.insertAdjacentHTML("beforeEnd",`<button type="submit">Добавить</button>`)
                })
            }
        })
    })
})

