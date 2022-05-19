La complejidad de la elaboracion de la prueba fue la cantidad de datos que contenia el archivo.

Contaba con 148679 registros y cada uno contenia 15 Columnas

La forma en la que se ataco el problema fue revisar la estructura de datos,
se pudo observar que en primera instancia era posible crear una base de datos
con el mismo numero de columnas y registros, solo añadiendo indices lo que podria
facilitar la consulta de los datos, posteriormente solo seria necesario mapear
los resultados. Al revisar mas a fondo los datos se pudo observar en ciertas columnas
que servian como una especie de catalogos (codigos, estados, ciudades, municipios, etc),
y que el numero total de codigos postales solamente era 31805, por lo que podria ser
mas agil la consulta por el codigo y posteriormente buscar indice numerico
como lo seria un codigo_id.

El proyecto fue elaborado en un entorno levantado con docker, posteriormente publicado
en un hostin de godaddy.

Pasos para levantar:

1. Se clona el proyecto
2. composer install
3. php artisan migrate
4. php artisan db:seed

para el ultimo paso dependiendo de las configuraciones del servidor(en el entorno de docker
solamente se corrieron los seeders, pero en el servidor donde se levanto para publicarlo se ejecuto el archivo con los insert),
podria ser mas facil ejecutar un archivo que se encuentra en la raiz del proyecto llamado query_cod_post.sql para
agregar los valores de los codigos postales "mysql -u usuario -p base_datos < archivo.sql"

Estructura del Proyecto

- Se eligio usar un patron decorador para hacer mas facil la validacion cuando el codigo postal no es valido
- Para mapear las descripciones a mayusculas se utilizaron los mutators
- Se usaron las relaciones para obtener las descripciones de estados, ciudades, municipios, etc.
