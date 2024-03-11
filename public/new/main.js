//sidebar
const menuItems = document.querySelectorAll('.menu-item');

// Message
const messagesNotification = document.querySelector('#message-notifications');
const messages = document.querySelector('.messages');
const message = messages.querySelectorAll('.message');
const messageSearch = document.querySelector('#message-search');

// theme
const theme = document.querySelector('#theme');
const themeModal = document.querySelector('.customize-theme');
const fontSizes = document.querySelectorAll('.choose-size span');
var root = document.querySelector(':root');

// Colors
const colorPalette = document.querySelectorAll('.choose-color span');
const Bg1 = document.querySelector('.bg-1');
const Bg2 = document.querySelector('.bg-2');
const Bg3 = document.querySelector('.bg-3');

// ============= Side Bar =============

//remove active class from all menu items
const changeActiveItem = () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
}

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        changeActiveItem();
        item.classList.add('active');
        if (item.id != 'notifications') {
            document.querySelector('.notification-popup').style.display = 'none';
        }
        else {
            document.querySelector('.notification-popup').style.display = 'block';
            document.querySelector('#notifications .notification-count').style.display = 'none';
        }
    }
    )
})

// ============ Message ============
// searches chats
const searchMessage = () => {
    const val = messageSearch.value.toLowerCase();
    console.log(val);
    message.forEach(chat => {
        let name = chat.querySelectorAll('h5').textContent.toLowerCase();
        if (name.indexOf(val) != -1) {
            chat.style.display = 'flex';
        }
        else {
            chat.style.display = 'none';
        }
    })
}

// search chat
messageSearch.addEventListener('keyup', searchMessage);

// hightlight messages card when messsages menu item is clicked
messagesNotification.addEventListener('click', () => {
    messages.style.boxShadow = '0 0 1rem var(--color-primary)';
    messagesNotification.querySelector('.notification-count').style.display = 'none';
    setTimeout(() => {
        messages.style.boxShadow = 'none';
    }, 100);
})


// Theme customization

// open modal
const openThemeModal = () => {
    themeModal.style.display = 'grid';
}

// close modal
const closeThemeModal = (e) => {
    if (e.target.classList.contains('customize-theme')) {
        themeModal.style.display = 'none';
    }
}

themeModal.addEventListener('click', closeThemeModal);

theme.addEventListener('click', openThemeModal);

// ============ Fonts ============
// remove active class from span or font size selectors
const removeSizeSelector = () => {
    fontSizes.forEach(size => {
        size.classList.remove('active');
    })
}

fontSizes.forEach(size => {

    size.addEventListener('click', () => {
        removeSizeSelector();
        let fontSize;
        size.classList.toggle('active');

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

        // change font size of the root html element
        document.querySelector('html').style.fontSize = fontSize;
    })


})


// change primary colors
colorPalette.forEach(color => {
    color.addEventListener('click', () => {
        let primaryHue;

        if (color.classList.contains('color-1')) {
            primaryHue = 214;
        } else if (color.classList.contains('color-2')) {
            primaryHue = 112;
        } else if (color.classList.contains('color-3')) {
            primaryHue = 31;
        } 
        root.style.setProperty('--primary-color-hue', primaryHue);
    })
})

// background
let lightColor;
let whiteColor;
let darkColor;

// changes background color
const changeBG = () => {
    root.style.setProperty('--light', lightColor);
    root.style.setProperty('--white', whiteColor);
    root.style.setProperty('--dark', darkColor);
}

Bg1.addEventListener('click', () => {
    // add active class
    B1.classList.add('active');
    // remove active class from the others
    Bg2.classList.remove('active');
    Bg3.classList.remove('active');
    // remove customized 
    window.location.reload();
})

Bg2.addEventListener('click', () => {
    darkColor = '95%';
    whiteColor = '20%';
    lightColor = '15%';

    // add active class
    Bg2.classList.add('active');
    // remove active class from the others
    Bg1.classList.remove('active');
    Bg3.classList.remove('active');
    changeBG();
})

Bg3.addEventListener('click', () => {
    darkColor = '95%';
    whiteColor = '10%';
    lightColor = '0%';

    // add active class
    Bg3.classList.add('active');
    // remove active class from the others
    Bg1.classList.remove('active');
    Bg2.classList.remove('active');
    changeBG();
})