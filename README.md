# Proyecto: Jardín Infantil "Los niños son felices"

## Descripción General
Este proyecto es un sistema de gestión para el jardín infantil "Los niños son felices". Permite administrar información de estudiantes y acudientes, facilitando su registro, visualización, edición y eliminación.

## Estructura del Proyecto
El proyecto está organizado en las siguientes carpetas:

- **controller/**: Contiene los archivos para operaciones CRUD.
- **model/**: Incluye la conexión a la base de datos.
- **style/**: Archivos CSS para el diseño de la interfaz.
- **view/**: Archivos PHP para la generación de las vistas de usuario.

## Tecnologías Utilizadas
- **PHP**: Lógica del lado del servidor.
- **MySQL**: Gestión de base de datos.
- **HTML/CSS**: Estructura y diseño de las páginas web.
- **Bootstrap**: Framework CSS para diseño responsivo.
- **JavaScript**: Interactividad en el lado del cliente.

## Funcionalidades Principales
- Registro de acudientes y estudiantes.
- Visualización y edición de información.
- Eliminación de registros.
- Sistema de autenticación de usuarios.

## Archivos Principales
### Vistas (`view/`)
- `ingreso.php`: Página de inicio de sesión.
- `inicio.php`: Página principal tras iniciar sesión.
- `registroAcu.php`: Formulario de registro de acudientes.
- `registroEst.php`: Formulario de registro de estudiantes.
- `acudientes.php`: Lista de acudientes registrados.
- `estudiantes.php`: Lista de estudiantes registrados.
- `editarAcudiente.php`: Edición de información de un acudiente.
- `editarEstudiante.php`: Edición de información de un estudiante.

### Controladores (`controller/`)
- `validarAcudiente.php`: Lógica para registrar acudientes.
- `validarEstudiante.php`: Lógica para registrar estudiantes.
- `eliminarAcudiente.php`: Eliminación de acudientes.
- `eliminarEstudiante.php`: Eliminación de estudiantes.
- `editarAcudiente.php`: Edición de acudientes.
- `editarEstudiante.php`: Edición de estudiantes.

### Modelo (`model/`)
- `conexion.php`: Conexión con la base de datos MySQL.

## Flujo de Trabajo
1. El usuario inicia sesión en `ingreso.php`.
2. Se redirige a `inicio.php` tras la autenticación.
3. Desde `inicio.php`, el usuario puede registrar, ver o editar acudientes y estudiantes.
4. Los formularios envían datos a los controladores, que los procesan y almacenan en la base de datos.
5. Las vistas permiten ver, editar o eliminar los registros almacenados.

## Seguridad
- Sistema de autenticación basado en sesiones de PHP.
- Control de acceso para usuarios autenticados.

## Estilos y Diseño
- Interfaz basada en **Bootstrap** para lograr un diseño responsivo.
- Estilos personalizados ubicados en `style/`, con un enfoque infantil en la paleta de colores.

## Base de Datos
- **MySQL** como base de datos.
- Tablas principales:
  - `usuarios`: Información de los usuarios del sistema.
  - `acudientes`: Datos de los acudientes.
  - `estudiantes`: Información de los estudiantes.

## Mantenimiento y Actualizaciones
- Realizar copias de seguridad antes de hacer cambios.
- Las modificaciones en la base de datos deben reflejarse en los scripts PHP correspondientes.

## Problemas Conocidos
- No incluye recuperación de contraseñas.
- Validación de datos en el cliente podría mejorar.

## Futuras Mejoras
- Implementación de un sistema de roles más robusto.
- Módulo de informes y estadísticas.
- Mejorar la seguridad con hash de contraseñas y protección SQL.
- Desarrollo de una API RESTful.
- Sistema de notificaciones para eventos importantes.

## Soporte
Para consultas o soporte técnico, contactar a: [Información de contacto del desarrollador o equipo de soporte].

