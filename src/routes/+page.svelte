<script>
  import CarouselContent from "$lib/components/CarouselContent.svelte";
  import InfoBlock from "$lib/components/InfoBlock.svelte";
  import NoticeBlock from "$lib/components/NoticeBlock.svelte";
  import SeparatorBlock from "$lib/components/SeparatorBlock.svelte";
  import GlassPane from "$lib/components/GlassPane.svelte";
</script>


<GlassPane nottall>
<a class="nostyle" href="https://github.com/orgs/Freedeck/discussions/21">Freedeck is not associated/affiliated with Free-Your-Stream UG's FreeDeck (a different hardware solution).</a>
</GlassPane>
<center class="image-comparison">
  <p>Companion</p>
  <p>Your Device</p>
</center>
<div class="imgs">
  <img
    loading="lazy"
    width="765"
    height="430"
    src="/img/companion.png"
    alt="Companion Preview"
  />
  <img
    loading="lazy"
    width="554"
    height="331"
    src="/img/app.png"
    alt="App Preview"
  />
</div>
<center>
  <h2>More than just a macropad; it's a Freedeck.</h2>
  <br />
  <a
    href="https://github.com/Freedeck/app/releases/latest/download/Freedeck.exe"
    class="download-container"
  >
    <span>
      <b>Get it? Get Freedeck.</b>
      Click to download Freedeck and join many users today!
    </span>
  </a>
  <br />
  <br />
  <br />
</center>

<div class="info-blocks">
  <InfoBlock icon="/icons/stylus_note.svg">
    <h3>Fully Customizable</h3>
    <p>
      Freedeck is your own macropad, so why not customize it to how you like?
      The app comes with 15 preinstalled themes, and you can add more from the
      marketplace. You may even change the size, background color, or text of
      the Tiles on the screen, and so much more!
    </p>
  </InfoBlock>

  <InfoBlock icon="/icons/controller_gen.svg">
    <h3>Control Your Computer</h3>
    <p>
      In addition to being a powerful soundboard, you can also use Freedeck to
      control the volume of your computer and any app running on it! Many
      plugins also add full integration for apps such as Spotify, OBS, or
      WaveLink!
    </p>
  </InfoBlock>

  <InfoBlock icon="/icons/extension.svg">
    <h3>Many Plugins</h3>
    <p>
      For developers, Freedeck has a very extensible API that's easy to
      understand and write for. Simple tile types like text, button, and slider
      allow you to have most interactions down from the very start, or you can
      create your own uniquely rendered Tiles!
    </p>
  </InfoBlock>
</div>

<SeparatorBlock />

<CarouselContent />

<SeparatorBlock />

<div class="content">
  <div class="block">
    <h2>What is Freedeck?</h2>
    <div class="text">
      <p>
        Freedeck is a free and open source alternative to the Elgato Stream
        Deck, providing a fully user-customizable macropad. It's been my solo
        project for around 3+ years now, helping me gain experience and design
        knowledge. The app's core philosophy is to make things easy to
        understand and do.
      </p>
      <p>
        <a href="https://github.com/freedeck">
          Freedeck's entire source code and history is also completely
          open-source on GitHub.
        </a>
      </p>
    </div>
  </div>
  <div class="block">
    <h2>Why Freedeck?</h2>
    <div class="text">
      <p>In addition to a completely free and unlimited grid space, you can:</p>
      <ul>
        <li>Play sounds</li>
        <li>Control system and application volume</li>
        <li>Install/create custom themes</li>
        <li>
          Install/create plugins that can control:
          <ul>
            <li>
              <a
                class="trapped"
                href="https://github.com/Freedeck/plugins/tree/main/YTMD.src"
                >YTMD (v1)</a
              >
            </li>
            <li>
              <a
                class="trapped"
                href="https://github.com/Freedeck/plugins/tree/main/WaveLink.src"
                >WaveLink</a
              >
            </li>
            <li>
              <a
                class="trapped"
                href="https://github.com/Freedeck/plugins/tree/main/OBSControl.src"
                >OBS</a
              >
            </li>
            <li>And anything else you can think of!</li>
          </ul>
        </li>
        <li>Have as many Tiles as you want</li>
        <li>Customize the way those Tiles look</li>
        <li>Personalize your Freedeck with a theme</li>
      </ul>
    </div>
  </div>
  <div class="block">
    <h2>Not sure yet?</h2>
    <div class="text">
      <p>
        I'd recommend at least trying Freedeck out. It's free, after all. And if
        you don't like it, you can always uninstall it! The entire app is stored
        in your user's AppData/FreedeckApp folder.
      </p>
      <p>However, I'm sure you'll love it.</p>
    </div>
  </div>
  <div class="block red">
    <h2>Donation</h2>
    <div class="text">
      <i
        >Donating is not required to use Freedeck, and will <strong
          >never</strong
        > be.</i
      >
      <p>
        If you'd like to support me for this effort of such a large project,
      </p>
      <a href="https://ko-fi.com/aidens"
        >you may donate to me on Ko-fi (click).</a
      >
      <p>
        Any amount is appreciated, and will go towards the development of
        Freedeck.
      </p>
    </div>
  </div>
</div>
<style>
  .text {
    max-width: 50%;
  }
  .download-container {
    padding: 2rem;
    transition-duration: 0.25s;
  }
  .download-container:hover {
    backdrop-filter: blur(1.5rem);
    transform: scale(1.2) rotate(2.5deg);
  }
  .image-comparison {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
  }

  .imgs {
    display: flex;
    justify-content: space-around;
    align-items: center;
    gap: 1em;
  }

  .imgs img {
    width: 45%;
    height: auto;
    border-radius: 1.5rem;
  }

  .block {
    display: flex;
    gap: 1.25rem;
    align-items: center;
    justify-content: space-evenly;
    border-radius: 1.5rem;
    width: fit-content;
    background: rgba(45, 45, 50, 0.25);
    border: var(--generic-border);
    border-radius: 1.5rem;
    padding: 1.5rem;
  }

  .content {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    margin: 1.5rem;
    align-items: center;
    justify-content: start;
  }

  .download-container {
    font-size: x-large;
  }
  .info-blocks {
    display: flex;
    flex-direction: row;
    gap: 1.5rem;
    margin: 0 1.5rem 0 1.5rem;
    align-items: center;
    justify-content: space-between;
  }
</style>
