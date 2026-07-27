let header = document.querySelector("#header");

document.addEventListener("scroll", headerScrolling);

function headerScrolling () {
    
    if (window.scrollY >0) {
        header.classList.add("border", "border-border-header", "rounded-[50px]", "backdrop-blur-xl");
    } else {
        header.classList.remove("border", "border-border-header", "rounded-[50px]", "backdrop-blur-xl");
    }
}