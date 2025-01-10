// Sélectionnez l'élément de notification des messages dans le DOM
const messagesNotification = document.querySelector('#message-notifications');

// Sélectionnez l'élément contenant la liste des messages dans le DOM
const messages = document.querySelector('.messages');

// Sélectionnez tous les éléments de message individuels dans la liste des messages
const message = messages.querySelectorAll('.message');

// Sélectionnez l'élément de recherche de messages dans le DOM
const messageSearch = document.querySelector('#message-search');

// Fonction de recherche de messages
const searchMessage = () => {
    // Obtenir la valeur du champ de recherche et la convertir en minuscules
    const val = messageSearch.value.toLowerCase();
    console.log(val);
    
    // Parcourir chaque élément de message
    message.forEach(chat => {
        // Utilisez querySelector pour accéder à l'élément 'h5' (nom) dans chaque message
        let name = chat.querySelector('h5').textContent.toLowerCase();
        
        // Vérifier si le nom contient la valeur de recherche
        if (name.indexOf(val) != -1) {
            chat.style.display = 'flex'; // Afficher le message s'il correspond à la recherche
        } else {
            chat.style.display = 'none'; // Masquer le message s'il ne correspond pas à la recherche
        }
    })
}

// Gérer le clic sur l'élément de notification des messages
messagesNotification.addEventListener('click', () => {
    // Mettre en surbrillance la carte des messages lorsqu'un message est cliqué
    messages.style.boxShadow = '0 0 1rem var(--color-primary)';
    messagesNotification.querySelector('.notification-count').style.display = 'none';
    setTimeout(() => {
        messages.style.boxShadow = 'none';
    }, 100);
})

// Gérer la saisie dans le champ de recherche de messages
messageSearch.addEventListener('keyup', searchMessage);
