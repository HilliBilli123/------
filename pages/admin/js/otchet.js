const buttonOtchet = document.querySelector(".print")
const block = document.querySelector(".otchet")
const contsnt = document.querySelectorAll(".panel__body__table:not(.welcome)")
contsnt.forEach(elem => {
    console.log(elem)
    buttonOtchet.addEventListener("click", (e) => {
            if (elem.style.display == "block") {
            e.preventDefault()
            const header = elem.querySelectorAll(".table__header__title")
            const links = elem.querySelectorAll(".body__table__line._table-color")
            // console.log()
            const linksArr = Array.from(links) 
            const headerArr = Array.from(header)
            headerArr.pop()
            headerArr.pop()
            linksArr.pop()
            linksArr.pop()
            console.log(headerArr)
            block.innerHTML = ""
            headerArr.forEach(elem =>{
                block.insertAdjacentHTML("beforeend",`<input name="title[]" value="${elem.innerHTML}"/>`)
            })
            let i = 1
            links.forEach(elements =>{
                const item = elements.querySelectorAll(".table__title")
                const items = Array.from(item)
                items.pop()
                items.pop()
                items.forEach(e =>{
                    block.insertAdjacentHTML("beforeend",`<input name="items${i}[]" value="${e.innerHTML}" />`)     
                })
                i++
            })
            // console.log(links)
            block.insertAdjacentHTML("beforeend",`<button class="printOtchetS" type="submit">Отчет</button>`)
            document.querySelector(".printOtchetS").click()
        }
    })
       
})
// buttonOtchet.addEventListener("click", (e) =>{
//     e.preventDefault()
//     const header = contsnt.querySelectorAll(".table__header__title")
//     const links = contsnt.querySelectorAll(".body__table__line._table-color")
//     // const linksArr = Array.from(links) 
//     const headerArr = Array.from(header)
//     headerArr.pop()
//     // headerArr.pop()
//     // linksArr.pop()
//     // linksArr.pop()
//     console.log(headerArr)
//     headerArr.forEach(elem =>{
//         block.insertAdjacentHTML("beforeend",`<input name="title[]" value="${elem.innerHTML}"/>`)
//     })
//     let i = 1
//     links.forEach(elements =>{
//         const item = elements.querySelectorAll(".table__title")
//         const items = Array.from(item)
//         items.pop()
//         // items.pop()
//         items.forEach(e =>{
//             block.insertAdjacentHTML("beforeend",`<input name="items${i}[]" value="${e.innerHTML}" />`)     
//         })
//         i++
//     })
//     console.log(links)
//     block.insertAdjacentHTML("beforeend",`<button class="printOtchetS" type="submit">Отчет</button>`)
//     document.querySelector(".printOtchetS").click()
// })