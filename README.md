#SocialGamers
---
* La carpeta contiene los siguientes archivos:
- socgam: carpeta del proyecto compresa en formato zip
- SOCIALGAMERS.docx : archivo con la documentación
- url: url de la aplicación alojada en un dominio


# Configuración realizaremos los siguientes pasos:
- Necesitaremos la aplicacion xampp, en ella alojaremos la práctica
- Movemos la carpeta socgam a xampp/htdocs
- Abriremos el navegador y escribiremos en la barra de direccion "localhost/phpmyadmin"
- En la consola de phpmyadmin vamos a importar y pulsamos el botón en archivo a importar
- El archivo a importar se llama social.sql y esta en la carpeta _socgam, dentro de common 
  y luego dentro de "plantilla bbdd".
- Esto generara la base de datos "social" y las tablas adyacentes a ella.
- En el navegador escribimos en la barra "localhost/socgam/" y nos llevara a index.html que es la 
  pagina de inicio.
- Elegimos la opción iniciar sesión
- Para probar la aplicacion se usara en el campo usuario "sebas" y como contraseña "tapia"
- Al loguearnos nos llevara a la pagina de sesion del usuario, a partir de ahi se puede participar en el chat,
  ver el catalogo de juegos ( en juegos ), el ranking de juegos mas puntuados y darles reseñas y puntuaciones
