<script>
  import GlassPane from "./GlassPane.svelte";

  const {icon} = $$props;
</script>

<GlassPane>
  <div class="block-icon">
    <img src={icon}>
  </div>
  <div class="block-content">
    <slot/>
  </div>
</GlassPane>

<style>
  .block-icon img {
    width: 80px;
    height: 80px;
  }
</style>