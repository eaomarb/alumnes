<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Gestor d'Alumnes

Aplicación web desarrollada en **Laravel** para la gestión de alumnos, centros y enseñanzas. Incluye sistema de autenticación y panel de administración para manejar los datos de forma sencilla.

## Tecnologías

- Laravel (PHP)
- SQLite (base de datos)
- HTML / CSS / Blade (frontend)

## Funcionalidades

- Registro e inicio de sesión de usuarios.
- CRUD completo para:
  - **Alumnes**: cada alumno se asocia a un centro y un ensenyament.
  - **Centres**
  - **Ensenyaments**
- Gestión relacional simple entre alumnos, centros y enseñanzas.
- Interfaz clara para administrar todos los registros desde el navegador.

## Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/eaomarb/alumnes
cd alumnes
```

2. Instalar dependencias de Laravel:

```bash
composer install
```

3. Configurar el archivo `.env` si es necesario.  

4. Levantar el servidor:

```bash
php artisan serve
```

5. Abrir en el navegador:

```
http://127.0.0.1:8000
```

![Screenshot 1](Screenshot%20From%202025-10-15%2022-21-51.png)
![Screenshot 2](Screenshot%20From%202025-10-15%2022-22-01.png)
