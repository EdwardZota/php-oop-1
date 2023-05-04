<?php

$allGenres = ['avventura','azione','fantascienza'];

$avatar = new Movie('avatar_2','Avatar: The Way of Water','14/12/2022',$allGenres,4,'Jake Sully e Ney Tiri hanno messo su famiglia e stanno facendo del loro meglio per stare insieme. Devi lasciare la tua casa ed esplorare il misterioso mondo di Pandora. Quando una vecchia minaccia ritorna, Jake deve combattere gli umani.');

$superMario = new Movie('star_wars','Super Mario : The Movie','05/04/2023',$allGenres,5,'L\'idraulico Mario e suo fratello Luigi vengono trascinati in un misterioso tubo e finiscono nel magico regno dei funghi. Il paese è governato dalla principessa Peach, ma il malvagio re Bowser minaccia il regno con il suo esercito di Koopa e vuole distruggerlo. Quando si separa da Luigi ...');

$starWars = new Movie('super_mario','Star Wars','18/02/2024',$allGenres,null,'Il Primo Ordine continua a minacciare la pace in tutta la galassia. Le loro truppe superano di gran lunga e tecnicamente quelle della resistenza guidata dal generale Leia. A peggiorare le cose, è emersa un\'altra minaccia sotto forma di un nemico a lungo ritenuto morto. Nella lotta contro il male, tutte le speranze ora risiedono su Rey e i suoi amici mentre si imbarcano in una missione che alla fine potrebbe decidere la lotta tra Jedi e Sith.');


$movieList=[$avatar,$superMario,$starWars];