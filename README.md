# api_php_2025
Creación de un API php con bases de datos relacionales

# Instrucciones

1. Insertar la tabla de este repositorio en mysql

- Ingresamos como 'root':

  ```bash
  mysql -u root –p
  ```

- Creamos la base de datos:

  ```bash
  CREATE DATABASE datos_uni2025;
  ```

- Salimos de mysql:

  ```bash
  exit
  ```

- Insertamos la base de datos:

  ```bash
  mysql -u root -p datos_uni2025 < datos_uni2025.sql;
  ```

2. Creamos un usuario

- Ingresamos como 'root':

  ```bash
  mysql -u root –p
  ```

- Usamos la tabla de mysql:

  ```bash
  USE mysql;
  ```

- Creamos el usuario:

  ```bash
  CREATE USER 'publicUser'@'localhost' IDENTIFIED BY 'Contra-0';
  ```

- Otorgamos permisos:

  ```bash
  GRANT DELETE, INSERT, SELECT, UPDATE ON `datos_uni2025`.* TO 'publicUser'@'localhost';
  ```

- Volvemos a cargar los privilegios:

  ```bash
  FLUSH PRIVILEGES;
  ```

- Salimos de mysql:

  ```bash
  exit
  ```

3. Instalar php con el siguiente comando:

   ```bash
   sudo apt install php -y
   ```

4. Levantar el servidor con:

   ```bash
   php -S localhost:8000
   ```

5. Con los archivos de este repo, ingresar hacia:

- http://localhost:8000/index.php
