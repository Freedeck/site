<script>
  const {nottall} = $props();
</script>

<div class="policy-wrapper">
  <div class={"policy"+ (nottall ? " nottall": "")}>
    <slot />
  </div>
</div>

<style>
  .policy {
    border-radius: 1.5rem;
    backdrop-filter: blur(1.5rem);
    background: rgba(45, 45, 50, 0.25);
    border: var(--generic-border);
    padding: 1.5rem;
    text-align: center;
  }

  .nottall {
    padding: .5rem 1.5rem .5rem 1.5rem;
  }

  .policy-wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
</style>
