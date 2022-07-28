## Required

- PHP 7.4 min

## Install

- composer install (or composer update)

## 🛠️ Herramientas usadas en este proyecto
<ul>
  <li>Visual Studio Code</li>
  <li>Figma</li>
  <li>GoogleFonts</li>
  <li>Bootstrap</li>
  <li>PDO</li>
  <li>MySQL</li>
  <li>PHPMyAdmin</li>
</ul>


## ✒️ Autoras 
<ul>
  <li>Cristina (web developer)</li>
  <li>Marina (web developer)</li>
  <li>Sara (web developer)</li>
  <li>Esther (Scrum Master)</li>
  <li>Marybell (Product Owner)</li>
</ul>

## User Flow


## Diagrama UML

``` mermaid
classDiagram
class Solicitudes{
    + int id
    + string fecha
    + string departamento
    + string nombre
    + string consulta
    + string descripcion 
    + rename()
    + save ()
    + all()
    + delete()
    + findById()
    + update()
}
```
