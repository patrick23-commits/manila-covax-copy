window.onload = ()=>{
    checkIfEmpty();
    let t1 = document.getElementById("search")
    t1.addEventListener("focus", removeUserNotFoundMessage)

    let t2 = document.getElementById("contact_search")
    t2.addEventListener("focus", removeUserNotFoundMessage)
    

    function checkIfEmpty() {
        let btn = document.getElementById("submit");
        btn.addEventListener("click",(e)=>{
            let search = document.getElementById("search")
            
            let contact_search = document.getElementById("contact_search")
            if(search.value == "" | contact_search.value ==""){
                if(search.value == "") {
                    search.style.border = "1.5px solid red"
                    search.style.borderRadius = "2.5px"
                }
                if(contact_search.value == ""){
                    contact_search.style.border = "1.5px solid red"
                    contact_search.style.borderRadius = "2.5px"
                    
                }
                e.preventDefault();
            }
        })
    }

    function removeUserNotFoundMessage(e) {
        target = e.target
        try {
            let message = document.getElementById("message")
            message.remove()
        }catch{

        }
        target.style.border = "1.5px solid black"
        


    }

   
    

}