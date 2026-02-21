console.log("hi");

if (window.location.href.includes("/Home/Collection")) {
    document.querySelectorAll('.filter-input').forEach(input => {
        input.addEventListener('change', function () {
            document.getElementById('filterForm').submit();
        });
    });
}

if (window.location.href.includes("/Client/Profile")) {
    let informationSection = document.getElementById("informationSection");
    let favoriteSection = document.getElementById("favoriteSection");
    let ordersSection = document.getElementById("ordersSection");
    let notificationsSection = document.getElementById("notificationsSection");
    let heartIcon = document.querySelector("#heartIcon");
    let personIcon = document.querySelector("#personIcon");
    let orderIcon = document.querySelector("#orderIcon");
    let notificationIcon = document.querySelector("#notificationIcon");

    heartIcon.addEventListener("click", ()=>{
        ordersSection.classList.add("d-none");
        informationSection.classList.add("d-none");
        favoriteSection.classList.add("d-flex");
        favoriteSection.classList.remove("d-none");
        notificationsSection.classList.add("d-none");
        heartIcon.classList.add("active");
        personIcon.classList.remove("active");
        orderIcon.classList.remove("active");
        notificationIcon.classList.remove("active")
    })

    personIcon.addEventListener("click", ()=>{
        notificationsSection.classList.add("d-none");
        favoriteSection.classList.add("d-none");
        ordersSection.classList.add("d-none");
        informationSection.classList.add("d-flex");
        informationSection.classList.remove("d-none");
        personIcon.classList.add("active");
        orderIcon.classList.remove("active");
        heartIcon.classList.remove("active");
        notificationIcon.classList.remove("active")
    })

    orderIcon.addEventListener("click", ()=>{
        notificationsSection.classList.add("d-none");
        favoriteSection.classList.add("d-none");
        informationSection.classList.add("d-none");
        ordersSection.classList.add("d-flex");
        ordersSection.classList.remove("d-none");
        orderIcon.classList.add("active");
        personIcon.classList.remove("active");
        heartIcon.classList.remove("active");
        notificationIcon.classList.remove("active")
    })

    notificationIcon.addEventListener("click", ()=>{
        notificationsSection.classList.add("d-flex");
        notificationsSection.classList.remove("d-none");
        favoriteSection.classList.add("d-none");
        informationSection.classList.add("d-none");
        ordersSection.classList.add("d-none");
        orderIcon.classList.remove("active");
        personIcon.classList.remove("active");
        heartIcon.classList.remove("active");
        notificationIcon.classList.add("active")
    })
}

if (window.location.href.includes("/Client/Cart")) {
    let totalPrice = 0;
    document.querySelectorAll(".price").forEach(price => {
        totalPrice += Number(price.innerHTML) 
    });

    document.getElementById("placeHolder").innerHTML = totalPrice.toFixed(2);
}