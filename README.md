
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/lista-solicitudes.png">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/lista-solicitudes-borrar.png">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/crear-solicitud.png">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/editar-solicitud.png">

<details><summary>Mibile version</summary>


<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-lista-solicitudes.png" width="45%">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-yes-no.png" width="45%">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-nueva.png" width="45%">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-editar.png" width="45%">



</details>



## Required

- PHP 7.4 min



## Install

- composer install (or composer update)


<hr>

## 🛠️ Herramientas usadas en este proyecto


| Front End | Back End | Diseño y organización | 
| :---: | :---: | :---: |
| <img src="https://github.com/Yelose/Yelose/blob/main/img/vscode.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/html.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/bootstrap.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/css.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/php.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/mysql.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/figma.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/jira.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/google.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/gimp.png"> |



<hr>

## ✒️ Autoras 

| Nombre | Roll | <img src="https://github.com/Yelose/Yelose/blob/main/img/github.png" width="30px" height="30px"> |
| ---: | :---: | :---: |
| Cristina | Web Developer| https://github.com/CSanchezCadrecha |
| Marina | Web Developer| https://github.com/Yelose |
| Sara | Web Developer | https://github.com/Sarap120298 |
| Esther | Scrum Master | https://github.com/Estherherrera |
| Marybell | Product Owner | https://github.com/MBellJDD |

<hr>

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
