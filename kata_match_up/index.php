<?php
$romanos = array('I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII');
$cartas = array_merge($romanos, $romanos);
shuffle($cartas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Match UP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Kata-Match-UP</h1>

    <div class="tablero">
        <?php foreach ($cartas as $carta): ?>
            <div class="carta" data-valor="<?php echo $carta; ?>" data-texto="<?php echo $carta; ?>"></div>
        <?php endforeach; ?>
    </div>

    <script>
        let carta1 = null;
        let carta2 = null;
        let pares = 0;

        const todasLasCartas = document.querySelectorAll('.carta');

        function cliqueaCarta() {
            if (this.classList.contains('emparejada')) {
                return;
            }
            if (this.classList.contains('revelada')) {
                return;
            }

            this.classList.add('revelada');

            if (carta1 === null) {
                carta1 = this;
            }
            else if (carta2 === null) {
                carta2 = this;

                const valor1 = carta1.getAttribute('data-valor');
                const valor2 = carta2.getAttribute('data-valor');

                if (valor1 === valor2) {
                    carta1.classList.add('emparejada');
                    carta2.classList.add('emparejada');
                    carta1 = null;
                    carta2 = null;
                    pares = pares + 1;

                    if (pares === 8) {
                        alert('Ganaste !');
                    }
                }
            }
            else {
                carta1.classList.remove('revelada');
                carta2.classList.remove('revelada');
                carta1 = this;
                carta2 = null;
            }
        }

        for (let i = 0; i < todasLasCartas.length; i++) {
            todasLasCartas[i].addEventListener('click', cliqueaCarta);
        }
    </script>

</body>
</html>