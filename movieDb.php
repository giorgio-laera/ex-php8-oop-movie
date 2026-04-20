<?php
$comic = new Genre('Comico');
$adventur = new Genre('Avventura');
$drammatic = new Genre('Drammatico');

$movies=[
new Movie('Chiedimi se sono felice', 2000 ,' Aldo, Giovanni e Giacomo',false,),
new Movie('Sole a catinelle', 2013, 'Checco Zalone',true,)
];
//aggiutnta descrizione ai film
$movies[0]-> description = 'Narra la storia di tre amici precari a Milano (un attore, un doppiatore, una statua vivente) che cercano di mettere in scena il Cyrano de Bergerac. La loro amicizia, solida ma piena di incomprensioni, si rompe per una donna (Marina) e per le loro insoddisfazioni personali. La narrazione alterna il presente on-the-road in Sicilia al passato milanese, esplorando temi come il tradimento, il perdono e la passione per il teatro.';
$movies[1]-> description = 'Narra la storia di Checco, un venditore di aspirapolvere ottimista ma in crisi, che promette al figlio Nicolò una vacanza da sogno in cambio di pagelle perfette, finendo per intraprendere un rocambolesco viaggio in Molise e Toscana';

//aggiunta casa produttrice ai film
$movies[0]->setProductor('Medusa Film'); 
$movies[1]->setProductor('Medusa Film'); 

//aggiunta generi ai film
$movies[0]->addGenre($comic);
$movies[0]->addGenre($drammatic);
$movies[1]->addGenre($comic);
$movies[1]->addGenre($adventur);