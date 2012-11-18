# language: de
Funktionalität: Erster Aufruf
  Beim ersten Aufruf sind keine Daten vorhanden

  Grundlage:
    Angenommen das Programm wurde nie zuvor aufgerufen

  Szenario: erster Aufruf
    Angenommen ich rufe "bin/remind" auf
    Dann soll folgende Ausgabe erscheinen:
    """
    OK
    """

Szenario: Hilfe
    Angenommen ich rufe "bin/remind help" auf
    Dann soll folgende Ausgabe erscheinen:
    """
    remind help
    remind me <date> <text>
    remind me <date> <time> <text>
    remind show <id>
    remind show <date>
    remind show <date> <time>
    remind cancel <id>
    remind cancel <date>
    remind cancel <date> <time>
    """

  Szenario: neuer Termin tomorrow
    Angenommen ich rufe "bin/remind me tomorrow 'Termin mit Herrn Andersen'" auf
    Dann soll folgende Ausgabe erscheinen:
    """
    OK
    """

  Szenario: neuer Termin tomorrow
    Angenommen ich rufe "bin/remind me today 9:30 'Tägliches Meeting'" auf
    Dann soll folgende Ausgabe erscheinen:
    """
    OK
    """

  Szenario: neuer Termin new years eve
    Angenommen ich rufe "bin/remind me 31.12.2012 23:59 'Gleich knallt es'" auf
    Dann soll folgende Ausgabe erscheinen:
    """
    OK
    """

  Szenario: alle Termine auflisten
    Angenommen ich rufe "bin/remind show" auf
    Dann soll folgende Ausgabe erscheinen:
    """
    1 | 19.11.2012 |  9:30 | Tägliches Meeting
    2 | 20.11.2012 |       | Termin mit Herrn Andersen
    3 | 31.12.2012 | 23:59 | Gleich knallt's

    """
