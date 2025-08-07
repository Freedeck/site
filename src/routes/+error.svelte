<script>
  import { page } from "$app/state";
</script>
<div class="policy-wrapper">
  <div class="policy">
    <h1>{page.status}</h1>
    <h1>{page.error?.message}</h1>
    <a href="/">Go Back</a>
  </div>
</div>

<style>
  .policy {
    border-radius: 1.5rem;
    width: 90vw;
    background: rgba(45, 45, 50, 0.25);
    border: var(--generic-border);
    border-radius: 1.5rem;
    padding: 1.5rem;
    text-align: center;
  }

  .policy-wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
</style>
