<script>
  import GlassPane from "./GlassPane.svelte";

  export let title = "Coming Soon";
</script>

<GlassPane>
  <h1>{title}</h1>
  <slot />
</GlassPane>
