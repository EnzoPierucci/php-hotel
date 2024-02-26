<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>php-hotel</title>

</head>
<body>
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    ?>
    <div class="container mx-auto">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Nome</th>
                            <th class="px-4 py-3">Descrizione</th>
                            <th class="px-4 py-3">Parcheggio</th>
                            <th class="px-4 py-3">Voto</th>
                            <th class="px-4 py-3">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <?php
                        foreach ($hotels as $hotel) {
                            echo "<tr class='text-gray-700'>";
                            echo "<td class='px-4 py-3 border'>" . htmlspecialchars($hotel['name'], ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "<td class='px-4 py-3 border'>" . htmlspecialchars($hotel['description'], ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "<td class='px-4 py-3 border'>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                            echo "<td class='px-4 py-3 border'>" . htmlspecialchars($hotel['vote'], ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "<td class='px-4 py-3 border'>" . htmlspecialchars($hotel['distance_to_center'], ENT_QUOTES, 'UTF-8') . " km</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>
</html>