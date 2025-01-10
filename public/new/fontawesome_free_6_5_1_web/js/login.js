document.addEventListener("DOMContentLoaded", function() {
    const users = [
        { matricule: "123456", password: "password1" },
        { matricule: "789012", password: "password2" },
        { matricule: "345678", password: "password3" },
        { matricule: "901234", password: "password4" }
    ];

    const form = document.querySelector("form");
    const matriculeInput = document.getElementById("matricule");
    const passwordInput = document.getElementById("password");
    const errorMessages = document.querySelectorAll(".error");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const matricule = matriculeInput.value.trim();
        const password = passwordInput.value.trim();
        let isValid = false;

        for (let i = 0; i < users.length; i++) {
            if (users[i].matricule === matricule && users[i].password === password) {
                isValid = true;
                break;
            }
        }

        if (isValid) {
            window.location.href = "accueil.html";
        } else {
            errorMessages.forEach(msg => {
                msg.textContent = "Matricule ou mot de passe incorrect";
                msg.style.color = "red";
            });
        }
    });
});
