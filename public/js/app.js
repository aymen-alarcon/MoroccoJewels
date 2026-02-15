console.log("hi");

if (window.location.href.includes("/Client/Profile")) {
    let informationSection = document.getElementById("informationSection");
    let favoriteSection = document.getElementById("favoriteSection");
    let ordersSection = document.getElementById("ordersSection");
    let heartIcon = document.querySelector("#heartIcon");
    let personIcon = document.querySelector("#personIcon");
    let orderIcon = document.querySelector("#orderIcon");

    heartIcon.addEventListener("click", ()=>{
        ordersSection.classList.add("d-none");
        informationSection.classList.add("d-none");
        favoriteSection.classList.add("d-flex");
        favoriteSection.classList.remove("d-none");
        heartIcon.classList.add("active");
        personIcon.classList.remove("active");
        orderIcon.classList.remove("active");
    })

    personIcon.addEventListener("click", ()=>{
        favoriteSection.classList.add("d-none");
        ordersSection.classList.add("d-none");
        informationSection.classList.add("d-flex");
        informationSection.classList.remove("d-none");
        personIcon.classList.add("active");
        orderIcon.classList.remove("active");
        heartIcon.classList.remove("active");
    })

    orderIcon.addEventListener("click", ()=>{
        favoriteSection.classList.add("d-none");
        informationSection.classList.add("d-none");
        ordersSection.classList.add("d-flex");
        ordersSection.classList.remove("d-none");
        orderIcon.classList.add("active");
        personIcon.classList.remove("active");
        heartIcon.classList.remove("active");
    })
}