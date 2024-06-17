const time = 3

function test(){
    const beforeLoad = document.getElementById("before-result")
    beforeLoad.classList.add("d-none")
    const afterLoad = document.getElementById("display-result")
    afterLoad.classList.remove("d-none")
}


setTimeout(test, time * 1000)