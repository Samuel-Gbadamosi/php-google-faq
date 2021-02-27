<?php


$list = [
  [
    'titolo' => " Come state implementando la recente decisione della Corte di giustizia dell'Unione europea CGUE relativa al diritto all'oblio? ",
    'description' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa, La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome, Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi"
  ],
  [
    'titolo' => " Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    'description' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.
    Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.

    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online."
  ],
  [
    'titolo' => " Perché il mio account è associato a un paese?",
    'description' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa, La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome, Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi
    La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:"
  ],



]


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <img class="img" src="https://cdn.pixabay.com/photo/2015/09/14/04/19/google-939112__340.png" alt="">
      <h1>Privacy & Termini </h1>


    </div>
    <div class="main">
      <div class="lis">
        <ul>
          <li><a href="#">Introduzione</a></li>
          <li><a href="#">Norme sulla privacy</a></li>
          <li><a href="#">Termini di servizio</a></li>
          <li><a href="#">Technologie</a></li>
          <li><a href="#">Domande frequenti</a></li>
        </ul>

      </div>

      <div class="list">
        <?php
            for ($i=0; $i < count($list); $i++) {
              $tt = $list[$i]['titolo'];
              $des = $list[$i]['description']; ?>


              <h3 class="ans"><?php echo $tt?></h3>
              <h5 class="j"><?php echo $des?></h5>



         <?php } ?>
        <!-- <div class="textxt">

          <h3> Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h3>
          <div class="ans">
            <p class="f">La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi</p>

          </div>



        </div> -->



      <!-- </div> -->


    </div>

  </div>

</body>
</html>
