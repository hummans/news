<?php
$TRANSLATIONS = array(
"Feed contains invalid XML" => "В ленте присутствует недействительный XML",
"Could not find a feed" => "Не удалось найти ленту RSS",
"Detected feed format is not supported" => "Обнаруженный формат ленты не поддерживается",
"SSL Certificate is invalid" => "SSL сертификат недействительный ",
"Website not found" => "Сайт не найден",
"More redirects than allowed, aborting" => "Количество перенаправлений больше допустимого, отменяем",
"Bigger than maximum allowed size" => "Больше максимально допустимого размера",
"Request timed out" => "Запрос отменён по тайм-ауту",
"Can not add feed: Exists already" => "Не удаётся добавить ленту: уже существует",
"Articles without feed" => "Статьи без новостной ленты",
"Can not add folder: Exists already" => "Не удаётся добавить папку: уже существует",
"Use ownCloud cron for updates" => "Использовать стандартный cron от ownCloud для обновлений",
"Disable this if you run a custom updater such as the Python updater included in the app" => "Отключите, если собираетесь использовать другой механизм обновлений, например, Python updater, включенный в поставку этого приложения",
"Purge interval" => "Интервал до очистки",
"Minimum amount of seconds after deleted feeds and folders are removed from the database; values below 60 seconds are ignored" => "Минимальное количество секунд, после которого удалённые ленты и папки будут удалены из базы данных; значения меньше 60 секунд будут проигнорированы",
"Maximum read count per feed" => "Максимальное количество прочтённых статей для ленты",
"Defines the maximum amount of articles that can be read per feed which won't be deleted by the cleanup job; if old articles reappear after being read, increase this value; negative values such as -1 will turn this feature off completely" => "Максимальное количество статей для каждой ленты, которые не будут удалены при очистке; если старые статьи появляются после того, как они уже прочитаны, увеличьте это значение; отрицательные значения, например, -1, полностью отключает эту функцию.",
"Maximum redirects" => "Максимум перенаправлений",
"How many redirects the feed fetcher should follow" => "По скольким перенаправлениям должен следовать загрузчик ленты",
"Maximum feed page size" => "Максимальный размер страницы для RSS ленты",
"Maximum feed size in bytes. If the RSS/Atom page is bigger than this value, the update will be aborted" => "Максимальный размер RSS ленты в байтах. Если размер страницы RSS/Atom больше этого значения, обновление будет отменено",
"Feed fetcher timeout" => "Таймаут для загрузчика ленты",
"Maximum number of seconds to wait for an RSS or Atom feed to load; if it takes longer the update will be aborted" => "Максимальное количество секунд, требуемое для обновления ленты RSS или Atom; если обновление занимает больше времени, то оно будет отменено",
"Explore Service URL" => "URL сервиса Исследовать",
"If given, this service's URL will be queried for displaying the feeds in the explore feed section. To fall back to the built in explore service, leave this input empty" => "Если указан, сервис по URL будет использован для заполнения секции Исследовать. Что-бы вернуться к встроенному сервису, оставьте поле пустым.",
"Saved" => "Сохранено",
"Ajax cron mode detected! Your feeds will not be updated correctly. It is recommended to either use the operating system cron or a custom updater." => "Обнаружена настройка синхронизации по Ajax cron! Ваши новостные ленты не будут корректно обновляться. Рекомендуется использовать cron (планировщик задач) операционной системы или собственный механизм обновления.",
"How to set up the operating system cron" => "Как настроить cron (планировщик задач) операционной системы",
"How to set up a custom updater (faster and no possible deadlock) " => "Как настроить другой способ обновления (быстрее и без риска взаимной блокировки)",
"Subscribe" => "Подписаться",
"Refresh" => "Обновить",
"No articles available" => "Нет записей",
"No unread articles available" => "Нет непрочтённых записей",
"Open website" => "Открыть веб-сайт",
"Star article" => "Отметить статью",
"Unstar article" => "Снять отметку",
"Keep article unread" => "Оставить статью непрочитанной",
"Remove keep article unread" => "Удалить отметку от непрочтении",
"by" => "автор",
"from" => "от",
"Browser can not play media type" => "Браузер не может воспроизвести данный тип медиафайла.",
"Download" => "Скачать",
"Keyboard shortcut" => "Горячие клавиши",
"Description" => "Описание",
"right" => "направо",
"Jump to next article" => "Перейти на следующую статью",
"left" => "налево",
"Jump to previous article" => "Перейти на предыдущую статью",
"Toggle star article" => "Поставить/снять отметку звездочкой",
"Star article and jump to next one" => "Отметить статью звездочкой и перейти к следующей",
"Toggle keep current article unread" => "Пометить статью как непрочтенную",
"Open article in new tab" => "Открыть статью в новой вкладке",
"Toggle expand article in compact view" => "Открыть статью при просмотре в компактном режиме",
"Load next feed" => "Загрузить следующую ленту",
"Load previous feed" => "Загрузить предыдущую ленту",
"Load next folder" => "Загрузить следующую папку",
"Load previous folder" => "Загрузить предыдущую папку",
"Scroll to active navigation entry" => "Показать открытый элемент меню",
"Web address" => "Веб адрес",
"Feed exists already!" => "Лента уже существует!",
"Folder" => "Папка",
"No folder" => "Нет папки",
"New folder" => "Новая папка",
"Folder name" => "Имя папки",
"Go back" => "Вернуться назад",
"Folder exists already!" => "Папка уже существует",
"New Folder" => "Новая папка",
"Create" => "Создать",
"Explore" => "Исследовать",
"Deleted feed" => "Удалённая лента",
"Undo delete feed" => "Отменить удаление ленты",
"Rename" => "Переименовать",
"Menu" => "Меню",
"Rename feed" => "Переименовать ленту",
"Delete feed" => "Удалить ленту",
"Mark all articles read" => "Пометить все статьи как прочитанные",
"Dismiss" => "Прекратить",
"Collapse" => "Свернуть",
"Deleted folder" => "Удаленная папка",
"Undo delete folder" => "Отменить удаление папки",
"Rename folder" => "Переименовать папку",
"Delete folder" => "Удалить папку",
"Starred" => "Отмеченный",
"Unread articles" => "Непрочтённые статьи",
"All articles" => "Все статьи",
"Settings" => "Настройки",
"Keyboard shortcuts" => "Горячие клавиши",
"Compact view" => "Компактный вид",
"Expand articles in compact view when navigating with keyboard shortcuts" => "Открывать статьи при навигации клавиатурой в компактном режиме.",
"Show all articles" => "Показать все статьи",
"Reverse ordering (oldest on top)" => "Обратный порядок (самые старые сверху)",
"Disable mark read through scrolling" => "Отключить чтение пометок при прокручивании",
"Subscriptions (OPML)" => "Подписки (OPML)",
"Import" => "Импорт",
"Export" => "Экспорт",
"Error when importing: file does not contain valid OPML" => "Ошибка при импорте: файл не содержит правильный OPML",
"Unread/Starred Articles" => "Непрочтенные/Отмеченные статьи",
"Error when importing: file does not contain valid JSON" => "Ошибка при импорте: файл не содержит правильный JSON"
);
$PLURAL_FORMS = "nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);";
