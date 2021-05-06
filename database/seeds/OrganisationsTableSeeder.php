<?php

use Illuminate\Database\Seeder;

class OrganisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Степин Данил Владимирович',
            'username' => 'step.danil',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «Гимназия»',
            'short_name' => 'МОУ Гимназия г. Раменское',
            'director_id' => $user->id,
            'reception' => 'Понедельник: 17:00 - 18:30',
            'legal_address' => '140105, М.О., г. Раменское, ул. Северное шоссе, 8',
            'actual_address' => '140105, М.О., г. Раменское, ул. Северное шоссе, 8',
            'phone' => '84964758380',
            'fax' => '84964758380',
            'email' => 'school1@ram.yandex.ru',
            'website' => 'http://ramgim.edumsko.ru/',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Соловьева Ирина Алексеевна',
            'username' => 'sol.irina',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «Гимназия №2»',
            'short_name' => 'МОУ Гимназия №2 г. Раменское',
            'director_id' => $user->id,
            'reception' => 'Вторник: 17:00 - 18:00',
            'legal_address' => '140105, М.О., г.Раменское, ул. Коммунистическая, 30/1',
            'actual_address' => '140105, М.О., г.Раменское, ул. Коммунистическая, 30/1',
            'phone' => '84964653714',
            'email' => 'school2@ram.yandex.ru',
            'website' => 'http://ramgim2.edumsko.ru/',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Арюлина Наталья Алексеевна',
            'username' => 'aru.natalia',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «Удельнинская гимназия»',
            'short_name' => 'МОУ Удельнинская гимназия',
            'director_id' => $user->id,
            'reception' => 'Понедельник - пятница: 14:00 - 17:00',
            'legal_address' => '140140, М.О., Раменский район, пос. Удельная, ул. Горячева, 38',
            'actual_address' => '140140, М.О., Раменский район, пос. Удельная, ул. Горячева, 38',
            'phone' => '84964621952',
            'email' => 'school3@ram.yandex.ru',
            'website' => 'http://ramugim.edumsko.ru/',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Королева Людмила Геннадьевна',
            'username' => 'kor.ludmila',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «СОШ №1»',
            'short_name' => 'МОУ Раменская СОШ №1',
            'director_id' => $user->id,
            'reception' => 'Вторник: 16:00 - 18:00',
            'legal_address' => '140100, М.О., г.Раменское, ул. Красноармейская, 22',
            'actual_address' => '140100, М.О., г.Раменское, ул. Красноармейская, 22',
            'phone' => '84964638304',
            'email' => 'school4@ram.yandex.ru',
            'website' => 'http://ramsch1.edumsko.ru/',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Карпова Любовь Викторовна',
            'username' => 'karp.love',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «СОШ №21»',
            'short_name' => 'МОУ Раменская СОШ №21',
            'director_id' => $user->id,
            'reception' => 'Вторник: 08:30 - 12:30; Суббота: 10:00 - 13:00',
            'legal_address' => '140100, М.О., г.Раменское, ул. Гурьева, 23',
            'actual_address' => '140100, М.О., г.Раменское, ул. Гурьева, 23',
            'phone' => '84964637710',
            'email' => 'school5@ram.yandex.ru',
            'website' => 'http://ramsch21.edumsko.ru/',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Чуравцева Лариса Вячеславовна',
            'username' => 'chur.larisa',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «СОШ №22»',
            'short_name' => 'МОУ СОШ №22 пос. Дубовая Роща',
            'director_id' => $user->id,
            'reception' => 'Суббота: 09:30 - 12:30',
            'legal_address' => '140117, М.О., Раменский район, п/о Сафоново, пос. Дубовая роща',
            'actual_address' => '140117, М.О., Раменский район, п/о Сафоново, пос. Дубовая роща',
            'phone' => '84964625249',
            'email' => 'school6@ram.yandex.ru',
            'website' => 'http://ramsch22.edumsko.ru/',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Ермилова Анна Дмитриевна',
            'username' => 'ermilova.anna',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «Многопрофильный лицей»',
            'short_name' => 'МБОУ «Многопрофильный лицей»',
            'director_id' => $user->id,
            'reception' => 'Понедельник - пятница: 14:00 - 17:00',
            'legal_address' => '140191, М.О., Раменский район, п/о Ново-Харитоново, пос. Электроизолятор',
            'actual_address' => '140191, М.О., Раменский район, п/о Ново-Харитоново, пос. Электроизолятор',
            'phone' => '84964647468',
            'fax' => '84964647468',
            'email' => 'school7@ram.yandex.ru',
            'website' => 'school7.ru',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Юханова Мария Валериановна',
            'username' => 'ukhanova.maria',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное бюджетное общеобразовательное учреждение «Прогимназия «Эврика»',
            'short_name' => 'МБОУ «Прогимназия «Эврика»',
            'director_id' => $user->id,
            'reception' => 'Суббота: 09:30 - 12:30',
            'legal_address' => '140100, М.О., г.Раменское, ул. Карла Маркса, 1',
            'actual_address' => '140100, М.О., г.Раменское, ул. Карла Маркса, 1',
            'phone' => '(34938)56630',
            'email' => 'school8@ram.yandex.ru',
            'website' => 'school8.ru',
            'is_school' => 1,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Ясевич Сергей Александрович',
            'username' => 'yasevich.sergei',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное автономное учреждение дополнительного образования «Центр детского творчества»',
            'short_name' => 'МАУДО «Центр детского творчества»',
            'director_id' => $user->id,
            'reception' => 'Понедельник: 16:00 - 18:00',
            'legal_address' => '140100, М.О., г.Раменское, ул. Чугунова, 10А',
            'actual_address' => '140100, М.О., г.Раменское, ул. Чугунова, 10А',
            'phone' => '84964633784',
            'fax' => '84964633784',
            'email' => 'school9@ram.yandex.ru',
            'website' => 'school9.ru',
            'is_school' => 0,
        ]);

        $user = factory(App\User::class)->create([
            'role_id' => 2,
            'name' => 'Карпов Михаил Владимирович',
            'username' => 'karpov.mikhail',
        ]);
        $organisation = \App\Organisation::create([
            'full_name' => 'Муниципальное автономное учреждение дополнительного образования «Центр технического творчества»',
            'short_name' => 'МАУДО «Центр технического творчества»',
            'director_id' => $user->id,
            'reception' => 'Вторник: 10:00 - 17:00; Суббота: 10:00 - 12:00',
            'legal_address' => '140104, М.О., г.Раменское, ул.Серова, 18',
            'actual_address' => '140104, М.О., г.Раменское, ул.Серова, 18',
            'phone' => '84964637512',
            'email' => 'school10@ram.yandex.ru',
            'website' => 'school10.ru',
            'is_school' => 0,
        ]);
    }
}
