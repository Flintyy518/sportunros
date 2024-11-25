<div class="join-us-modal">
    <div class="join-us-modal__inner-wrapper">

        <div class="join-us-modal__header">
            <div class="join-us-modal__title">Подать заявку</div>
            <div class="join-us-modal__close">
                <img src="<?php echo get_image_url('X-ICN.svg', 'general'); ?>" alt="Закрыть">
            </div>
        </div>

        <div class="join-us-modal__subtitle">
            Заполните и отправьте форму, после чего мы с Вами свяжемся. 
        </div>

        <div class="join-us-modal__fields">
            <input type="text" class="join-us-modal__input join-us-modal__input--last" placeholder="Фамилия">
            <input type="text" class="join-us-modal__input join-us-modal__input--first" placeholder="Имя">
            <input type="text" class="join-us-modal__input join-us-modal__input--patronymic" placeholder="Отчество">
            <input type="tel" class="join-us-modal__input join-us-modal__input--phone" placeholder="Мобильный">
            <input type="email" class="join-us-modal__input join-us-modal__input--email" placeholder="Адрес электронной почты">
            <input type="text" class="join-us-modal__input join-us-modal__input--doc" placeholder="Серия и номер документа">

            <div class="dp__main dp__theme_light join-us-modal__input join-us-modal__input--dp">
                <div class="dp__input_wrap">
                    <input type="text" class="join-us-modal__input" id="birthDate" placeholder="Дата рождения">
                    <div id="calendarContainer" class="join-us-modal__calendar"></div>
                </div>
            </div>

            <select id="health-group" name="health-group" class="join-us-modal__input join-us-modal__input--health">
                <option value="health-group-has-children">Выберите группу здоровья</option>
                <option value="group1" class="health__option">Основная мед. группа (I группа)</option>
                <option value="group2" class="health__option">Подготов. мед. группа (II группа)</option>
                <option value="group3" class="health__option">Специальная подгруппа «А» (III группа)</option>
                <option value="group4" class="health__option">Специальная подгруппа «Б» (IV группа)</option>
            </select>

            <input type="text" class="join-us-modal__input join-us-modal__input--reg" placeholder="Место прописки">
            <input type="text" class="join-us-modal__input join-us-modal__input--curr" placeholder="Место проживания">

            <select id="status" name="status" class="join-us-modal__input join-us-modal__input--status">
                <option value="">Выберите статус</option>
                <option value="employee">Сотрудник</option>
                <option value="student">Студент</option>
                <option value="representative">Представитель организации</option>
            </select>

            <form class="upload-field__box join-us-modal__drop-zone join-us-modal__input--clickable">
                <form action="#" enctype="multipart/form-data" method="post">
                    <input id="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="fileToUpload" type="file" /> 
                    <button class="join-us-modal__btn-upload join-us-modal__btn-upload-success" name="submit" type="submit"> Загрузите фото </button>
                </form>
            </form>

            <input type="text" class="join-us-modal__input join-us-modal__input--org" placeholder="Организация">
        </div>

        <div class="join-us-modal__agreement">
            <input type="checkbox" name="agreement" id="join-us-agreement-checkbox" aria-label="Согласие на обработку персональных данных">
            <label for="join-us-agreement-checkbox"><div class="join-us-agreement-checkmark"></div></label>
            <div class="join-us-privacy">
                <span class="join-us-agreement__title">Заполняя форму, вы соглашаетесь на </span>
                <a href="#" class="join-us-agreement__link">использование ваших данных</a> 
            </div>
        </div>
        
        <button class="join-us-modal__submit ui-btn join-us-modal__submit--disabled">Отправить</button>
    </div>
</div>
