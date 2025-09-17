# AppKarting

AppKarting es una aplicación web desarrollada en Laravel para la gestión de kartings. Permite crear, editar, ver y eliminar registros de kartings, incluyendo información como nombre, ubicación, capacidad, precio por hora, horarios y estado de actividad.

## Características principales

- Listado paginado de kartings.
- Formulario para crear y editar kartings.
- Visualización de detalles de cada karting.
- Eliminación de kartings.
- Validación de datos en formularios.

## Estructura del proyecto

- **app/Http/Controllers/KartingController.php**: Controlador principal con toda la lógica CRUD.
- **app/Http/Requests/KartingRequest.php**: Validación de datos para crear y editar kartings.
- **app/Models/Karting.php**: Modelo Eloquent para la entidad karting.
- **resources/views/kartings/**: Vistas Blade para crear, editar, listar y mostrar kartings.
- **database/migrations/**: Migraciones para la tabla `kartings`.
- **routes/web.php**: Definición de rutas web para el recurso kartings.

## Instalación rápida

1. Clona el repositorio y entra a la carpeta:
   ```bash
   git clone https://github.com/tuusuario/appkarting.git
   cd appkarting
   ```
2. Instala dependencias de PHP:
   ```bash
   composer install
   ```
3. Copia el archivo de entorno y genera la clave:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Configura la base de datos en `.env` y ejecuta migraciones:
   ```bash
   php artisan migrate
   ```
5. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

## Uso

Esto levantará un servidor local de desarrollo en la dirección [http://127.0.0.1:8000](http://127.0.0.1:8000).
