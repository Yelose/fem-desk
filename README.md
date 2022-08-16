
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/gifs/fem-desk-gif.gif">

<details><summary>Mibile version</summary>

<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-lista-solicitudes.png" width="32%">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-yes-no.png" width="32%">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-nueva.png" width="32%">
<img src="https://github.com/Yelose/fem-desk/blob/main/src/assets/img/mobile-editar.png" width="32%">

</details>


## Required

- PHP 7.4 min



## Install

- composer install (or composer update)


<hr>

## 🛠️ Herramientas usadas en este proyecto


| Front End | Back End | Diseño y organización | 
| :---: | :---: | :---: |
| <img src="https://github.com/Yelose/Yelose/blob/main/img/vscode.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/html.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/bootstrap.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/css.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/php.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/mysql.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/figma.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/jira.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/google.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/gimp.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/mermaid.png"> |



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

## Diagrama de Flujo

<details><summary>Ver diagrama</summary>
  
``` mermaid
    
graph TB

        db[(<br>Tabla Solicitudes<br>base de datos)]
        ckCrear-->db
        db-->listado
        db-->editarForm
        db-->nuevaForm
        ckBorrar--borra datos <br> de solicitud-->db

    subgraph Home Vista
        listado[Listado<br>de<br>solicitudes]
        ckNueva{click<br>Nueva}
        listado-->ckNueva
        ckEditar{click<br>Editar}
        listado-->ckBorrar
        ckBorrar{click<br>borrar}-->confirm
        confirm(mensaje confirmacion)
        confirm--si-->borra -->db
        confirm--no-->listado
    end
    subgraph Editar Vista
        editar[Editar<br>Solicitud]-->editarForm        
        listado-->ckEditar 
        ckEditar---->editar
        ckEnviarE{click<br>Enviar}
        editarForm-->ckEnviarE--Cambia datos-->db
        ckCancelarE{click<br>Cancelar}-->listado        
        editarForm[[Formulario<br>Departamento<br>Consulta<br>Nombre<br>Descripción]]
        editarForm-->ckCancelarE
        editarForm-->ckRes
        ckRes{click<br>Reestablecer}-->editarForm
    end
    subgraph Nueva Vista
        ckNueva-->nueva
        nueva[Nueva<br>Solicitud]
        nuevaForm[[Formulario<br>Departamento<br>Consulta<br>Nombre<br>Descripción]]
        nueva-->nuevaForm
        ckCrear{click<br>Crear}
        nuevaForm-->ckCrear
        ckCancelar{click<br>Cancelar}
        nuevaForm-->ckCancelar
        ckCancelar-->listado      
        ckReestablecer{click<br>Reestablecer}
        ckReestablecer-->db
        nuevaForm-->ckReestablecer
    end    
    
```
    
    
</details>



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
