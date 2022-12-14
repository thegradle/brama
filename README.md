<p align="center"><img src="https://i.imgur.com/t3HNGG4.png" width="200" alt="Brama Logo"></p>

## Опис

Курсова робота: електронний магазин на Laravel та Microsoft SQL.

## Вимоги до бази даних

1. ✅ Загальна кількість таблиць БД – 5 або більше.
2. ✅ Загальна кількість атрибутів таблиць – 30 або більше. Використання всіх базових типів даних у атрибутах таблиць (числовий, рядковий, дата та час).
3. ✅ Наявність первинних ключів у всіх таблицях. За умови відсутності ключа має бути аргументовано його відсутність.
4. ✅ Наявність зовнішній ключів у 4 або більше таблицях, 2 або більше з яких мають містити посилання на 2 та більше таблиць.
5. ✅ Наявність 2 чи більше простих перевірочних обмежень, реалізованих у вигляді обмежень цілісності check або тригерів. Наявність мінімум одного складного перевірочного обмеження, що не може бути реалізовано за допомогою check та реалізоване із використанням тригерів або інших інструментів.
6. ✅ Наявність 3 (або більше) індексів, 1 (або більше) з яких є складеним (містить декілька полів таблиці).
7. ✅ Всі таблиці БД мають перебувати у 3НФ. За умови невиконання 3-ї нормальної форми аргументувати необхідність даної реалізації.
8. ✅ Реалізація функції користувача та подальше її використання у запиті на клієнтській або серверній частині.
9. ❌ Реалізація збереженої процедури із використанням вихідного параметру або коду завершення. Має бути використано курсор та команди роботи із транзакціями.

## Вимоги до застосунку

1. ✅ Реалізація користувацького інтерфейсу по роботі із мінімум 2-ма сутностями (вибірка із фільтрацією, додавання, зміна, видалення).
2. ❌ Виклик збереженої процедури із обробкою вихідного параметра або статусу завершення.
3. ❌ Роботу із транзакціями.
4. ✅ Реалізація запитів на вибірку даних із використанням звернень до декількох таблиці, вкладених підзапитів, фільтрації та групування.
5. ❌ Використання ORM та NativeSQL при роботі із даними.

## Як запустити локально

### Windows

1. Завантажте та встановіть <a href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a>.
2. Завантажте та встановіть <a href="https://getcomposer.org/download/" target="_blank">Composer</a> (**обравши чекбокс "Add this PHP to your path"**).
3. Завантажте та встановіть <a href="https://www.microsoft.com/en-us/sql-server/sql-server-downloads">Microsoft SQL Server</a>.
4. [завантажити драйвери].
4. [змінити php.ini].
5. Завантажте базу [посилання на базу].
6. Перейдіть у теку, в якій знаходитиметься проєкт та виконайте команду `git clone https://github.com/thegradle/point` (якщо у Вас немає встановленого git - завантажте та встановіть <a href="https://git-scm.com/downloads" target="_blank">його</a>).
7. Перейдіть у корінь проєкту командою `cd point`.
8. Перейменуйте файл `.env.example` командою у `.env`.
9. Налаштуйте середовище на свій лад, або за замовчування: у файлі `.env` замініть наступні рядки:
<br>`APP_NAME=Point`
   `DB_DATABASE=point`
10. Виконайте `composer install`.
11. Виконайте `php artisan key:generate`.
12. Виконайте `php artisan migrate`.
13. Виконайте `php artisan storage:link`.
14. Запустіть локальний сервер командою `php artisan serve`.
