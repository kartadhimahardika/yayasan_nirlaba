window.addEventListener("load", () => {
    const toast = document.getElementById("toast-success");
    if (!toast) return;

    // show animation
    setTimeout(() => {
        toast.classList.remove("opacity-0", "-translate-y-5");
    }, 50);

    // auto hide
    setTimeout(() => {
        toast.classList.add("opacity-0", "-translate-y-5");
        setTimeout(() => toast.remove(), 500);
    }, 2500);
});
