
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css -->
    <link rel="stylesheet" href="./style.css" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap"
      rel="stylesheet"
      />

    <!-- Fontawesome icons -->
    <script
      src="https://kit.fontawesome.com/5bb93003c2.js"
      crossorigin="anonymous"

      ></script>
    <title>Kauppa</title>
  </head>
  <body>
    <header class="header">
      <div class="header__img"></div>
      <h1>LiilaBag</h1>
    </header>

    <nav class="nav">
      <a href="#">
        <img src="./images/logo_large.png" alt="liilabag Logo" />

        <ul>
          <a class="nav__item" href="#design">
            <li>Design</li>
          </a>
          <a class="nav__item" href="#merch">
            <li>Tuoteet</li>
          </a>
          <a class="nav__item nav__toggle" href="#events">
            <li>Tapahtumat</li>
          </a>
          <a class="nav__item nav__toggle" href="#about">
            <li>Meistä</li>
          </a>
          <a class="nav__item nav__toggle" href="#contact">
            <li>Yhteystiedot</li>
          </a>
        </ul>
      </a>
    </nav>

    <main>
      <section id="design" class="design">
        <div class="design__header">
          <h2 class="section__heading design__heading">Design</h2>
          <p class="section__info design__info">
            LiilaBag ei ole vain vaateliike, vaan myös pukeutumisasiantuntijasi. Kun haluat onnistua uusissa, sinua pukevissa asuvalinnoissa - opastamme juuri sinulle sopivat värit ja tyylin.  LiilaBagissa sinua palvelevat  pukeutumisen, muodin ja värikonsultoinnin todelliset asiantuntijat - koulutetut pukeutumisneuvojat.

          </p>
        </div>
   
        <div class="design-wrapper">
          <div class="design__item">
            <figure>
              <a href="#">
                <img
                  src="./images/naiset.jpg"
                  alt="nainen punainen takki"
                />
              </a>
            </figure>

            <h3>Naiset</h3>
            <p>
               Liilan uniikit ja kauniit printit herättävät mielikuvituksen eloon ja pitkäkestoiset ajattomat mallit kestävät aikaa.</p>
            <button class="btn-medium">Info</button>
          </div>

          <div class="design__item">
            <figure>
              <a href="#">
                <img
                  src="./images/miehet.jpg"
                  alt="mies nahkatakissa"
                />
              </a>
            </figure>

            <h3>Miehet</h3>
            <p>
              Vuosikymmenten kokemuksella voimme yksinkertaisesti todeta, että meillä on vaatteita kaikille miehille.</p>
            <button class="btn-medium">Info</button>
          </div>

          <div class="design__item">
            <figure>
              <a href="#">
                <img
                  src="./images/lapset.jpg"
                  alt="lapsi one of a kind"
                />
              </a>
            </figure>

            <h3>Lapset</h3>
            <p>
              Liila luo ajattomia vaatekaapin luottotuotteita niin lapsille. Tuotteet on valmistettu laadukkaista kankaista.</p>
            <button class="btn-medium">Info</button>
          </div>
        </div>
      </section>

      <div class="transition">
        <h2>Intohimosta pukeutumiseen</h2>
      </div>

      <section id="merch" class="merch">
        <div class="merch__header">
          <h2>Tuoteet & Merchandise</h2>
          <hr />
          <p class="section__info">
          Osta vaatteet Liilabag vaatekaupasta mekot, farkut, topit, paidat, kengät ja paljon muuta. Muodilla on oma luonteensa, kuten ihmisillä itselläänkin. Joskus se on kovaäänistä, kimeää ja rohkeaa. Joskus varautunut, tyylikäs ja huomaamaton. Asut kannattaa sovittaa luonteenpiirteisiisi, jotta kokonaiskuva on aito.

          </p>
        </div>

        <div class="item item-1">
          <p>Kengät ja asusteet</p>
        </div>
        <div class="item item-2">
          <p>Pipot ja myssyt</p>
        </div>
        <div class="item item-3">
          <p>Trendikästä nyt</p>
        </div>
        <div class="item item-4">
          <p>Paidat & paitapuserot </p>
        </div>
        <div class="item item-5">
          <p>Uutuudet</p>
        </div>
        <div class="item item-6">
          <p>Housuja & Farkuja </p>
        </div>
        <div class="item item-7">
          <p>Ale & Kampanjat </p>
        </div>
      </section>

      <div class="transition">
        <h2>Intohimosta pukeutumiseen</h2>
      </div>

      <section id="events" class="events">
        <div class="events__header">
          <h2 class="section__heading events__heading">Tulevat tapahtumat</h2>
          <p class="section__info events__info">
            Tervetuloa meidän ja yhteistyökumppaneidemme kiinnostaviin tapahtumiin!
          </p>
        </div>

        <div class="events-wrapper">
          <div class="events__item">
            <div class="events__item-inner">
              <div class="events__item-front events__item-front-1">
                <h3>13.03.2023</h3>
                <h4>Muotikaupan seminaari</h4>
                <p>
                  Ammattilaiset muotimaailman huipulta kertoivat millaisia ovat muotikaupan trendit nyt ja tulevaisuudessa.
                </p>
              </div>
              <div class="events__item-back">
                <img
                  src="./images/seminaari.jpg"
                  alt="an image of our model at the upcoming event"
                />
                <h3>Muotikaupan seminaari</h3>
                <p>
                  Muotikaupan trendit nyt ja tulevaisuudessa.

                </p>
                <button class="btn-medium">Info</button>
              </div>
            </div>
          </div>

          <div class="events__item">
            <div class="events__item-inner">
              <div class="events__item-front events__item-front-2">
                <h3>20.04.2023</h3>
                <h4>Kenkäviikko</h4>
                <p>
                  Kenkäviikolla tapaat kollegat ja näet uudet mallistot saman katon alla yli 40 tavarantoimittajalta tehokkaasti.
                </p>
              </div>
              <div class="events__item-back">
                <img
                  src="./images/kenkäviikko.jpg"
                  alt="an image of our model at the upcoming event"
                />
                <h3>Kenkäviikko</h3>
                <p>
                  Kenkäviikolla tapaat kollegat ja näet uudet mallistot.
                </p>
                <button class="btn-medium">Info</button>
              </div>
            </div>
          </div>

          <div class="events__item">
            <div class="events__item-inner">
              <div class="events__item-front events__item-front-3">
                <h3>12.05.2023</h3>
                <h4>Helsingin muotiviikko</h4>
                <p>
                  Viikon tavoitteena on piristää alan kansainvälistymisponnisteluja ja avittaa muotia vientiin.
                </p>
              </div>
              <div class="events__item-back">
                <img
                  src="./images/muotiviikko.jpg"
                  alt="an image of our model at the upcoming event"
                />
                <h3>Helsingin muotiviikko</h3>
                <p>
                  Viikon tavoitteena on piristää alan kansainvälistymisponnisteluja.
                </p>
                <button class="btn-medium">Info</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="transition">
        <h2>Intohimosta pukeutumiseen</h2>
      </div>

      <section id="about" class="about">
        <div class="about__header">
          <h2 class="section__heading about__heading">Meistä</h2>
          <p class="section__info events__info">
            Vaatekauppa on vuodesta 2020 saakka toiminut kotimainen vaateliike. Tarjoamme sinulle laajan valikoiman niin naisten kuin miestenkin vaatteita ja asusteita. Huolellisesti valittujen brändiemme minimalistinen ja ajaton tyyli takaa sen, ettei tuotteisiimme voi kuin ihastua!
            
          </p>
        </div>

        <div class="selection">
          <input type="checkbox" id="select-more" name="select-more" />
          <label for="select-more" class="select"><bold>MYYMÄLÄT +</bold></label>
          <p class="content">
            Nelikkotie 3, Espoo</p>
           <p class="content">Aukiolot</p>
           <p class="content">Ma - La, klo 13-17</p>     
        </div>
      </section>

      <div class="transition">
        <h2>Intohimosta pukeutumiseen</h2>
      </div>

      <!--

      <section id="" class="contact">
        <div class="contact-heading">
          <h1>Ota yhteyttä</h1>
          <form class="contact__form" action="#" autocomplete="off">
            <label for="name">Nimi:</label>
            <input type="text" id="name" name="name" />
            <label for="email">Sähköposti:</label>
            <input type="email" id="email" name="email" />
            <textarea
              name="message"
              id="message"
              cols="30"
              rows="10"
              placeholder="kirjoittaa tässä viestisi..."
            ></textarea>
            <button class="btn-submit" type="submit" value="Submit">
              Lähettä
            </button>
          </form>
        </div>

      </section>
      
-->


<!--Yhteystiedot -->
      <section id="" class="contact">
        <div class="card">
          <h1>Ota yhteyttä</h1>
          <form class="contact__form" action="#" autocomplete="off">
            <label for="name">Nimi:</label>
            <input type="text" id="name" name="name" />
            <label for="email">Sähköposti:</label>
            <input type="email" id="email" name="email" />
            <textarea
              name="message"
              id="message"
              cols="30"
              rows="10"
              placeholder="kirjoittaa tässä viestisi..."
            ></textarea>
            <button class="btn-submit" type="submit" value="Submit">
              Lähettä
            </button>
          </form>
        </div>

      </section>

    
    

    </main>

    <footer class="footer">
      <p class="copyright">Copyright &copy; 2023, Harjoitus</p>

      <div class="socials">
        <ul>
          <li><a href="#">
            <i class="fab fa-facebook-square"></i>
          </a></li>
          <li><a href="#">
            <i class="fab fa-instagram-square"></i>
          </a></li>
          <li><a href="#">
            <i class="fab fa-twitter-square"></i>
          </a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>