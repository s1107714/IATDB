<article class="showCard  a-popup" data-species-of-animal={{$sitters->species}}>
    <header class="showCard__header u-flex-v-center">
                <h2 class="showCard__heading">{{$sitters->name}}</h2>
        </header>
        <figure class="showCard__figure u-flex-v-center">
            <img class="showCard__image" src="{{$sitters->image}}" alt="{{$sitters->name . ' ' . $sitters->species}}">
        </figure>
        <section class="showCard__text u-flex-v-center">
            <p>
                {{$sitters->description}}
            </p>
        </section>

        <section class="showCard__buttonSection u-flex-v-center">
            <button class="showCard__button showCard__button-back u-flex-v-center" onclick="window.location.href='/sitters'">Terug naar overzicht</button>
        </section>

</article>