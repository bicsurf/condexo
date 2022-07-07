let buttonRegister = document.querySelector('#buttonRegister');

buttonRegister.addEventListener('click', () => {
    let name = document.getElementById("name").value;
    let surname = document.getElementById("surname").value;
    let date = document.getElementById("date").value;
    let city = document.getElementById("city").value;
    let nation = document.getElementById("nation").value;
    let address = document.getElementById("address").value;
    let postalCode = document.getElementById("postalCode").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let password_confirmation = document.getElementById("password_confirmation").value;

    let modalRegister = document.querySelector('#modalRegister');


    function prova() {
        if (name.length == "") {
            alert("Inserisci il tuo nome");
            return false;
        } else if (surname.length == "") {
            alert("Inserisci il tuo Cognome");
            return false;
        } else if (date.length == "") {
            alert("Inserisci la tua data di nascita");
            return false;
        } else if (city.length == "") {
            alert("Inserisci la tua città");
            return false;
        } else if (nation.length == "") {
            alert("Inserisci la tua nazione");
            return false;
        } else if (address.length == "") {
            alert("Inserisci il tuo indirizzo");
            return false;
        } else if (postalCode.length == "" || postalCode.length > 5) {
            alert("Inserisci un CAP valido");
            return false;
        } else if (phone.length == "" || phone.length > 10) {
            alert("Inserisci il tuo numero di cellulare valido");
            return false;
        } else if (email.length == "") {
            alert("Inserisci la tua email");
            return false;
        } else if (password.length == "") {
            alert("Inserisci la tua password");
            return false;
        } else if (password_confirmation.length == "") {
            alert("Le password sono diverse. Contralla che siano uguali");
            return false;
        } else {
            modalRegister.classList.toggle('hidden');
            return true;
        }
    }
    prova()
})

//Barra di ricerca degli utenti
// function search_user() {
// 	let input = document.getElementById('searchbar').value
// 	input=input.toLowerCase();
// 	let x = document.getElementsByClassName('users');

// 	for (i = 0; i < x.length; i++) {
// 		if (!x[i].innerHTML.toLowerCase().includes(input)) {
// 			x[i].style.display="none";
// 		}
// 		else {
// 			x[i].style.display="list-item";
// 		}
// 	}
// }