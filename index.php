<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokéCartas Aleatorias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Mis PokéCartas</h1>

    <div class="cards-container">

        <?php for ($i = 0; $i < 4; $i++): ?>

            <?php
            // 1. Generar número aleatorio
            $pokemon_id = rand(1, 151);
            $api_url = "https://pokeapi.co/api/v2/pokemon/" . $pokemon_id;

            // 2. Obtener datos (con @ para suprimir warnings si falla)
            $json_data = @file_get_contents($api_url);
            $pokemon_data = json_decode($json_data);

            // 3. Comprobar si obtuvimos datos válidos
            if ($pokemon_data):

                // 4. Extraer datos necesarios
                $nombre = $pokemon_data->name;
                $tipos = [];
                foreach ($pokemon_data->types as $tipo_info) {
                    $tipos[] = $tipo_info->type->name;
                }
                $habilidades = [];
                foreach ($pokemon_data->abilities as $habilidad_info) {
                    $habilidades[] = $habilidad_info->ability->name;
                }

                // 5. Determinar si es Shiny (1/20)
                $es_shiny = (rand(1, 20) == 1);
                $imagen_default = $pokemon_data->sprites->front_default;
                $imagen_shiny = $pokemon_data->sprites->front_shiny;

                // Usar imagen shiny si corresponde Y si existe, si no, default
                $imagen_a_usar = $es_shiny && !empty($imagen_shiny) ? $imagen_shiny : $imagen_default;

                 // 6. Determinar clases CSS extra (tipo y shiny)
                $extra_classes = '';
                $tipo_principal = !empty($tipos) ? $tipos[0] : ''; 

                if ($tipo_principal == 'water') { $extra_classes .= ' type-water'; }
                elseif ($tipo_principal == 'fire') { $extra_classes .= ' type-fire'; }
                elseif ($tipo_principal == 'grass') { $extra_classes .= ' type-grass'; }
                elseif ($tipo_principal == 'electric') { $extra_classes .= ' type-electric'; }

                if ($es_shiny) { $extra_classes .= ' shiny'; }

            ?>
            <!-- 7. HTML de la Carta -->
            <div class="pokemon-card<?php echo $extra_classes; ?>">
                <h2><?php echo ucfirst($nombre); ?></h2>
                <img src="<?php echo $imagen_a_usar; ?>" alt="Imagen de <?php echo $nombre; ?>">

                <h3>Tipos:</h3>
                <ul>
                    <?php foreach ($tipos as $tipo): ?>
                        <li><?php echo ucfirst($tipo); ?></li>
                    <?php endforeach; ?>
                    <?php if (empty($tipos)): ?>
                        <li>Desconocido</li>
                    <?php endif; ?>
                </ul>

                <h3>Habilidades:</h3>
                <ul>
                    <?php foreach ($habilidades as $habilidad): ?>
                        <li><?php echo ucfirst($habilidad); ?></li>
                    <?php endforeach; ?>
                     <?php if (empty($habilidades)): ?>
                        <li>Desconocidas</li>
                    <?php endif; ?>
                </ul>
            </div>

            <?php else:?>
                <div class="pokemon-card error-card">
                    <p>Error al cargar datos del Pokémon ID: <?php echo $pokemon_id; ?>. Intenta recargar.</p>
                </div>
            <?php endif;?>

        <?php endfor; ?>

    </div> 

</body>
</html>