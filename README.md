HBO-i development ![Development build status](https://github.com/RobinPijnappelsAvans/hbo-i/actions/workflows/docker-dev-deploy.yml/badge.svg)
===========

HBO-i website development github.<br/>
Ga naar [www.brinks-ict.nl](http://www.brinks-ict.nl) voor de huidige development branch website. <br/>
Ga naar [develop-hbo-i.robinpijnappels.nl](http://develop-hbo-i.robinpijnappels.nl/) voor de huidige main branch website.

How To (Setup)
------
Vooreisen:
* Je hebt php[^1] versie 8 of hoger
* Je hebt [composer](https://getcomposer.org/download/) geïnstalleerd.

[^1]: Dit installeer je ook wanneer je [XAMPP](https://www.apachefriends.org/download.html) installeert.
------
Maak een nieuwe branch gebaseerd op development.

Kopier de ``.env.example`` file en noem hem ``.env``.

Open een nieuwe terminal in de ``01-Website`` map.

Run ``composer i``. <br/>
Run hierna ``php artisan key:generate``. <br/>
Open hierna een mysql db (Een goede tool hiervoor is [XAMPP](https://www.apachefriends.org/download.html)). 

De default poort is 3306 en dat is ook wat er in de .env file staat. <br/>
Edit de ``.env`` file zodat de juiste mysql username, password, port en hostname hierin staan. (De standaard port en hostname zijn meestal correct)

Run nu ``php artisan migrate``.

How To (Start developing)
------
Als je gaat ontwikkelen dan kan je dit doen in een text editor naar keuze. <br/>
Wij raden zelf [Visual studio code](https://code.visualstudio.com/download) aan.

Je opent nu een terminal in de folder ``01-Website`` en runt de volgende commando's.

1. ``php artisan optimize``
2. ``php artisan serve``
3. Ga naar [localhost:8000](https://localhost:8000)

Je ziet hier je live changes die je doet aan de front-end.
Voor back-end changes moet je wellicht deze twee commando's opnieuw uitvoeren.

How To (Build & deploy)
------
Vooreisen:
* Je hebt docker geinstalleerd.
* Je hebt docker compose v2.
* Je hebt geen database of laravel runnen op 8000 en 3306
------
Open een terminal in ``01-Website``. <br/>
Run ``docker-compose up --build -d``. Dit start een nieuwe docker compose container met de benodigde containers voor laravel.

Als dit de eerste keer is dat je deze container start of je hebt de volumes verwijderd. Run dan ``./docker-init-db.bat`` of voor linux ``./docker-init-db.sh``. <br/>
Dit zal de database initialiseren met een schema en tabellen.

Ga nu naar [localhost:8000](https://localhost:8000)

De development branch heeft auto deployment en de main branch wordt voor elke sprint review handmatig gedeployed.

# Troubleshooting
Hier zijn wat oplossing op vaak voorkomende problemen.
## php, laravel en composer problemen
### Ik heb composer problemen
Run ``compose u``. Vaak zal dit het probleem verhelpen

### Ik krijg niets te zien op localhost:8000
Zorg dat je niets anders op poort 8000 hebt runnen en dat laravel juist is gestart.

## mysql problemen
### Als ik naar localhost:8000 ga krijg ik een mysql error.
* Check ofdat je mysql server aan staat in bijv XAMPP.
* Check of je gegevens in de ``.env`` bestand kloppen.
* Het kan zijn dat er updates zijn geweest. Je zal dan je database moeten verversen. Run hiervoor ``php artisan migrate:refresh``

## docker deploy problemen
### Zorg dat docker goed geïnstalleerd staat.
Fouten die je wellicht heb gemaakt.
* Zorg dat hardware virtualisatie aan staat.
* Zorg dat je docker-compose v2 hebt
* Zorg dat docker aan staat.
* Zorg dat je wsl hebt

### Fouten bij het deployen
* Zorg dat er niets op poort 3306 en 8000 runt.
* Zorg dat je als het je eerste deploy is, of als je volumes hebt verwijdert. Dat je ``./docker-init-db.bat`` runt of voor linux ``./docker-init-db.sh``.
