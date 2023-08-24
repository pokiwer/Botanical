const shows = document.querySelectorAll(".nav-item");
shows.forEach((show) => {
    show.addEventListener("click", function (event) {
        console.log(show.classList);
    });
});
