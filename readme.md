## Fysiksektionens Sångbok

Detta är Fysiksektionens online-sångbok som nås på https://f.kth.se/sangbok

### Uppdatera sånger

Alla sånger ligger i songdata/songs som Markdown-filer.
Att redigera sångerna sker på följande sett:

1. Skapa, radera redigera filer i songdata/songs
2. Push:a ändringarna och gör en pull på servern
3. Gå till songdata-katalogen och kör "python3 md\_to\_db.py" för att uppdatera databasen

För att lägga till nya kapitel är det bara att redigera "songdata/chapters.csv" och sedan följa steg 2-3 ovan.