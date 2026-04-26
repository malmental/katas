# Kata Maquina generadora de turnos

## Instalacion

1. clonar el repositorio
```bash
git clone https://github.com/malmental/katas/
cd kata_postal_order
```

2. Instalar las dependencias
```bash
composer install
```

3. Ejecutar el programa
```bash
php index.php
```

4. Funcionamiento

Al iniciar, muestra el menú con los tipos de turno disponibles:
   - C - Cita previa
   - E - Envío
   - R - Recogida
   - O - Otros trámites
   - I - Información
   - D - Salir del programa

El usuario pulsa la letra correspondiente al tipo de trámite que necesita.
El sistema genera un ticket (ejemplo: C001, E001, C002).
Se muestra la cola actual de tickets pendientes.
El ciclo se repite hasta que el usuario pulse D para salir.
