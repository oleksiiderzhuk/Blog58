1. вывод всех постов на экран - index
2. страница создания нового поста - create
3. непосредственно создание нового поста - store
4. страница конкретного поста - show 
5. страница оедактирования конкретного поста - edit
6. непосредсвенно редактироваание конкретного поста 
7. удаление конкретного поста

-—

php artisan migrate:fresh --seed
dec factory+seeder
php artisan make:factory PostFactory --model=Post

php artisan make:model Post -m

---

php artisan ide-helper:generate //now there is no error underline of the Route:: in web.php

installation & usage: https://github.com/barryvdh/laravel-ide-helper
composer require barryvdh/laravel-ide-helper:2.6.7

installation & usage: https://github.com/barryvdh/laravel-debugbar
composer require barryvdh/laravel-debugbar:3.2.5

Laravel Extra Intellisense for VScode extension

