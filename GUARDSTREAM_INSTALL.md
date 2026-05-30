# GuardStream Setup Guide
Добре дошли в GuardStream! Вашата автоматизирана DevSecOps защита е готова за активация.

## Инсталация:
1. Копирайте папката `.github` от това репозиториум директно в корена на вашия проект.
2. В секция **Settings -> Secrets and variables -> Actions** добавете:
   - `EMAIL_USERNAME`: Вашият имейл за известия.
   - `EMAIL_PASSWORD`: App Password за вашия имейл.
3. Готово! GuardStream започва автоматично сканиране при всеки нов код (push).

