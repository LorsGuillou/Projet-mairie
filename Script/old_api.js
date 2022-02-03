const {createClient} = supabase;

const supabaseUrl = "https://uroudurcvbmqadyecbhx.supabase.co"
const supabaseKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQzMTA0ODAzLCJleHAiOjE5NTg2ODA4MDN9.RJJFCJfRrgdv2FQvhjVzDQeYg6Wja2DROVOb1tS9yM0"
supabase = createClient(supabaseUrl, supabaseKey);
let name =    document.getElementById("nom").value;
async function insertData() {
    const {data, error} = await supabase
        .from("formulaire")
        .insert([
            {
                nom: document.getElementById("nom").value, 
                prenom: document.getElementById("prenom").value, 
                adresse: document.getElementById("adresse").value,
                email: document.getElementById("email").value,
                telephone: document.getElementById("telephone").value,
                message: document.getElementById("message").value,
                rgpd: document.getElementById("rgpd_clause").value,
            }
        ])
    console.log(data);
    console.log(error)
}

var send = document.getElementById("send");

send.addEventListener("click", insertData());