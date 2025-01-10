//======= Personnalisation du thème =========

// Sélectionnez les éléments du DOM liés au thème
const theme = document.querySelector('#theme');
const themeModal = document.querySelector('.customize-theme');

// Sélectionnez les tailles de police
const fontSizes = document.querySelectorAll('.choose-size span');
var root = document.querySelector(':root');

// Sélectionnez les couleurs du thème
const colorPalette = document.querySelectorAll('.choose-color span');
const Bg1 = document.querySelector('.bg-1');
const Bg2 = document.querySelector('.bg-2');
const Bg3 = document.querySelector('.bg-3');

// Fonction pour ouvrir la modal de personnalisation du thème
const openThemeModal = () => {
    themeModal.style.display = 'grid';
}

// Fonction pour fermer la modal de personnalisation du thème
const closeThemeModal = (e) => {
    if (e.target.classList.contains('customize-theme')) {
        themeModal.style.display = 'none';
    }
}

// Ajoutez un écouteur d'événements pour fermer la modal lorsque l'utilisateur clique à l'extérieur
themeModal.addEventListener('click', closeThemeModal);

// Ajoutez un écouteur d'événements pour ouvrir la modal lorsqu'on clique sur l'élément de thème
theme.addEventListener('click', openThemeModal);

// ============ Polices ============
// Fonction pour supprimer la classe active des sélecteurs de taille de police
const removeSizeSelector = () => {
    fontSizes.forEach(size => {
        size.classList.remove('active');
    })
}

// Ajoutez un écouteur d'événements à chaque sélecteur de taille de police
fontSizes.forEach(size => {
    size.addEventListener('click', () => {
        removeSizeSelector();
        let fontSize;

        // Appliquez la taille de police en fonction de la classe du sélecteur cliqué
        if (size.classList.contains('font-size-1')) {
            fontSize = '10px';
            root.style.setProperty('----sticky-top-left', '5.4rem');
            root.style.setProperty('----sticky-top-right', '5.4rem');
        } else if (size.classList.contains('font-size-2')) {
            fontSize = '13px';
            root.style.setProperty('----sticky-top-left', '5.4rem');
            root.style.setProperty('----sticky-top-right', '-7rem');
        } else if (size.classList.contains('font-size-3')) {
            fontSize = '16px';
            root.style.setProperty('----sticky-top-left', '-2rem');
            root.style.setProperty('----sticky-top-right', '-17rem');
        }

        // Changez la taille de police de l'élément HTML racine
        document.querySelector('html').style.fontSize = fontSize;
    })
})

// Fonction pour supprimer la classe active des sélecteurs de couleur
const changeActiveColorclass = () => {
    colorPalette.forEach(colorPicker => {
        colorPicker.classList.remove('active');
    })
}

// Changez les couleurs primaires du thème
colorPalette.forEach(color => {
    color.addEventListener('click', () => {
        let primaryHue;

        // Appliquez la couleur primaire en fonction de la classe du sélecteur de couleur cliqué
        if (color.classList.contains('color-1')) {
            primaryHue = 214;
        } else if (color.classList.contains('color-2')) {
            primaryHue = 112;
        } else if (color.classList.contains('color-3')) {
            primaryHue = 31;
        } 

        // Ajoutez la classe active au sélecteur de couleur cliqué
        color.classList.add('active');

        // Changez la teinte de couleur primaire dans le CSS
        root.style.setProperty('--primary-color-hue', primaryHue);
    })
})

// Variables pour les couleurs de fond
let lightColor;
let whiteColor;
let darkColor;

// Fonction pour changer la couleur de fond en fonction de l'option de couleur de fond sélectionnée
const changeBG = () => {
    if (Bg1.classList.contains('active')) {
        // Si l'option d'origine est sélectionnée, réinitialisez les couleurs
        lightColor = '95%';
        whiteColor = '100%';
        darkColor = '17%';
    }

    root.style.setProperty('--light', lightColor);
    root.style.setProperty('--white', whiteColor);
    root.style.setProperty('--dark', darkColor);
}

// Ajoutez un écouteur d'événements pour l'option de revenir à la couleur d'origine
Bg1.addEventListener('click', () => {
    Bg1.classList.add('active');
    Bg2.classList.remove('active');
    Bg3.classList.remove('active');
    changeBG();
})

Bg2.addEventListener('click', () => {
    darkColor = '95%';
    whiteColor = '20%';
    lightColor = '15%';
    Bg2.classList.add('active');
    Bg1.classList.remove('active');
    Bg3.classList.remove('active');
    changeBG();
})

Bg3.addEventListener('click', () => {
    darkColor = '95%';
    whiteColor = '10%';
    lightColor = '0%';
    Bg3.classList.add('active');
    Bg1.classList.remove('active');
    Bg2.classList.remove('active');
    changeBG();
})


// JavaScript pour la redirection vers "notification.html"
document.addEventListener('DOMContentLoaded', function () {
    var notificationItems = document.querySelectorAll('.notification-popup .notification-item');

    notificationItems.forEach(function (item) {
        item.addEventListener('click', function () {
            // Redirection vers "notification.html" lors du clic
            window.location.href = 'notification.html';
        });
    });
});
