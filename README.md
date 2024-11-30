# SlideAndPick

This application presents users a series of polls, each offering two possible answers. 
Users must select one option or may choose to abstain from voting. After making their choice or abstaining, 
users can view the percentage breakdown for each option and switch to another poll.

## Instalation

```bash
git clone https://github.com/albertolg101/slide-and-pick.git
cd slide-and-pick
composer install
cp .env.example .env
php artisan key generate
```

Put database credential on .env and run:

```bash
php artisan migrate
```

And in order to run it:

```bash
php artisan serve
```

## Notes:

- This project officially supports MySQL. While it may work with other database systems, compatibility issues may arise.

- This code has not been thoroughly tested for production environments. It is recommended to use this project only for development or educational purposes.

# Notes about models and relations:
<img width="1589" alt="Screenshot 2024-11-29 at 09 42 21" src="https://github.com/user-attachments/assets/93de6135-180f-4e0e-95bb-e871ab8c891a">

- The core application model is the `Poll` model.

- The model that I liked the most was the abstract model `Translatable`

- `PollOption` and `PollQuestion` are translatable models so they inherit from `Translatable` and are morph connect with `LocalizedText`.

# Notes about Controller:

- I really enjoyed programming the PollController, specially the update function. I even made some custom validation rules.
