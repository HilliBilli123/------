const slocks = document.querySelectorAll(".selected__popap")
const selectss = document.querySelector("#cars")
const classes = document.querySelector("#class")
const blockComponents = document.querySelectorAll("#componetW")
const input = document.querySelector("#pricesss")
const inputFull = document.querySelector("#fullPrice")
const option = selectss.querySelector("option:checked").dataset.priceCar
const option1 = classes.querySelector("option:checked").dataset.class
input.value = parseInt(option) + parseInt(option1)
inputFull.value = parseInt(option) + parseInt(option1)
// let tazz = ""
selectss.addEventListener("change", () => {
	const input = document.querySelector("#pricesss")
	const inputFull = document.querySelector("#fullPrice")
	const option = selectss.querySelector("option:checked").dataset.priceCar
	const option1 = classes.querySelector("option:checked").dataset.class
	input.value = parseInt(option) + parseInt(option1)
	inputFull.value = parseInt(option) + parseInt(option1)
	
})
classes.addEventListener("change", () => {
	const input = document.querySelector("#pricesss")
	const inputFull = document.querySelector("#fullPrice")
	const option = selectss.querySelector("option:checked").dataset.priceCar
	const option1 = classes.querySelector("option:checked").dataset.class
	input.value = parseInt(option) + parseInt(option1)
	inputFull.value = parseInt(option) + parseInt(option1)
	
})

blockComponents.forEach(elemet => {
	elemet.addEventListener("change", (e) => {
		const input = document.querySelector("#pricesss")
		const inputFull = document.querySelector("#fullPrice")
		if (e.target.checked) {
			console.log(e.target.dataset.components)
			tazz = parseInt(e.target.dataset.components)
			console.log(tazz)
			input.value = parseInt(input.value) + tazz
			inputFull.value = parseInt(input.value) + tazz
		}
		else{
			tazz = parseInt(e.target.dataset.components)
			console.log(tazz)
			input.value = parseInt(input.value) - tazz
			inputFull.value = parseInt(input.value) - tazz
		}
	})

})