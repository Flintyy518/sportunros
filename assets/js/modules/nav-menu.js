let datePicker;

document.addEventListener('DOMContentLoaded', function() {

    // === Переменные для бургер-меню и навигационного меню ===
    const burgerMenu = document.querySelector('.header__nav-burger');
    const navMenu = document.querySelector('.header__nav-menu');
    let menuMoving = false;
    let isMobileView = window.innerWidth < 1200;

    // === Логика открытия/закрытия бургер-меню ===
    function toggleMenu() {
        if (menuMoving) return;
        menuMoving = true;

        setTimeout(() => { 
            menuMoving = false;
        }, 400);

        const isOpen = burgerMenu.classList.contains('is-open');
        
        if (isOpen) {
                closeJoinUsModal();
                setTimeout(() => navMenu.style.display = 'none', 400);
            } else {
            navMenu.style.display = 'flex';
        }

        setTimeout(() => { 
                burgerMenu.classList.toggle('is-open');
                navMenu.classList.toggle('is-open');
            });
        }

    // === Инициализация меню на основе начального разрешения ===
    function initializeMenu() {
        if (window.innerWidth >= 1200) {
            navMenu.style.display = 'flex';
            burgerMenu.classList.remove('is-open');
            navMenu.classList.remove('is-open');
        } else {
            navMenu.style.display = 'none';
        }
    }

    // === Обработчик для бургер-меню ===
    if (burgerMenu && navMenu) {
        burgerMenu.addEventListener('click', function() {
            if (window.innerWidth < 1200) {
                toggleMenu();
            }
        });

        initializeMenu();

        window.addEventListener('resize', function() {
            const currentIsMobileView = window.innerWidth < 1200;
            if (currentIsMobileView !== isMobileView) {
                isMobileView = currentIsMobileView;
                initializeMenu();
            }
        });
    } else {
        console.warn('Бургер-меню или навигационное меню не найдено');
    }

    // === Клонирование элемента даты при ширине < 1200px ===
    const dateItem = document.querySelector('.menu-item--date');
    if (dateItem && !navMenu.querySelector('.menu-item--date-cloned')) {
        const clonedDateItem = dateItem.cloneNode(true);
        clonedDateItem.classList.add('menu-item--date-cloned');
        navMenu.insertBefore(clonedDateItem, navMenu.firstChild);
    }

    // === Обработчики для подменю ===
    document.querySelectorAll('.menu-item--has-dropdown').forEach(function(menuItem) {
        const submenu = menuItem.querySelector('.menu-item__dropdown');

        function isDesktop() {
            return window.innerWidth >= 1200;
        }

        menuItem.addEventListener('mouseenter', function() {
            if (isDesktop() && submenu) {
                submenu.style.display = 'flex';
            }
        });

        menuItem.addEventListener('mouseleave', function() {
            if (isDesktop() && submenu) {
                submenu.style.display = 'none';
            }
        });

        menuItem.addEventListener('click', function(e) {
            if (!isDesktop()) {
                e.preventDefault();
                menuItem.classList.toggle('is-open');
            }
        });
    });

    window.addEventListener('resize', function() {
        document.querySelectorAll('.menu-item__dropdown').forEach(function(submenu) {
            submenu.style.display = '';
        });
    });

    // === Модальное окно "Вступить в члены" ===
    const joinUsBtn = document.getElementById('joinUsBtn');
    const joinUsModal = document.querySelector('.join-us-modal');
    const joinUsOverlay = document.createElement('div');
    const closeBtn = document.querySelector('.join-us-modal__close');

    if (joinUsBtn && joinUsModal && joinUsOverlay) {
        joinUsBtn.addEventListener('click', function() {
            joinUsModal.classList.toggle('is-visible');
            joinUsOverlay.classList.toggle('is-visible');
        });

        closeBtn.addEventListener('click', () => { 
            closeJoinUsModal();
        });
    } 

    // === Air Datepicker  === 
    const birthDate = document.getElementById('birthDate');

    if (birthDate) {
        console.log(birthDate);
        
        datePicker = new AirDatepicker(birthDate, {
            view: 'months',
            minView: 'months',
            dateFormat: 'MMMM yyyy',
            buttons: ['today', 'clear'] 
        });
    } else {
        console.warn('Элемент для даты рождения не найден.');
    } 

    function closeJoinUsModal () {
        joinUsModal.classList.remove('is-visible');
    }
});











// // === Логика календаря Flatpickr  для выбора даты рождения === 
// const birthDate = document.getElementById('birthDate');

// if (birthDate) {

//     flatpickr("#birthDate", {
//         dateFormat: "d.m.Y",
//         locale: "ru",
//         maxDate: "today",
//         defaultDate: "today",
//         altInput: true,
//         altFormat: "d F Y",
//         altInputClass: "join-us-modal__input--alt",
//         disableMobile: true,
//     });
// } 

    // === Логика календаря FullCalendar для мероприятий ===
/*     const joinUsDateInput = document.getElementById('joinUsDate');
    const calendarContainer = document.getElementById('calendarContainer');

    if (joinUsDateInput && calendarContainer) {
        console.log('Элементы найдены: Инициализация календаря FullCalendar');

        let calendar = new FullCalendar.Calendar(calendarContainer, {
            // plugins: [ FullCalendar.dayGridPlugin ],
            initialView: 'dayGridMonth',
            locale: 'ru',
            selectable: true,
            dateClick: function(info) {
                joinUsDateInput.value = info.dateStr;
                calendarContainer.classList.remove('is-visible');
            }
        });
        console.log("Check", calendar);
        calendar.render();

        joinUsDateInput.addEventListener('focus', function() {
            console.log('Поле даты получило фокус, показываем календарь');
            
            calendarContainer.classList.add('is-visible');
        });

        document.addEventListener('click', function(e) {
            if (!calendarContainer.contains(e.target) && e.target !== joinUsDateInput) {
                calendarContainer.classList.remove('is-visible');
            }
        });
    } else {
        console.warn('Элементы для календаря не найдены.');
    } */