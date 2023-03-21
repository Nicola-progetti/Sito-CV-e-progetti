<?php


include '../include/head.html';
?>
    
<body >
    <?php


    include '../include/menu-index.html';
    ?>
    <div class="container-fluid sfondo_grafo custom-container-95" >
        <h1 class="testo-centrato ">Progetto di comunicazioni multimediali in gruppo di cinque persone</h1>
        <p class="black">
            Nel corso di comunicazioni multimediali dati mi hanno dato un progetto da fare in gruppo di cinque persone come esame finale.
            Esso consiste nel realizzare un software che confronta un'immagine in input con un archivio, se ci sono immagini simili allora
            le mostra.
        </p>
        <section>
            <article>
                <h2>Obiettivo</h2>
                <p>
                    Realizzare un software per l’organizzazione di librerie di immagini in grado di ricercare all’interno di una libreria un contenuto 
                    sulla base di un esempio fornito in ingresso al sistema.
                </p>
            </article>
            <article>
                <h2>Motivazione</h2>
                <p>
                    Tutti noi disponiamo di un elevato numero di fotografie, raccolte negli anni, e i sistemi di ricerca disponibili sui dispositivi 
                    sono spesso inefficienti poiché consentono di ricercare le immagini sulla base di un numero predefinito di informazioni, spesso 
                    memorizzate all’interno dei metadati (data, GPS). In alcuni casi, è ancora possibile includere come elemento della ricerca, la 
                    corrispondenza di alcune feature relative al contenuto dell’immagine (presenza di volti), che richiedono quindi di essere estratti 
                    e memorizzati.
                </p>
            </article>
            <article>
                <h2>Requisiti</h2>
                <ul>
                    <li>Creare una raccolta di immagini (personali o scaricate da Internet in conformità con le licenze)</li>
                    <li>Sviluppare un algoritmo di ricerca e matching in grado di restituire le top-N immagini che dispongono di caratteristiche simili a quella utilizzata come query</li>
                    <li>Definire dei criteri di ricerca (colore, texture, dimensione, regioni con caratteristiche specifiche)</li>
                    <li>Abbiamo deciso di aggiungere un punteggio (ad esempio in percentuale) che indichi la similitudine delle immagini trovate</li>
                </ul>
            </article>
            <article>
                <h2>Organizzazione</h2>
                <p>
                    Prima di tutto ci siamo confrontati per capire quali algoritmi utilizzare , la gui . Due grafici molto importanti sono i seguenti:
                    <img src="../immagini/progetti/comunicazioni-multimediali-progetto-img-1.png" alt="" style="width: 90%;">
                    
                    <img src="../immagini/progetti/comunicazioni-multimediali-progetto-img-2.png" alt="" style="width: 90%;">

                </p>
            </article>
            <article>
                <h2>Algoritmi utilizzati per confrontare le immagini</h2>
                <ul>
                    <li>Istogrammi del colore (calcolati su intera immagine o aree)</li>
                    <li>ORB (clustering, region growing, …)</li>
                    <li>Intelligenza artificiale come Yolo</li>
                    <li>Metadati</li>
                    
                </ul>
            </article>
                <h2>Interfaccia grafica</h2>
                <p>Uno del gruppo si è occupato della GUI e integrato i vari algoritmi che gli altri hanno sviluppato .</p>
                <img src="../immagini/progetti/comunicazioni-multimediali-progetto-img-3.png" alt="" style="width: 90%;">
            <article>
                <h2>Indexing spiegazione</h2>
                <p>
                    Il software creato possiede un sistema di indexing per la ricerca di immagini che è una tecnica utilizzata 
                    per accelerare la ricerca di 
                    immagini all'interno di grandi collezioni di immagini. L'idea alla base del sistema di indexing è quella 
                    di creare una rappresentazione sintetica dell'immagine, chiamata "feature", che permette di descrivere 
                    in modo efficiente le caratteristiche principali dell'immagine. <br>
                    Una volta estratte le feature, queste vengono organizzate in un indice, nel mio caso il nome dell'immagine,
                     che permette di effettuare una 
                    ricerca efficiente all'interno della collezione di immagini. Quando si cerca un'immagine all'interno 
                    della collezione, si estraggono le feature dall'immagine di ricerca e si confrontano con quelle presenti 
                    nell'indice, in modo da individuare le immagini più simili. <br>
                    Il sistema di indexing rende la ricerca di immagini molto più veloce perché evita di dover confrontare 
                    l'immagine di ricerca con tutte le immagini presenti nella collezione. Invece, il confronto viene 
                    effettuato solo con le feature dell'indice, che rappresentano una rappresentazione sintetica delle immagini 
                    della collezione. </br>
                    Ogni algoritmo di confronto ha il suo sistema di indexing in dei file csv così è tutto più veloce.


                </p>

            </article>
                
            <article>
                <h2>La mia parte</h2>
                <p>
                    Io mi sono occupato sostanzialmente di implementare l'algoritmo ORB per confrontare le immagini. Prima di tutto
                    scansiono le immagini dell'archivio ,ho utilizzato l'algoritmo ORB per estrarre le feature dall'immagine dividendola in
                    quattro quadranti. Queste feature rappresentano i punti chiave dell'immagine, che corrispondono a regioni dell'immagine con proprietà 
                    distintive, come angoli, bordi e altri dettagli. Le feature ORB sono particolarmente utili perché sono invarianti 
                    alla scala e alla rotazione,successivamente le salvo in quattro file csv. Quando devo fare il confronto delle feature e l'immagine 
                    prima devo estrarre le informazioni dei quattro file csv, eseguire l'algoritmo ORB alla nuova immagine e faccio il confronto utilizzando 
                    la utilizzando la distanza tra i punti d'interesse trovati da questo particolare algoritmo.


                </p>


            </article>
            <h2>File per download e altre risorse del progetto</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Consegna del compito</th>
                            <th>Prima bozza degli algoritmi</th>
                            <th>Presentazione iniziale</th>
                            <th>Tutto compresso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/comunicazione_multimediale/Comunicazioni Multimediali 2020 (1).pdf" target="_blank">Consegna del compito</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/comunicazione_multimediale/Cosa fa ciascuno.pdf" target="_blank">Prima bozza degli algoritmi</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/comunicazione_multimediale/Presentazione iniziale.pdf" target="_blank" >Presentazione iniziale</a></li>
                                
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/comunicazione_multimediale/comunicazione_multimediale.zip" target="_blank">Download di tutto</a></li>
                                
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