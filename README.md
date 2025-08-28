# Instrumentos Jurídicos

## Descripción

Este proyecto permite el **resguardo y gestión de contratos** por áreas dentro de la organización.  
Cada usuario tiene un rol asignado que define los permisos de acceso:

-   **Administrador:** Acceso completo a todos los módulos y registros. Puede decidir si los registros eliminados se borran lógicamente o completamente.
-   **Subrogados:** Solo visualiza los contratos vigentes o históricos de su área.
-   **Servicios Generales / Recursos Materiales:** Solo visualizan los registros relacionados a su área específica.

Cada registro de contrato puede contener:

-   Nombre del contrato.
-   Nombre del servicio asociado.
-   Fecha de inicio y fin de vigencia.
-   Archivos PDF adjuntos (dictámenes, información adicional, material de contrato).
-   Fecha de registro y actualización automática.
-   Eliminación lógica (`deleted_at`) para mantener integridad de datos.

---

## Tecnologías y Versiones Requeridas

-   **PHP:** >= 8.2
-   **Laravel:** 10.x
-   **MySQL / MariaDB:** >= 8.0
-   **Composer:** >= 2.5
-   **Node.js:** Opcional si se requiere Vite (para JS/CSS moderno)
-   **NPM:** Opcional si se requiere Vite
-   **Git:** >= 2.39
-   **Mac / Linux / Windows** compatible con PHP y Composer

> Actualmente el proyecto **no requiere Vite ni frameworks JS**, ya que se gestionan los CSS y JS de manera tradicional.

---

## Instalación y Configuración

1. Clonar el repositorio:

```bash
git clone https://github.com/tu-usuario/instrumentos-juridicos.git
cd instrumentos-juridicos
```

2. Instalar dependencias de PHP con Composer:

```bash
composer install
```

3. Crear archivo .env y generar la clave de aplicación:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configurar conexión a la base de datos en .env:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=instrumentos_juridicos
DB_USERNAME=root
DB_PASSWORD=
```

5. Ejecutar migraciones y seeders:

```bash
php artisan migrate --seed
```

6. Levantar servidor local (opcional con Laravel Valet o php artisan serve):

```bash
php artisan serve
```

Uso del Proyecto

-   Los usuarios deben iniciar sesión con sus credenciales.

-   Los roles determinan qué módulos y contratos pueden visualizar o editar.

-   Cada contrato puede contener múltiples PDF adjuntos, con un resguardo centralizado para cada área.

-   La eliminación de registros es lógica por defecto (deleted_at), y solo el Administrador puede decidir la eliminación física.
