// ============= Barre latérale =============

// Sélectionnez tous les éléments de menu dans le DOM
const menuItems = document.querySelectorAll('.menu-item');

// Fonction pour supprimer la classe active de tous les éléments de menu
const changeActiveItem = () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    });
}

// Ajoutez un écouteur d'événements à chaque élément de menu
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        // Appelez la fonction pour supprimer la classe active de tous les éléments de menu
        changeActiveItem();

        // Ajoutez la classe active à l'élément de menu cliqué
        item.classList.add('active');

        // Gérez l'affichage de la notification popup en fonction de l'élément de menu cliqué
        if (item.id != 'notifications') {
            // Masquez la notification popup si l'élément de menu n'est pas 'notifications'
            document.querySelector('.notification-popup').style.display = 'none';
        } else {
            // Affichez la notification popup si l'élément de menu est 'notifications'
            document.querySelector('.notification-popup').style.display = 'block';
            
            // Masquez le compteur de notifications une fois que la notification popup est affichée
            document.querySelector('#notifications .notification-count').style.display = 'none';
        }
    });
});
