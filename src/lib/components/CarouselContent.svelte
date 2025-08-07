<script>
  import GlassPane from "./GlassPane.svelte";
  import {Splide,SplideSlide} from "@splidejs/svelte-splide";
  import '@splidejs/svelte-splide/css';
  import { onMount } from "svelte";
  let slider;

  const map = [
    {
      "url": "/img/e1.png",
      "alt": "The Editor",
      "text": ["Comprehensive Tile Editor", "This is the Tile Editor. It allows you to create your own tiles that do almost any action you can think of. Any plugin can hook into this system and create their own tiles, like Spotify (shown)."]
    },
    {
      "url": "/img/e_mktp.png",
      "alt": "The Marketplace",
      "text": ["Use The Marketplace", "Freedeck alone is just a simple soundboard, and system audio controller. However, that's not all it has to be. You can use the Marketplace to download any plugin available (or make your own) to control just about any app you want!"]
    },
    {
      "url": "/img/cs.svg",
      "alt": "More coming soon!",
      "text": ["More coming soon!", "Freedeck is not even a finished project yet, which means there's so much more possibility as to what the app can expand to be. Check back later for more screenshots here, too!"]
    }
  ]

  let currentSlideTitle = $state("Freedeck");
  let currentSlideText = $state("is an app");
  const e = (x) => {
    const object = map[x.detail.splide.index].text;
    currentSlideText = object[1];
    currentSlideTitle = object[0];
  }
</script>

<div class="content">
  <div class="left">
    <Splide on:arrowsUpdated={e} aria-label="My Favorite Images" bind:this={slider}>
      {#each map as obj}
        <SplideSlide>
          <img src={obj.url} alt={obj.alt} loading="lazy">
        </SplideSlide>
      {/each}
    </Splide>
  </div>
  <div class="right">
    <center>
      <h1>{currentSlideTitle}</h1>
      <p>{currentSlideText}</p>
    </center>
  </div>
</div>

<style>
  .content {
    margin: 1.5rem;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    gap: 1.5rem;
  }
  .left, .right {
    width: 50%;
    border-radius: 1.5rem;
    border: var(--generic-border);
  }

  .right {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  :global(.splide__slide img) {
    border-radius: 1.5rem;
    width: 100%;
    height: auto;
  }
</style>