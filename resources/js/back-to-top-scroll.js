document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector("#back-to-top");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 400) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    });

    btn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});
