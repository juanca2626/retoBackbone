## Solución:

1 - Me descargue el archivo CPdescarga.xls

2 - Migre la data a mysql

3 - Cree un índice por zipcode

4 - A nivel de código, realmente no hice nada extraordinario quise armar la solución lo más simple posible y fácil de entender, solo cree un api y un ResourceCollection para armar la información solicitada.

5 - Cree las migraciones y los seed que te cargan la data

6 - También use telescope para medir los tiempos de respuesta


## Pasos para correr la aplicación

composer install
 
php artisan migrate

php artisan db:seed


## EndPoint 

path://api/zip-codes/33970


Publico   http://backbone.ruywa.com/api/zip-codes/33970
