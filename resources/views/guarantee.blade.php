@extends('layouts.app')

@section('title', 'Гарантія')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <h2 class="fw-bolder">Зміст</h2>

            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#item-1">Повернення товару</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ms-3 my-1" href="#item-1-1">Як повернути товари прадавця Brama?</a>
                        <a class="nav-link ms-3 my-1" href="#item-1-2">Як повернути товари інших продавців?</a>
                    </nav>
                    <a class="nav-link" href="#item-2">Гарантійне обслуговування</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ms-3 my-1" href="#item-2-1">Які товари підлягають гарантійному ремонту?</a>
                        <a class="nav-link ms-3 my-1" href="#item-2-2">Куди звернутись по гарантійне обслуговування?</a>
                        <a class="nav-link ms-3 my-1" href="#item-2-3">У яких випадках мені можуть відмовити в гарантійному обслуговувані?</a>
                    </nav>
                </nav>
            </nav>
        </div>

        <div class="col-9">
            <h1 class="fw-bolder mb-3">Гарантія</h1>

            <div data-bs-spy="scroll" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                <div id="item-1">
                    <h4>Повернення товару</h4>

                    <p>При купівлі товару в Brama ми гарантуємо запебзечення права споживачів при придбанні непродовольчого товару належної якості:</p>

                    <ul>
                        <li>обміняти товар належної якості на аналогічний, якщо куплений товар не підійшов за формою, габаритами, фасоном, кольором, розміром або з інших причин не може бути використаний за призначенням;</li>
                        <li>придбати будь-які інші товари з наявного асортименту з відповідним перерахуванням вартості, якщо відсутній аналогічний товар;</li>
                        <li>здійснити обмін товару на аналогічний при першому ж надходженні відповідного товару в продаж;</li>
                        <li>розірвати договір та одержати назад гроші у розмірі вартості повернутого товару.</li>
                    </ul>

                    <p><strong>Строк обміну:</strong> протягом 14 днів, не рахуючи дня купівлі.</p>

                    <p><strong>Умова обміну:</strong></p>

                    <ul>
                        <li>якщо товар не використовувався;</li>
                        <li>збережено його товарний вигляд, споживчі властивості, пломби, ярлики;</li>
                        <li>збережено розрахунковий документ з датою продажу.</li>
                    </ul>
                </div>

                <div id="item-1-1">
                    <h5>Як повернути товари прадавця Brama?</h5>

                    <p>Зверніться в гарячу лінію 24/7: 0800 300 000.</p>
                </div>

                <div id="item-1-2">
                    <h5>Як повернути товари інших продавців?</h5>

                    <p>Зверніться в гарячу лінію 24/7: 0800 300 000. Ми надамо Вам номер потрібного продавця.</p>
                </div>

                <div id="item-2">
                    <h4>Гарантійне обслуговування</h4>

                    <p>Законодавством України передбачено проведення гарантійного ремонту (гарантійної заміни) побутового товару у випадках, коли протягом встановленого гарантійного строку придбані побутові товари виходять з ладу, або проявляється будь-яка невідповідність побутового товару вимогам нормативно-правових актів чи нормативно-правових документів, умовам договорів та проявляються недоліки, які взагалі роблять неможливим чи недопустимим використання товару за призначенням. Питання можна вирішити в добровільному, позасудовому та судовому порядках.</p>
                </div>

                <div id="item-2-1">
                    <h5>Які товари підлягають гарантійному ремонту?</h5>

                    <p>Якщо товар вийшов з ладу протягом гарантійного терміну через виробничий брак, ми відремонтуємо його або замінимо на новий.

                        Перш ніж здати товар на гарантійний ремонт, ознайомтеся з умовами гарантійного ремонту. Існують товари, які ремонтуються лише за місцем встановлення (наприклад, бойлери, кондиціонери, газові котли, системи фільтрування води).

                        Для ремонту великої побутової техніки (пральних машин, холодильників, посудомийних машин, кондиціонерів тощо) можна викликати майстра сервісного центру на вашу адресу.</p>

                    <p><strong>Переконайтеся, що:</strong></p>

                    <ul>
                        <li>гарантійні пломби на місці;</li>
                        <li>товар не має механічних або інших пошкоджень;</li>
                        <li>товар використовувався за інструкцією;</li>
                        <li>ви не ремонтували товар самостійно і не змінювали його конструкції;</li>
                        <li>гарантійний талон заповнено правильно;</li>
                        <li>зберігся серійний номер або IMEI товару;</li>
                        <li>при відправленні до сервісного центру ви зняли всі паролі, біометричний захист із портативних пристроїв.</li>
                    </ul>
                </div>

                <div id="item-2-2">
                    <h5>Куди звернутись по гарантійне обслуговування?</h5>

                    <p>Зверніться в гарячу лінію 24/7: 0800 300 000.</p>
                </div>

                <div id="item-2-3">
                    <h5>У яких випадках мені можуть відмовити в гарантійному обслуговувані?</h5>

                    <p>Гарантія не надається, якщо:</p>

                    <ul>
                        <li>порушено цілісність гарантійних пломб;</li>
                        <li>є механічні або інші пошкодження, що виникли внаслідок умисних або необережних дій покупця чи третіх осіб;</li>
                        <li>порушено правила використання, викладені в експлуатаційних документах;</li>
                        <li>було здійснено несанкціоноване розкриття, ремонт або змінено внутрішні комунікації та компоненти товару, змінено конструкцію або схеми товару;</li>
                        <li>неправильно заповнено гарантійний талон;</li>
                        <li>серійний або IMEI-номер, що зберігається в пам'яті виробу, змінено, стерто або не може бути встановлено.</li>
                    </ul>

                    <p>Гарантійні зобов'язання не поширюються на такі несправності:</p>

                    <ul>
                        <li>природне зношення або вичерпання ресурсу;</li>
                        <li>випадкові пошкодження, завдані клієнтом, або пошкодження, що виникли внаслідок недбалого ставлення чи використання (вплив рідини, запиленості, потрапляння всередину корпусу сторонніх предметів тощо);</li>
                        <li>пошкодження внаслідок стихійних лих (природних явищ);</li>
                        <li>пошкодження, викликані аварійним підвищенням або зниженням напруги в електромережі чи неправильним під’єднанням до електромережі;</li>
                        <li>пошкодження, викликані дефектами системи, у якій використовувався товар, або що виникли внаслідок з'єднання та підключення товару до інших виробів;</li>
                        <li>пошкодження, викликані використанням товару не за призначенням або з порушенням правил експлуатації.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
