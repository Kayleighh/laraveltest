# Laravel Test
De website in deze repository heeft veel bugs en is niet erg goed geschreven. De onderstaande onderdelen zijn ontworpen om te testen hoe je deze problemen aanpakt en nieuwe functies toevoegd.

We maken ons geen zorgen over de lay-out of styling van de pagina. 

Gelieve deze respository te klonen en je wijzigingen voor elk onderdeel vast te leggen. In nette commit berichten.

## Deel 1

~~* Verbeter de routing die in de site wordt gebruikt.~~  Route voor delete aangepast en de formulier voor product verwijderen aangepast.
~~* Voeg validatie toe aan het nieuwe productproces en zorg ervoor dat de naam van het product uniek is.~~ Validatie toegevoegd en blade template aangepast

## Deel 2

~~* Los alle veiligheidsproblemen op die je opmerkt in de controller.
* Los eventuele beveiligingsproblemen op, bugs/verbeteringen aan de blade templates (maak je geen zorgen over de lay-out en styling). ~~ 

Wijzigingen in de ProductController aangebracht en de blade template aangepast.

## Deel 3

Momenteel doet het veld "beschrijving" in het formulier niets.

~~* Gelieve de producttabel te updaten om een "description" veld op te nemen, en het in te vullen vanuit dit formulier.~~ database aangepast en controller aangepast

## Deel 4

* Creëer een nieuwe Product Service Class (misschien in App/Service/Product) waarvan het de taak is om een product te beheren.
Refactor de code zodat deze nieuwe class het werk doet voor new() en delete() in plaats van de controller.

## Deel 5

Momenteel doet het "tags" veld in het formulier niets. We willen graag tags aanmaken voor nieuwe producten:

~~* Maak een nieuw Tag model, en een nieuwe pivot tabel om de producten te koppelen aan de Tags (many-to-many).~~
~~* Neem de tags string wanneer het formulier wordt ingediend en splits deze op komma's.~~
~~* Maak een tag aan voor elk van deze items - maar alleen als deze uniek is.~~
~~* Koppel het product aan elk geselecteerde tag (of de tags nu nieuw waren of al eerder bestonden).~~

## Deel 6

Maak een nieuwe ProductCreated event wanneer een product wordt gecreëerd.
Luister naar de ProductCreated event (listener) en stuur een eenvoudige melding naar alle gebruikers om hen te laten weten dat het product is gemaakt.
