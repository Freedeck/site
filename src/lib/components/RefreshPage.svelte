<script>
  import { onMount } from "svelte";
  import ComingSoonBlock from "./ComingSoonBlock.svelte";

  export let link;

  onMount(() => {
    window.location = link;
  })
</script>

<meta http-equiv="refresh" content={"0;url=" + link}>
<ComingSoonBlock title="Redirecting you...">
  <a href={link}>Having trouble? Use this link.</a>
  <p>Taking you to <i>{link}</i>...</p>
</ComingSoonBlock>