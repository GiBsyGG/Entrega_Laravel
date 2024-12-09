<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# README: Usando la API de GameController con Postman

Este documento explica cómo interactuar con la API de `GameController` usando Postman para realizar operaciones CRUD sobre juegos.

## Estudiantes
- Juan Camilo Valencia Hincapie
- Kevin Santiago Parra Romero

---

## **Endpoints Disponibles**

### Base URL
- `http://localhost:8000/api/games`

### **Operaciones CRUD**

| Método | Endpoint          | Descripción                          |
|---------|-------------------|--------------------------------------|
| GET     | `/`               | Obtener todos los juegos            |
| POST    | `/`               | Crear un nuevo juego                |
| GET     | `/{id}`           | Obtener detalles de un juego        |
| PUT     | `/{id}`           | Actualizar un juego existente       |
| DELETE  | `/{id}`           | Eliminar un juego                   |

---

## **Instrucciones para usar Postman**

### 1. **Obtener todos los juegos**
- **Método:** GET
- **Endpoint:** `http://localhost:8000/api/games`
- **Respuesta esperada:**
```json
[
  {
    "id": 1,
    "name": "Game 1",
    "genre": "Action",
    "rating": 4.5
  },
  {
    "id": 2,
    "name": "Game 2",
    "genre": "Puzzle",
    "rating": 4.0
  }
]
```

---

### 2. **Crear un nuevo juego**
- **Método:** POST
- **Endpoint:** `http://localhost:8000/api/games`
- **Headers:**
  - `Content-Type: application/json`
- **Body:** (JSON)
```json
{
  "name": "New Game",
  "genre": "RPG",
  "rating": 5.0
}
```
- **Respuesta esperada:**
```json
{
  "id": 3,
  "name": "New Game",
  "genre": "RPG",
  "rating": 5.0
}
```

---

### 3. **Obtener detalles de un juego**
- **Método:** GET
- **Endpoint:** `http://localhost:8000/api/games/{id}`
- **Parámetros:**
  - Reemplaza `{id}` con el ID del juego que deseas consultar.
- **Respuesta esperada:**
```json
{
  "id": 1,
  "name": "Game 1",
  "genre": "Action",
  "rating": 4.5
}
```

---

### 4. **Actualizar un juego existente**
- **Método:** PUT
- **Endpoint:** `http://localhost:8000/api/games/{id}`
- **Headers:**
  - `Content-Type: application/json`
- **Body:** (JSON)
```json
{
  "name": "Updated Game",
  "genre": "Adventure",
  "rating": 4.8
}
```
- **Respuesta esperada:**
```json
{
  "id": 1,
  "name": "Updated Game",
  "genre": "Adventure",
  "rating": 4.8
}
```

---

### 5. **Eliminar un juego**
- **Método:** DELETE
- **Endpoint:** `http://localhost:8000/api/games/{id}`
- **Parámetros:**
  - Reemplaza `{id}` con el ID del juego que deseas eliminar.
- **Respuesta esperada:**
```json
{
  "message": "Game deleted successfully."
}
```

---

## **Notas Adicionales**
1. Asegúrate de que tu servidor Laravel esté corriendo antes de realizar cualquier solicitud:
   ```bash
   sail up
   ```
2. Si usas una base de datos limpia, puedes correr las migraciones antes de empezar:
   ```bash
   sail artisan migrate
   ```
3. Configura las credenciales de la base de datos correctamente en el archivo `.env` para evitar errores de conexión.

---

