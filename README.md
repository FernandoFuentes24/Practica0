<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 Proyecto Laravel - Sistema de restaurante utilizando bootstrap y consumiendo api de google maps

Este es un sistema de gestión desarrollado con **Laravel 11** y **MySQL**.

## 📌 Requisitos Previos

- **PHP 8.3+**
- **Composer**
- **MySQL** 

## ⚙️ Instalación y Configuración

### 1️⃣ Clonar el repositorio  
```sh
git clone https://github.com/FernandoFuentes24/Practica0.git

cd Practica0
```
### 2️⃣ Instalar dependencias
```sh
composer install
npm install && npm run build
```
### 3️⃣ Configurar variables de entorno
```sh
Copiar el archivo .env.example y renómbralo a .env:

Editar el .env y configura la base de datos:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 o localhost
DB_PORT=3306 
DB_DATABASE=mi_base_de_datos
DB_USERNAME=root
DB_PASSWORD=tu_contraseña
```
### 5️⃣ Ejecutar migraciones y seeders
```sh
php artisan migrate --seed
```
### 6️⃣ Levantar el servidor
```sh
php artisan serve
```