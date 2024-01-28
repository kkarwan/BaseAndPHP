# CRUD

CRUD (od ang. create, read, update, delete, tłum. utwórz, odczytaj, aktualizuj, usuń) – cztery podstawowe funkcje w aplikacjach korzystających z pamięci trwałej, które umożliwiają zarządzanie nią. Niekiedy litera R jest rozwijana jako retrieve (pobierz) zamiast read (odczytaj). Czasem również litera D jest rozwijana jako destroy (zniszcz) zamiast delete (usuń). Skrót ten jest czasem również używany do opisania działań dotyczących oglądania, szukania i zmieniania informacji, często w stosunku do dokumentów elektronicznych. 

Skrótowiec CRUD oznacza podstawowe operacje implementowane w aplikacjach bazodanowych. Każdy człon tego skrótu może być realizowany przez standardowe instrukcje SQL, metody HTTP oraz operacje DDS


| Działanie | Instrukcja SQL | HTTP | DDS |
| --- | --- | --- | --- |
| Create | INSERT | PUT/POST | write |
| Read (Retrieve) | SELECT | GET | read / take |
| Update | UPDATE | POST / PUT / PATCH | write |
| Delete (Destroy) | DELETE |	DELETE |	dispose |


Skrótowiec CRUD może być stosowany w odniesieniu do interfejsu użytkownika większości aplikacji, które zazwyczaj pozwalają użytkownikowi na:
- utworzenie lub dodanie nowych informacji (create)
- odczytanie lub wyświetlenie istniejących informacji (read)
- modyfikowanie lub edycję istniejących informacji (update)
- usuwanie istniejących informacji (delete)


## C - Create

INSERT INTO ...

## R - Read

SELECT ...

## U - Update

UPDATE ...

## D - Delete

DELETE ...