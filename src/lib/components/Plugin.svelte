<script>
  let {id, title, author, version, description, repoTitle, freedeckURI, userHasFd, installed, official=false,downloadable=false} = $props();

  let checkButtonText = $state("Download");
  $effect(() => {
    if(installed.includes(id)) {
      checkButtonText = "Check for Updates";
    }
  })
  const check = (e) => {
    console.log(freedeckURI)
  }
</script>

<div hovereffect="yes" class="item" style="cursor: default;">
  <div style="font-weight: bold;">{title} • by {author}</div>
  <div>v{version}</div>
  <div class="plugin-ifo">{description}</div>
  {#if downloadable && userHasFd}
    <button on:click={check}>{checkButtonText}</button>
  {/if}
  {#if official}
    <img src="/icons/official.svg" loading="lazy" style="width: 8rem;" alt="Official plugin." />
  {/if}
</div>

<style>
  .item {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    color: var(--modal-item-text);
    border: var(--generic-border);
    border-radius: 1.5rem;
    margin: 0.5rem 0;
    gap: 1rem;
    width: 200px;
    text-overflow: ellipsis;

    background: var(--modal-item-bg);
    background-size: var(--modal-item-bg-size);
    animation: var(--modal-item-bg-anim);
  }

  button {
    width: var(--button-width);
    height: var(--button-height);
    overflow: hidden;
    min-width: var(--button-width);
    min-height: var(--button-height);
    border-radius: var(--tile-radius);
    background: var(--tile-bg);
    text-align: center;
    border: var(--tile-border); /* Add a border */
    color: var(--text-color-secondary);
    display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;
    background-size: 100% 100%;

    transition-duration: 0.15s;

    @media (hover: hover) {
      &.tiles-center:hover {
        transform: scale(1.05) translate(-48%, -49%);
        cursor: pointer;
      }
      &:hover:not(:has(.smaller)) {
        filter: brightness(0.84);
        color: var(--text-color-secondary);
        transform: scale(1.05);
        cursor: pointer;
      }
    }
  }
</style>
