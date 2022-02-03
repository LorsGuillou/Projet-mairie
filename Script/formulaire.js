const {createClient} = supabase;

const supabaseUrl = "https://uroudurcvbmqadyecbhx.supabase.co"
const supabaseKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQzMTA0ODAzLCJleHAiOjE5NTg2ODA4MDN9.RJJFCJfRrgdv2FQvhjVzDQeYg6Wja2DROVOb1tS9yM0"
supabase = createClient(supabaseUrl, supabaseKey);

const form = document.querySelector("#formulaire");

form.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formInputs = form.querySelectorAll("input, textarea")

    let submission = {};

    formInputs.forEach(element => {
        const {value, name} = element;
        if (value) {
            submission[name] = value;
        }
    });
    const {error, data} = await supabase.from("form").insert([submission])
    console.log({error, data})
    if (error) {
        alert("AUTODESTRUCTION DANS 3... 2... 1...");
    } else {
        alert("MERCI POUR VOTRE COOPERATION, MORTEL")
    }
    formInputs.forEach(element => element.value = "")
});

const rgpd = document.getElementById("rgpd_clause");
const bouton = document.getElementById("envoyer"); 

if (rgpd.checked == false) {
    rgpd.addEventListener("click", () => {
        bouton.disabled = false;
        bouton.classList.toggle("gris");
        bouton.classList.toggle("bouton");
    });
}