# Reminder

## Beschreibung
Gewünscht ist ein simples Kommandozeilenprogramm (Linux), das Termine verwalten kann. Man soll kurze Texte zusammen mit einer Zeitangabe speichern, ändern, abrufen und löschen können. Zusätzlich soll das Programm ausgeben können, welche Termine für ein beliebiges Datum hinterlegt sind.

## Umsetzung
* PHP
* Quelltext kommentiert und dokumentiert
* Unit-Tests

## Beispiele
> $ remind help
> remind help
> remind me <date> <text>
> remind me <date> <time> <text>
> remind show <id>
> remind show <date>
> remind show <date> <time>
> remind cancel <id>
> remind cancel <date>
> remind cancel <date> <time>

> $ remind me tomorrow "Termin mit Herrn Andersen"
> OK

> $ remind me today 9:30 "Tägliches Meeting"
> OK

> $ remind me 31.12.2012 23:59 "Gleich knallt's"
> OK

> $ remind show
>   1 | 19.11.2012 |  9:30 | Tägliches Meeting
>   2 | 20.11.2012 |       | Termin mit Herrn Andersen
>   3 | 31.12.2012 | 23:59 | Gleich knallt's

> $ remind show 1
>   1 | 19.11.2012 |  9:30 | Tägliches Meeting

> $ remind show today
>   1 | 19.11.2012 |  9:30 | Tägliches Meeting

> $ remind show tomorrow
>   2 | 20.11.2012 |       | Termin mit Herrn Andersen

> $ remind cancel 2
> OK

> $ remind show
>   1 | 19.11.2012 |  9:30 | Tägliches Meeting
>   3 | 31.12.2012 | 23:59 | Gleich knallt's

> $ remind cancel 19.11.2012 9:30
> OK

> $ remind show
>   3 | 31.12.2012 | 23:59 | Gleich knallt's

## Erweiterungen
* Cron-Job
* Email-Benachrichtigung
* Installation
* verschiedene "Repositories"

