![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

**Una sencilla aplicación web PHP que consume la PokeAPI para mostrar 4 cartas aleatorias de Pokémon (IDs 1-151). Incluye estilos CSS para la apariencia de carta, colores según tipo y una probabilidad de versión shiny.**

Realizado como parte del módulo UF1846.

**(Opcional: ¡Añade aquí una captura de pantalla!)**
*Puedes hacer una captura de las 4 cartas en tu navegador y guardarla como `screenshot.png` en la carpeta del proyecto. Luego, descomenta la línea de abajo:*
## ✨ Características Principales

*   Consulta a la [PokeAPI](https://pokeapi.co/api/v2/pokemon/) para obtener datos de Pokémon (limitado a los primeros 151 IDs).
*   Genera y muestra **4 Pokémon aleatorios** diferentes en cada carga de página.
*   Muestra el **nombre**, la **imagen** (sprite), los **tipos** y las **habilidades** de cada Pokémon.
*   Diseño visual estilo **tarjeta** para cada Pokémon usando CSS.
*   **Coloreado dinámico** del fondo de la tarjeta según el tipo principal del Pokémon:
    *   💧 **Agua:** Fondo azul claro.
    *   🔥 **Fuego:** Fondo rojo claro.
    *   🌿 **Planta:** Fondo verde claro.
    *   ⚡ **Eléctrico:** Fondo amarillo claro.
*   Implementa una **probabilidad de 1 entre 20** de que cada carta generada sea **✨ Shiny ✨**.
*   Las cartas Shiny muestran la **imagen shiny** correspondiente y tienen un **estilo visual distintivo** (borde dorado, fondo diferente).

## 🛠️ Tecnologías Utilizadas

*   **PHP:** Para la lógica del servidor, generación de números aleatorios y consumo de la API.
*   **HTML:** Para la estructura del contenido.
*   **CSS:** Para dar estilo y apariencia de carta, incluyendo los estilos condicionales por tipo y shiny.
*   **PokeAPI:** Como fuente de datos de los Pokémon.

## 🚀 Cómo Ejecutar Localmente

1.  **Clona el repositorio:**
    ```bash
    git clone https://github.com/MariaGarciaJordan/uf1846-pokecartas-ejercicio.git
    ```
2.  **Navega a la carpeta del proyecto:**
    ```bash
    cd uf1846-pokecartas-ejercicio
    ```
3.  **Inicia un servidor de desarrollo PHP:**
    (Necesitas tener PHP instalado)
    ```bash
    php -S localhost:8000
    ```
4.  **Abre tu navegador:**
    Visita `http://localhost:8000`

## 📜 Licencia

Este proyecto se distribuye bajo los términos de la [Licencia MIT](https://opensource.org/licenses/MIT).