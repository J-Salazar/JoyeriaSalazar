## Instalación

1. Instale un servidor local como (por ejemplo: laragon)
2. Descomprima el proyecto dentro de la carpeta ```laragon/www```
3. Abra una terminal dentro del proyecto y utilice composer para instalar las dependencias con el comando
```bash
composer install
```
4. Cree una base de datos mysql e introduzca las credenciales en el archivo .env
5. Ejecute las migraciones del proyecto mediante el comando
```bash
php artisan migrate:fresh
```
6. (Opcional) Si desea tener datos de prueba para probar el sistema ejecute:
```bash
php artisan db:seed
```
7. Para almacenar correctamente las imagenes, ejecute:
```bash
php artisan storage:link
```

7. Listo, puede acceder al proyecto a través de la dirección ```joyeriasalazar.test```
