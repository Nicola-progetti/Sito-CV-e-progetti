<?php


include '../include/head.html';
?>
    
<body >
    <?php


    include '../include/menu-index.html';
    ?>
    <div class="container-fluid sfondo_grafo custom-container-95" >
        <h1 class="testo-centrato ">Progetto individuale di database</h1>
        <p class="black">
            Durante il corso di Database, il professore ha assegnato diversi progetti ai suoi studenti. 
            L'ultimo progetto consisteva nel caricare un database scritto in SQL in PostgresSQL, utilizzando alcune query 
            per eseguire operazioni specifiche e stampare determinati risultati. Le istruzioni per il progetto sono state 
            fornite in un file PDF, che ha incluso anche le specifiche delle query richieste per aggiornare la base di dati 
            e generare le stampe richieste.
        </p>
        <section>
            <article>
            <h2>Spiegazione di quello che ho fatto nel codice</h2>
            <p>
            Lascio le parole in inglese sia per le tabelle sia per i campi così da non confondersi.
            Person (id:int, name:char(50), address:char(50), age:int, height:float) </br>
            Car (targa:char(25), brand:char(50), color(30), owner:int) </br>
            - owner è una chiave esterna (FK) per la tabella Person </br>
            - Nessun attributo è nullo.   </br>
            </p>
            <ol>
                <li>Cancellare le due tabelle dal database se esistono già. </li>
                <li>Creare le due tabelle come descritto sopra.</li>
                <li>Generare 1 milione di tuple casuali, in modo che ciascuna tupla abbia un valore diverso per l'attributo "height", e inserirle nella tabella "Person". Assicurarsi che l'ultima tupla inserita, e solo quella, abbia il valore 185 per l'attributo "height".</li>
                <li>Generare altre 1 milione di tuple casuali e inserirle nella tabella "Car".</li>
                <li>Recuperare dal database e stampare su stderr tutti gli ID dei 1 milione di persone.</li>
                <li>Aggiornare tutte le tuple che hanno il valore 185 come height e fare in modo che abbiano un'altezza (height) uguale a 200 - (la tua query dovrebbe funzionare anche se ci sono molte tuple che hanno il valore 185 nell'attributo "height").</li>
                <li>Selezionare dalla tabella "Persona" e stampare su stderr l'ID e l'indirizzo della persona con height 200.</li>
                <li>Creare un indice B+tree sull'attributo "height".</li>
                <li>Recuperare dal database e stampare su stderr tutti gli ID delle 1 milione di persone.</li>
                <li>Aggiornare tutte le tuple che hanno il valore 200 come height e fare in modo che abbiano un'altezza (height) uguale a 210 -- (la tua query dovrebbe funzionare anche se ci sono molte tuple che hanno il valore 200 nell'attributo "height").</li>
                <li>Selezionare dalla tabella "Persona" e stampare su stderr l'ID e l'indirizzo della persona con height 210.</li>
            </ol>




            </article>
            <article>
                <h2>File per download e altre risorse del progetto</h2>
                <table>
                    <thead>
                        <tr>
                            <th>File Java soluzione personale</th>
                            <th>Libreria per collegarsi al DB con java e Postgres</th>
                            <th>Slide ufficiale consegna</th>
                            <th>Tutto compresso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/database/a3_192582.java" target="_blank">Soluzione java</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/database/postgresql-42.2.5.jre6.jar" target="_blank">Libreria</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/database/Assignment 3.pdf" target="_blank" >Slide della consegna</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="../file_progetti/database/database.zip" target="_blank">Download di tutto</a></li>
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