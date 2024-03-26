<?php
require_once __DIR__ . '/../app/Models/Product.php';

$dbStore = [

    new Food('Natural Trainer Small & Toy con Pollo', 'Cibo secco, preparato con componenti specifici di origine naturale.', 32.99, 'Dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/253197/trainer-natural-small-e-toy-pollo-7kg.jpg?v=637508179672230000', 2028, 'Chicken', 'Wet'),

    new Food('Monge All Breeds Adult Agnello Riso e Patate', 'Alimento secco completo e bilanciato per cani adulti di tutte le razze', 49.99, 'Dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/270783/Monge-All-Breeds-Adult-Agnello-Riso-e-Patate-12Kg.jpg?v=637852818287730000', 2026, 'Lamb', 'Wet'),

    new Toy('Palla per Cane Snack Labirint Gomma', "Gioco d'intelligenza, indicato per cani piccoli", 5.90, 'Dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/218027/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-dog-activity-palla-snack-in-gomma-naturale-tric87.jpg?v=637454594657400000', 'soft', true),

    new Toy('Gioco Gatto Canna Da Pesca Con Pesce CM.42', 'Gioco per gatti con piume e strisce per far divertire il tuo felino.', 3.99, 'Cat', 'https://arcaplanet.vtexassets.com/arquivos/ids/273114/LOVEDI-GIOCO-GATTO-CANNA-DA-PESCA-CON-PESCE-CM.42.jpg?v=637921027967030000', 'hard', false),

    new PetKennel('Cuccia esterna per Cani Eco Lodge', 'Cuccia ideale proteggere il tuo amico a quattro zampe dalle fredde serate invernali.', 69.99, 'Dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/225622/p-a-y--canile-eco-lodge-medium.jpg?v=637454754161230000', 'Plastic', 'Large'),

    new PetKennel('Canile in Legno Habitat', 'Casa di legno ideale esterna per il tuo cane realizzata in pino nordico.', 149.00, 'Dog', 'https://arcaplanet.vtexassets.com/arquivos/ids/216811/https---www.arcaplanet.it-media-catalog-product--b-a-baita-ferc14_1.jpg?v=637454582543530000', 'Wood', 'Small')

];
