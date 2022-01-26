const linksWide = document.getElementById("navigation_list_wide").getElementsByTagName("a");
const linksSmall = document.getElementById("navigation_list_small").getElementsByTagName("a");

for (let i = 0; (i < linksWide.length) && (i < linksSmall.length); i++) {
    if ((linksWide[i].href === location.href) && (linksSmall[i].href === location.href)) {
        linksWide[0].classList.remove("navigation_active");
        linksSmall[0].classList.remove("navigation_active");
        linksWide[i].classList.add("navigation_active");
        linksSmall[i].classList.add("navigation_active");
    } else if (location.href === "http://localhost/Projet-mairie/actus.php?id=" + i) {
        linksWide[0].classList.remove("navigation_active");
        linksSmall[0].classList.remove("navigation_active");
    }
}