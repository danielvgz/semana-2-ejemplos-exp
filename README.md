# Ejemplos PHP - Semana 2

Este repositorio contiene ejemplos prácticos en PHP para distintos conceptos útiles en desarrollo web. Cada archivo representa un tema independiente, listo para ser probado en tu entorno local.

## Contenidos

- `gestion_memoria.php`: Ejemplo sobre cómo PHP gestiona la memoria y cómo liberarla manualmente usando `unset()`.
- `multiplataforma.php`: Muestra cómo escribir código PHP multiplataforma usando constantes como `PHP_OS` y `DIRECTORY_SEPARATOR`.
- `template_html_php.php`: Ejemplo de integración de HTML y PHP para renderizar listas dinámicas en una página web.
- `extensiones.php`: Visualiza las extensiones instaladas en tu entorno PHP y verifica si la extensión `curl` está disponible.

## Cómo ejecutar los ejemplos

1. Clona o descarga este repositorio.
2. Coloca los archivos en una carpeta accesible por tu servidor web (por ejemplo, en `htdocs` de XAMPP o `www` de WAMP/LAMP).
3. Accede a cada archivo desde tu navegador, por ejemplo:
   - `http://localhost/semana-2-ejemplos-exp/gestion_memoria.php`
   - `http://localhost/semana-2-ejemplos-exp/multiplataforma.php`
   - etc.

> Asegúrate de tener PHP instalado y configurado correctamente.

## Descripción de los archivos

- **gestion_memoria.php:**  
  Demuestra la creación de un arreglo grande y la medición del uso de memoria antes y después de liberarlo. Útil para entender cómo PHP maneja la memoria y el recolector de basura.

- **multiplataforma.php:**  
  Imprime el sistema operativo detectado y muestra cómo construir rutas de archivo compatibles entre Windows, Linux y MacOS.

- **template_html_php.php:**  
  Página HTML con una lista de usuarios generada desde PHP, ejemplificando la integración de lógica de servidor con presentación web.

- **extensiones.php:**  
  Muestra todas las extensiones PHP cargadas actualmente y verifica si la extensión `curl` está activa, útil para diagnósticos de entorno.

## Extensiones comunes de PHP

A continuación se listan extensiones que suelen estar presentes o ser recomendables para la mayoría de proyectos PHP:

- **Core** (incluida siempre)
- **date** (manejo de fechas)
- **json** (trabajo con JSON)
- **mbstring** (soporte de strings multibyte, UTF-8)
- **pdo** (interfaz de acceso a bases de datos)
- **pdo_mysql** (PDO para MySQL)
- **mysqli** (acceso a MySQL mejorado)
- **curl** (peticiones HTTP, servicios web)
- **gd** (manipulación de imágenes)
- **xml** (procesamiento de XML)
- **zip** (manejo de archivos ZIP)
- **openssl** (cifrado y HTTPS)
- **fileinfo** (detección de tipo MIME)
- **intl** (internacionalización, fechas, traducciones)
- **iconv** (conversión de caracteres)
- **simplexml** (manejo sencillo de XML)
- **soap** (servicios web SOAP)
- **bcmath** (aritmética de precisión arbitraria)
- **exif** (metadatos de imágenes)
- **ftp** (soporte para FTP)
- **readline** (interacción en línea de comandos)
- **sockets** (comunicación de red)
- **tokenizer** (tokenización de código fuente PHP)
- **xmlwriter** (escritura de XML)
- **xmlreader** (lectura de XML)
- **phar** (manejo de archivos PHP Archive)
- **ctype** (comprobación de tipos de caracteres)
- **filter** (filtrado y saneamiento de datos)

> Puedes ver la lista completa de extensiones activas ejecutando:
> ```php
> <?php
> print_r(get_loaded_extensions());
> ?>
> ```

---
