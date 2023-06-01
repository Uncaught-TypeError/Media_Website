// let cbg = document.querySelector(".contentbg");
// // console.log(cbg);
// let color = cbg.getAttribute("class")
// console.log(color == "bg-danger");
// let navbg = document.getElementById("navbg");
// navbg.classList.add(color);
// console.log(navbg);

let replybox = document.querySelectorAll(".reply");
    // console.log(replybox);
    let toggle = true;
    replybox.forEach((reply)=>{
        console.log(reply);
        reply.onclick = function (){
            if (toggle === true){
                let f = this.nextElementSibling;
                console.log((f.style.display = "block"));
                // console.log((f.style.display = "block"));
            }
            else{
                let f = this.nextElementSibling;
                console.log((f.style.display = "none"));
            }
            toggle = !toggle;
        }
    })
    window.onscroll = function(){
        if(window.scrollY > 200){
            navbg.classList.add('white')
        }else{
            navbg.classList.remove('white')
        }
    }
