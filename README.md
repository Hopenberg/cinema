# Aplikacja "Kino" napisana w Laravelu

Dostępny jest tylko jeden endpoint - wykonanie rezerwacji na miejsca: POST /api/reserve

## Sposób uruchomienia:
- pobierz kod
- composer install
- Utwórz bazę MySql lokalnie: 127.0.0.1:3306 (użytkownik: root; brak hasła)
- Utwórz bazę o nazwie cinema
- Skopiuj plik .env.example i nazwij go .env
- Wykonaj komendę ``` php artisan key:generate ```
- Wykonaj komendę ``` php artisan migrate --seed```
- Wykonaj komendę ``` php artisan serve ```
- Aplikacja jest dostępna pod adresem http://localhost:8000

