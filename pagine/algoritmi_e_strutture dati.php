<?php


include '../include/head.html';
?>
    
<body >
    <?php


    include '../include/menu-index.html';
    ?>
    <div class="container-fluid sfondo_grafo custom-container-95" >
        <h1 class="testo-centrato ">Progetto di algoritmi e strutture dati in gruppo</h1>
        <p class="black">
            Nel corso di algoritmi e strutture dati mi hanno dato un progetto da fare e in una settimana dovevo risolverlo. Esso consisteva nel calcolare la distanza tra coppie di nodi partendo da un grafo. 
            Il grafo secondo la consegna sarà sempre connesso e ogni ciclo semplice farà parte di un sottografo completo.
            L'input del compito era il seguente: un file con N + M + Q righe.
        </p>
            <ul class="black">
                    <li class="p-1">
                        La prima riga riporta 3 numeri interi positivi: N, M e Q, rispettivamente il numero di luoghi, di piste ciclabili
                        e di richieste;
                    </li>
                    <li class="p-1">
                        Le successive M righe descrivono la mappa: ciascuna riga contiene due interi ai e bi, compresi tra 0 ed N 􀀀1,
                        ad indicare che ai e bi sono collegati da una pista ciclabile;
                    </li>
                    <li class="p-1">
                        Le successive Q righe forniscono le richieste: ciascuna contiene due interi uj e vj , compresi tra 0 ed N 􀀀 1, i
                        luoghi tra i quali si vuole conoscere la distanza minima;
                    </li>
            </ul>
            <p class="black">Come output era come segue:</p>
            <ul class="black">
                    <li class="p-1">
                        La j-esima riga deve contenere la risposta alla j-esima richiesta qj : ossia il minimo numero di piste ciclabili
                        che bisogna percorre per arrivare da uj a vj .
                    </li>
                    
            </ul>
        <section>
            <article>
                <h2>Assunzioni</h2>
                <ul>
                    <li>1 ≤ N ≤ 50000</li>
                    <li>1 ≤ M ≤ 500000</li>
                    <li>1 ≤ Q ≤ 50000</li>
                    <li>Ogni grafo è connesso.</li>
                    <li>Ogni grafo è non diretto.</li>
                </ul>
            </article>
            <article>
                <h2>Casi di test</h2>
                <ul>
                    <li>20 casi di test in totale;</li>
                    <li>In almeno 6 casi N ≤ 10000 e Q ≤ 10000;</li>
                    <li>In almeno 10 casi l’input è un albero;</li>
                    <li>In almeno 14 casi l’input è un albero con al più una cricca.</li>
                </ul>
            </article>
            <article>
                <h2>I limiti di tempo e memoria sono:</h2>
                <ul>
                    <li>Tempo limite massimo: 2 secondi;</li>
                    <li>Memoria massima: 32 MB;</li>
                </ul>
            </article>
            <article>
                <h2>Punteggi e correttore</h2>
                <ul>
                    <li>Ogni caso di test vale 5 punti.</li>
                    <li>Il punteggio massimo è di 100 punti.</li>
                    <li>Per ogni caso di test per cui la vostra soluzione fornisce un output entro i limiti di tempo e memoria:</li>
                    <li>se avete calcolato correttamente tutte le distanze richieste ottenete 5 punti;</li>
                    <li>in caso contrario, si prendono 0 punti.</li>
                    <li>Nota: se uno o più risposte sono errate si ottengono comunque 0 punti.</li>
                </ul>
            </article>
            <article>
                <h2>Valutazione</h2>
                <ul>
                    <li>Conta il punteggio dell’ultimo sorgente inviato al sistema;</li>
                    <li>Il progetto è superato con un punteggio non inferiore a 30 punti;</li>
                    <li>C’è un limite di 40 sottoposizioni;
                </ul>
            </article>
            <article>
                <h2>Esempio</h2>
                <table>
                    <thead>
                        <tr>
                        <th>File input.txt</th>
                        <th>File output.txt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <ul class="esempi">
                            <li>7 12 5</li>
                            <li>0 1</li>
                            <li>0 2</li>
                            <li>0 4</li>
                            <li>0 5</li>
                            <li>0 6</li>
                            <li>2 3</li>
                            <li>2 4</li>
                            <li>2 5</li>
                            <li>2 6</li>
                            <li>4 5</li>
                            <li>4 6</li>
                            <li>5 6</li>
                            <li>0 1</li>
                            <li>6 3</li>
                            <li>3 1</li>
                            <li>6 5</li>
                            <li>3 5</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="esempi">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>1</li>
                            <li>2</li>
                            </ul>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <table>
                    <thead>
                        <tr>
                        <th>File input.txt</th>
                        <th>File output.txt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <ul class="esempi">
                            <li>11 17 5</li>
                            <li>0 5</li>
                            <li>0 6</li>
                            <li>1 8</li>
                            <li>2 10</li>
                            <li>3 9</li>
                            <li>4 7</li>
                            <li>4 8</li>
                            <li>4 9</li>
                            <li>4 10</li>
                            <li>5 6</li>
                            <li>6 10</li>
                            <li>7 8</li>
                            <li>7 9</li>
                            <li>7 10</li>
                            <li>8 9</li>
                            <li>8 10</li>
                            <li>9 10</li>
                            <li>9 10</li>
                            <li>1 3</li>
                            <li>2 3</li>
                            <li>9 1</li>
                            <li>10 6</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="esempi">
                            <li>1</li>
                            <li>3</li>
                            <li>3</li>
                            <li>2</li>
                            <li>1</li>
                            </ul>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <article>
                <h2>Soluzione proposta</h2>
                <p>Prima di tutto bisogna sfruttare l'algoritmo di erdos per capire i padri dei vari nodi, 
                    poi fare una dfs(conosciuta come ricerca per profondità) dove classifico gli archi in modo da capire quale reazione c'è tra una coppia di nodi.
                    Ad esempio se un nodo è discendente di un altro lo capisco al volo sfruttando l'ultimo algoritmo.
                    Dopo aver eseguito questi due algoritmi posso calcolare le distanze delle varie coppie di nodi con i seguenti passi:
                </p>
                <ol>
                    <li>Prendo il primo nodo e verifico se è un discendente dell'altro, se si in modo ricorsivo vado nel padre e rifaccio il controllo di questo punto</li>
                    <li>Prendo il secondo nodo e verifico se è un discendente dell'altro, se si in modo ricorsivo vado nel padre e rifaccio il controllo di questo punto</li>
                    <li>Finalmente ho i due nodi vicini, ma possono verificarsi delle condizioni ed è necessario verificarle tutte:
                        <ul>
                            <li>Hanno il padre in comune ma i due nodi non sono collegati indirrettamente</li>
                            <li>Il padre è uno dei </li>
                        </ul>


                    </li>
                    <li>Stampo su file il risultato del numero degli archi per ogni coppia di nodi.</li>
                </ol>
            </article>
            <article>
                <h2>File per download e altre risorse del progetto</h2>
                <table>
                    <thead>
                        <tr>
                            <th>File cpp soluzione personale</th>
                            <th>File con input e output di grafi d'esempio</th>
                            <th>Slide ufficiale consegna</th>
                            <th>Slide soluzione ufficiale</th>
                            <th>Tutto compresso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/progetto.cpp" target="_blank">Nome file cpp 1</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/input_output.zip" target="_blank">File per input con le soluzioni</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/Slide-consegna.pdf" target="_blank" >Slide della consegna</a></li>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/Testi-consegna.pdf" target="_blank">Testo della consegna</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/sol_prog1.pdf" target="_blank">Prima soluzione</a></li>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/sol_prog1_lineare.pdf" target="_blank">Seconda soluzione</a></li>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/soluzioni_p1.zip" target="_blank">Codice sorgente</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/progetto_algoritmi_e_strutture_dati/progetto_algoritmi_e_strutture_dati.zip" target="_blank">Download di tutto</a></li>
                            </ul>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </section>

    </div><!--fine  <div class="container sfondo_grafo width-85">-->


<?php


    include '../include/footer-index.html';
    ?>

</body>

</html>