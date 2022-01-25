let adresse = document.getElementById("adresse");
let wrapper = document.getElementById("wrapper");

adresse.addEventListener("input", displayList);

function displayList() {
    fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=5")
    .then(response => response.json())
    .then(data => {
        let result = data.features;
        
        wrapper.innerHTML = "";

        if (adresse.value) {
            wrapper.innerHTML = "";
            result.forEach(element => {
                let li = document.createElement("li");
                wrapper.appendChild(li);
                li.innerText = element.properties.label;
                li.addEventListener("click", ()=>{
                    wrapper.innerHTML = "";
                    adresse.value = element.properties.label;
                })
                wrapper.appendChild(li);
            });
        } else {
            wrapper.innerHTML = "";
        }
    });
}

// adresse.addEventListener("input", function() {
//     if (adresse.value.length > 0) {
//         fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6")
//             .then(response => response.json())
//             .then(data => {let result = data.features;
        
//             wrapper.innerHTML = "";
//             if (adresse.value) {
//                 result.forEach(element => {
//                     let li = document.createElement("li");
//                     li.innerText = element.properties.label;

//                     wrapper.appendChild(li);
//                     li.addEventListener("click", displayAdresse());

//                     // function displayAdresse() {
//                     //     wrapper.innerHTML = "";
//                     //     adresse.value = li.innerText;
//                     // }
//                 });
//                 wrapper.appendChild(li);
               
//             } else {
//                 wrapper.innerHTML = "";
//             };
//         });
//     };
// });
