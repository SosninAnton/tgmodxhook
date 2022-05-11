# tgmodxhook
Сниппет и хук для отправки уведомлений в TG (MODX,formit)
# Создание бота
- пишем BotFather /newbot - получаем токен.
- создаем группу (если нужно писать конкретному человеку - то его id это id чата с ботом)
- назначаем бота админом, со всеми правами
- пишем что нибудь в группу 
- переходим по ссылке получения обновлений https://api.telegram.org/bot[token]/getUpdates
- там будет id этого чата
# Установка
### Нужно создать два сниппета
 - tghook - сам HOOK
 - sendToTG - снипет отправки в телеграм
### настройки в ClientConfig
 - tg_token - токен бота
 - tg_chat - id чата (пользователя) которому отправлять уведомления

# Использование
Добавляем хук вместо либо совместо email
в tpl можно использовать только разрешенные Telegram теги
```
 [[!AjaxForm? 
    &form=`tpl.hidden_form` 
    &emailTpl=`tpl.email-order` 
    &hooks=`tghook,FormItSaveForm`
    &emailSubject=`Заказ с сайта - [[++site_name]]` 
    &emailTo=`[[++email_to]]` 
    &validate=`name:required,phone:required,mail:required:email` 
    &validationErrorMessage=`[[%form_has_errors]]` 
    &successMessage=`[[%success_send]]`
]]
```
Добавляем в список хуков tghook
